<?php

namespace Dgx\Controller;

use Base\Exception\CommonException;
use Base\Controller\BaseController;
use Base\Utils\Utils;

/**
 * Contact Controller class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ContactController extends BaseController
{

    public function __construct()
    {
        $this->setEntity( 'Contact' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }


	/*#PROTECTED_ZONE#*/
	public function create( $data ) {
        try {
            // Working with transaction
            $this->getConnection( )->beginTransaction();

            $extra = $data[ 'extra' ]; 
            $data = $data[ 'data' ];

            $data[ CONTACT_USERID ] = $data[ CONTACT_EMAIL ];

            $this->validatePayload( $data );

            // ** First I try to insert a new record on Contact
            // TODO - FILL all important fields
//            $data[ 'registration_date' ] = Utils::dateTimeNow( );
            // TODO - Delete this brithdate, just for testing purposes but it has to be fullfilled
            // by the player on first time signin.
            $data[ 'birthdate' ] = '1978-04-01 10:00:00';

            $data[ 'registration_date' ] = 'now()';

            $id = $this->getTable( )->insertRecord( $data );

            // ** If that is successful, then I create a new record on Oauth_users
            $oauthUserData = array(
                USERNAME => "$id" // The Contact's Id becomes the Oauth_users' username
                ,PASSWORD => $extra[ 'password' ]
                ,'first_name' => $data[ 'fname' ]
                ,'last_name' => $data[ 'lname' ]
            );
            $OauthUsersController = $this->getServiceLocator( )->get( 'OauthUsersController' );
            $OauthUsersController->setValidateOauth( false );
            $response = $OauthUsersController->create( $oauthUserData );
            if ( $response->getVariable( 'status' ) == STATUS_FAILED ) {
                throw new \Exception( $response->getVariable( 'msg' ) );
            }          

            // ** Now, let's create a Token for the activation link
            $oauthUserData = array( USERID => $id );
            $AuthController = $this->getServiceLocator( )->get( 'AuthController' );
            $response = $AuthController->getToken( $oauthUserData );
            $data[ 'access_token' ] = $response[ 'access_token' ];

            // ** If everything is ok so far, then I am going to send an email to the new User
            $mailSender = $this->getServiceLocator( )->get( 'MemberSignUp' );
            $mailSender->addTo( array( $data[ CONTACT_EMAIL ] => $data[ 'fname' ] ) );
            $mailSender->setBodyParms( $data );
            $mailSender->fly( );

            // Everything OK so far, so commit !
            $this->getConnection( )->commit( );

            // I do not want to send the token back, it goes on the email
            unset( $data[ 'access_token' ] );

            return $this->response( $data );

        } catch ( CommonException $ce ) {
            if ( $ce->getErrorKey( ) == 23505 ) {
    			$ce = new CommonException ( 
    			    array( 
    			        'messageId' => 'globals.contact.create_email_already_exists'
    			        ,'parms' => array( 'id' => $data[ CONTACT_EMAIL ] )
    			        ,EXCEPTION_ERRORKEY => 406
    			        ,'code' => 406
    			     ) 
    			 );
            }

            // TODO - Remove Commited records from another Entities

            // Rollback any saved stuff
            $this->getConnection( )->rollback( );

            return $this->response( $ce );
        } catch ( \Exception $e ) {
            // TODO - Remove Commited records from another Entities

            // Rollback any saved stuff
            $this->getConnection( )->rollback( );

            return $this->response( $e );
        }
    }
	/*#PROTECTED_ZONE#*/
}

