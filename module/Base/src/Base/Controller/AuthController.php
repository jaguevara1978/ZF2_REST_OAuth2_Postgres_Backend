<?php

namespace Base\Controller;


use Base\Controller\BaseController;

use Base\Exception\CommonException;
use \Exception;
use Oauth\Controller\OauthAccessTokensController;
use Zend\Db\Sql\Where;

use Zend\Authentication\Result; 

/**
 * Authentication Controller class
 *
 */
class AuthController extends BaseController {
    protected $authservice;

    public function __construct() {
        $this->setDBName( 'oauth' );
        $this->setEntity( 'OauthUsers' );
        $this->setModuleName( 'Oauth' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }

    private function getAuthService() {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator( )->get( 'AuthService' );
        }
         
        return $this->authservice;
    }

    /* ************************** // !UTILS **************************** */
    
    /**
    * Validate if the User exists, if true then validate password
    * 
    * Returns JsonModel the Contact information
    */
    private function authenticate( &$data ) {
        
        // Look for username on the Contact table, might be Email or UserId.
        $ContactController = $this->getServiceLocator( )->get( 'ContactController' );
        $ContactController->setValidateOAuth( false );

        $validator = new \Zend\Validator\EmailAddress( );

        if ( $validator->isValid( $data[ 'id' ] ) ) {
            // email appears to be valid, Let us look for EMail
            $field = CONTACT_EMAIL;
        } else {
            // email is invalid; so look for UserId
            $field = CONTACT_USERID;
        }

        $query = array(
            QUERY_STRING_WHERE => "$field='".$data[ 'id' ]."'"
        );

        $contact = $ContactController->query( $query );

        if ( count( $contact ) <= 0 ) {
            // User Not found on Contact table, Email or Userid
            // I have no other choice than throwing an exception
			throw new CommonException ( 
			    array( 
			        'messageId' => 'globals.query.record_not_found'
			        ,'parms' => array( 'id' => $data[ 'id' ] )
			        ,EXCEPTION_ERRORKEY => 404
			     ) 
			 );
        } else $contact = $contact[ 0 ];

/*
        if ( $contact->getVariable( EXCEPTION_ERRORKEY ) == 404 ) {
            // User Not found on Contact table, Email or Userid
            // I have no other choice than throwing an exception
			throw new CommonException ( 
			    array( 
			        'messageId' => 'globals.query.record_not_found'
			        ,'parms' => array( 'id' => $data[ USERNAME ] )
			        ,EXCEPTION_ERRORKEY => 404
			     ) 
			 );
        }
*/

        // Now I pass the pk Id value of the contact to the UserName attribute as this is the one
        // We are going to use to search inside the Oauth_users table
//         $data[ USERID ] = strval( $contact->getVariable( $ContactController->getTable( )->getPk( ) ) );
        $data[ USERID ] = strval( $contact[ $ContactController->getTable( )->getPk( ) ] );
 
        $this->getAuthService( )->getAdapter( )
                                ->setIdentity( $data[ USERID ] )
                                ->setCredential( $data[ 'pwd' ] );

        $result = $this->getAuthService( )->authenticate( );

        if ( ! $result->isValid( ) ) {
            switch ( $result->getCode( ) ) {
                /* Possible Results
                Result::SUCCESS
                Result::FAILURE
                Result::FAILURE_IDENTITY_NOT_FOUND
                Result::FAILURE_IDENTITY_AMBIGUOUS
                Result::FAILURE_CREDENTIAL_INVALID
                Result::FAILURE_UNCATEGORIZED
                */
                case Result::FAILURE_IDENTITY_NOT_FOUND:
                    /** do stuff for nonexistent identity **/
                    // TODO - Something unusual is happening, because the Identity MUST exist
                    // on the Oauth_users table, so maybe I should send a warning to the
                    // administrator.
                    break;
            
                case Result::FAILURE_CREDENTIAL_INVALID:
                    /** do stuff for invalid credential **/
                    break;
            
                case Result::SUCCESS:
                    /** do stuff for successful authentication **/
                    break;
            
                default:
                    /** do stuff for other failure **/
                    break;
            }

            $messages = null;
            foreach( $result->getMessages( ) as $message ) {
                if ( $messages ) $messages .= ' - ';
                $messages .= $message;
            }

            throw new Exception( $messages, 401 );
        }

        return $contact;
    }

    public function getToken( $data = null ) {
        $config = $this->getConfig( );

        $request = new \Zend\Http\Request( );
        $request->setUri( $config[ 'zf-oauth2' ][ 'oauthServerUri' ] );
        $request->setMethod( 'POST' );
        
        $client = new \Zend\Http\Client( );
        $adapter = new \Zend\Http\Client\Adapter\Curl( );
        $client->setAdapter( $adapter );

        $adapter->setOptions( array(
            'curloptions' => array(
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                CURLOPT_USERPWD => $config[ 'zf-oauth2' ][ 'client' ].':'.$config[ 'zf-oauth2' ][ 'client_pwd' ],
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYPEER => FALSE,
                CURLOPT_SSL_VERIFYHOST => FALSE,
            )
        ));

        $response = $client->dispatch( $request );
        // I need to extract only the JSon content
        preg_match ( '~\{(?:[^{}]|(?R))*\}~', $response->getContent( ), $jsonArray  );
        
        // From the JSonArray I only need the first element - 0
        $response = json_decode( $jsonArray[ 0 ], true );

        $token = $response[ 'access_token' ];

        // Instantiate the AccessTokens Controller in order to be able to update the record
        $OauthAccessTokensController = $this->getServiceLocator( )->get( 'OauthAccessTokensController' );
        $OauthAccessTokensController->setValidateOAuth( false );
        $responseOAT = $OauthAccessTokensController->update( $token, array( USERID => $data[ USERID ].'' ) );
        if ( $responseOAT->getVariable( 'status' ) == STATUS_FAILED ) {
            // TODO - Log to admin, Something bad happened, this should work without any problem
           throw new \Exception( $responseOAT->getVariable( 'msg' ) );
        } else {
            $response[ USERID ] = $data[ USERID ];
        }          

/*
        if ( $OauthAccessTokensController->getResponse( )->getStatusCode( ) !== 200 ) {
            // TODO - Log to admin, Something bad happened, this should work without any problem
			throw new CommonException ( 
			    array( 
			        'messageId' => 'globals.query.record_not_found'
			        ,'parms' => array( 'id' => $token )
			        ,EXCEPTION_ERRORKEY => 404
			     ) 
			 );
        } else {
            $response[ USERID ] = $data[ USERID ];
        }
*/

        return $response;
    }

    private function renewToken( ) {
        // Validate if it is an expired token
        try {
            $zf2Request = $this->getRequest();
            $headers    = $zf2Request->getHeaders();
            $token = str_replace( 'Bearer ', '', $headers->get( 'Authorization' )->getFieldValue( ) );

            //$this->setValidateOAuth( true );
            $this->validateOAuth2( );
            //$this->setValidateOAuth( false );

            // If the flow passes to this line then the token is still valid
            // there is no need to create a new one, so my response will be
            // the same old token.
             $data = array(
                'oauth' => array (
                    'access_token' => $token
                    ,'expires_in' => 0
                    ,'token_type' => 'Bearer'
                    ,'scope' => null
                )
            );

        } catch ( CommonException $ce ) {
            // A CommonException is the proof that the validateOAuth2 failed
            // Now I have to validate that it is thanks to the Expired_token.
            // If it isn't an expired_token failure, then I can not create a
            // token.
            
            // It is a expired token so, let us create a new one
            if ( $ce->getErrorKey( ) == EXPIRED_TOKEN ) {
                // If we are going to create a new Token we will need the UserId of the old one

                $result = $this->getAccessTokenRecord( $token );
                $data[ USERID ] = $result->getVariable( USERID );

                $data = array(
                    'oauth' => $this->getToken( $data )
                );
            } else {
                // If no expired token failure then I will leave the
                // flow of the exception to continue.
                throw $ce;
            }
        }

        return $data;
    }

    private function activation( ) {
        try {
            // I need to know if the token is valid
            $this->validateOAuth2( );
            
            // Case 1: Valid token - It passed the validation
            
            // Case 2: Already Activated, I have to make sure that
            // The account is not already activated
            $contact = $this->getTokenContact( );
            if ( $contact->getVariable( 'login_validated' ) ) {
                // We got a problem, the login is already validated, then I throw an exception
    			throw new CommonException ( 
    			    array( 
    			        'messageId' => 'globals.messages.account_already_activated'
    			        ,'parms' => array( )
    			        ,EXCEPTION_ERRORKEY => SIGNUP_ALREADY_ACTIVATED
    			     ) 
                );
            }

            // Send feedback Ok if valid, If the validation fails,
            // it is going to throw and Exception
            $data[ 'status' ] = ACTIVATION_TOKEN;
            $config = $this->getConfig( );
            $data[ RECAPTCHA_SITE_KEY ] = $config[ 'recaptcha' ][ RECAPTCHA_SITE_KEY ];

            return $data;   
        } catch ( CommonException $ce ) {
            // Case 3: Expired Token - It is an expired token so, TODO ????
            if ( $ce->getErrorKey( ) == EXPIRED_TOKEN ) {
                // TODO - for now I send OK, but actually
                // the client has to do something else.
                //$data[ 'status' ] = ACTIVATION_TOKEN;
                $contact = $this->getTokenContact( );
                if ( $contact->getVariable( 'login_validated' ) ) {
                    // We got a problem, the login is already validated, then I throw an exception
        			throw new CommonException ( 
        			    array( 
        			        'messageId' => 'globals.messages.account_already_activated'
        			        ,'parms' => array( )
        			        ,EXCEPTION_ERRORKEY => SIGNUP_ALREADY_ACTIVATED
        			        ,'code' => 403
        			     ) 
                    );
                }
                //return $data;
            }

            // Case 4: Invalid Token, Continue with the exception
            throw new Exception( $ce->getMessage( ), 403 );
        }
    }
/*
    
    private function getTokenContact( ) {
        // Get the access_token record
        $zf2Request = $this->getRequest( );
        $headers    = $zf2Request->getHeaders( );
        $token = str_replace( 'Bearer ', '', $headers->get( 'Authorization' )->getFieldValue( ) );
        $accessToken = $this->getAccessTokenRecord( $token );

        // Instantiate the contact controller
        $ContactController = $this->getServiceLocator( )->get( 'ContactController' );
        $ContactController->setValidateOAuth( false );
        // Get the contact with the user_id associated to the Token
        $contact = $ContactController->get( $accessToken->getVariable( USERID ) );
        
        return $contact;
    }
*/
    
    /* ************************** // !END - UTILS **************************** */

    /* ************************** // !CRUD **************************** */
    // Gets the new token
    public function get( $id ) {
        try {
             switch ( $id ) {
                case EXPIRED_TOKEN:
                    $data = $this->renewToken( );
                    break;
                case ACTIVATION_TOKEN:
                    $data = $this->activation( );
                    break;
                default:
                    return parent::get( $id );
                    
/*
        			throw new CommonException ( 
        			    array( 
        			        'messageId' => 'globals.errors.not_acceptable'
        			        ,'parms' => array( )
        			        ,EXCEPTION_ERRORKEY => 406
        			     ) 
                    );
*/
                    break;
            }

            return $this->response( $data );

        } catch ( Exception $e ) {
            return $this->response( $e );
        }
        
    }

    /**
    * Validate user credentials and Create a new Authorization token 
    */
    public function create( $data ) {
        try {
            $result = $this->authenticate( $data );

           // If validation process went well then we need the basic user data
//             $result = $this->getUserInfo( $data[ USERID ] );

            // Gather user information
            $user = array (
/*
                  'first_name' => $result->getVariable( 'first_name' )
                  ,'last_name' => $result->getVariable( 'last_name' )
*/
                  'first_name' => $result[ 'fname' ]
                  ,'last_name' => $result[ 'lname' ]
            );

            // If sign in successful, then get token
            $data = array(
                'oauth' => $this->getToken( $data )
                ,'user' => $user
            );

            return $this->response( $data );

        } catch ( Exception $e ) {
            return $this->response( $e );
        }
    }

    public function getUserInfo( $id ) {
        // Get the Contact by email or userId to find the contactId
        // Instantiate the contact controller
        $ContactController = $this->getServiceLocator( )->get( 'ContactController' );
        $ContactController->setValidateOAuth( false );

        // Get the contact with the user_id associated to the Token
        $where = new Where( );
        $where
            ->nest( )
            ->equalTo( CONTACT_EMAIL, $id )
            ->or
            ->equalTo( CONTACT_USERID, $id );

        $contact = $ContactController->get( $where );
        if ( $contact->getVariable( 'status' ) == STATUS_FAILED ) {
            throw new CommonException (
                array(
			        'messageId' => 'globals.query.record_not_found'
			        ,'parms' => array( 'id' => $id )
                    , EXCEPTION_ERRORKEY => 404
                    , 'code' => 404
                )
            );
        }

        $this->setValidateOAuth( false );
        $result = parent::get( $contact->getVariable( $ContactController->getTable( )->getPk( ) ) );
        $this->setValidateOAuth( true );
 
        // TODO - Validate only one record found
        
        return $result;
    }

    public function getList( ) {
        return $this->response( $this->translate( 'globals.errors.not_acceptable' ), 406 ); 
    }
   
    public function update( $id, $data ) {
        return $this->response( $this->translate( 'globals.errors.not_acceptable' ), 406 ); 
    }
    
    public function delete( $id ) {
        return $this->response( $this->translate( 'globals.errors.not_acceptable' ), 406 ); 
    }
    /* ************************** // !END - CRUD **************************** */

}

