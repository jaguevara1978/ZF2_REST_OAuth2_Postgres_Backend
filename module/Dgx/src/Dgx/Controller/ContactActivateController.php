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
class ContactActivateController extends BaseController
{

    public function __construct() {
        $this->setEntity( 'Contact' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }



    /*#PROTECTED_ZONE#*/
    /** 
        I will make a request to reCaptcha api to verify if everything is allright
        Please, sendme an array( 'g_recaptcha_response' => <responseOnClient> )
        I will throw an exception if the validation is unsuccessful
    */
    private function validateCaptcha( $data ) {
        // If no exception thrown then everything is going to be all right
        if ( $_SERVER[ 'APPLICATION_ENV' ] !== ENVIRONMENT_DEVELOPMENT ) {
            // Send request to reCaptcha
            $config = $this->getConfig( );
            $payload = array( );

            // Client IP
            $payload[ 'remoteip' ] = Utils::getRemoteIpAddress( );

            // Secret Key provided by google
            $payload[ 'secret' ] = $config[ 'recaptcha' ][ RECAPTCHA_SECRET_KEY ];

            // g-captcha-response string sent from client
            $payload[ 'response' ] = $data[ 'g_recaptcha_response' ];
            //$payload[ 'response' ] = '03AHJ_VuvNKPgrnUUApLuuIDoiRSCjSoHls5u5db192nuxfAeEPk8XVz9ssIGxntBoN01wu3afRwC0NCIlqYPlYVeTIGfJpjzarm0eO-sP5lVEPefgQkuHCbLk6CrUOPrrU4rsJ_dOB6KBruJTWkbpHXViDMPcFGniKlGf_FRP2XODkP4OUVF0Z9ULfhTOXB0NWRIMB1Hg8aMuZH2ft_KlzUnjXNe2rL1XltAtL6jNGFWRA7joZltC4NzvPGL5b2E_wdngdqfLf991pAaOK36jYzDZYxLK5BxCZgCBB8fDDO-8l8MR5ghL4xo3EAy0565MjqVFtrxjnbaleq0Io5WrfnQJ4nrf_zRqFaysmEIGN2it-b8smmgGXj_so3zyAGLIsnXoP-UKyHpcb19ntbVGBHrw64h298LWLD_03RtU01Qs75CW6VVwsPsbOkXLPq5ajbLjinlUblR-QSUcF3Bwy-XyF4gN56SJ7ra7-qPXVKmsgM5wfpweefWeXEJrOPhrnhkDIkhp5rfBN3WymIPs-aKktnt66DRQO5T6c_iKtMdjcAKLlAgVb1pJDggUzIDRT-q3f9rFZesNnPg1BUf9wQUWf_RUBMMbfdHEbj-5Dn7FXMIdy4HA5dhT1qSfNgDdtGZ_ueUU2CKJxnVfNpfRNwQz1Cjk8Pf5hHgrHkn66wYnHl3J_fmkrBRqverMlfmj9kFDbSVuVK8kdIkFMZD1TE-FYeEngXPQHo74ieW0Ezxmw-oN-RnvBklRSkZE1QpcVacqlEzwebludl46mAQNyMVhDT2_FUAnQ0MY2VsEBFB7gwCH7mngVoz2He64d6a3Xa5NpiEcFtF9uC5SV_WBVg57r_AAW1MJWsqSvZi9_Q0SwF2DRVzo-NYepnHnxJdTv14mTj8mJSz6ljH5Yc4G2v-FhcUKRsJl5YQi7PdZ0UE4pr4jVqAO7Ow';

            $response = Utils::sendRequest(
                array (
                    'url' => $config[ 'recaptcha' ][ 'url' ]
                    , 'method' => POST
                    , 'payload' => $payload
                )
            );

            if ( ! $response[ 'success' ] ) {
                throw new CommonException (
                    array(
                        'messageId' => 'globals.messages.signup_confirmation_recaptcha_error'
                        , 'parms' => array( )
                        , EXCEPTION_ERRORKEY => 406
                        , 'code' => 406
                    )
                );
            }
        }

    }

    /**
        I use the token to find the contact and then, I will update some specific
        Fields to activate his account.
        I will throw an exception if something goes wrong
        I return the JsonModel Contact information just in case 
    */
    private function updateContactInfo( ) {
        // If reponse OK, then I activate the record
        $contact = $this->getTokenContact( );
        $contactId = $contact->getVariable( $this->getTable( )->getPk( ) );
        $result = $this->update(
            $contactId
            , array(
                'login_validated' => true
                ,'last_activation_date' => Utils::dateTimeNow( )
            )
        );

        if ( $result->getVariable( 'status' ) == STATUS_FAILED ) {
            throw new CommonException (
                array(
			        'messageId' => $result->getVariable( 'msg' )
			        ,'parms' => array( )
                    , EXCEPTION_ERRORKEY => 406
                    , 'code' => 406
                )
            );
        }

        return $contact;
    }

    private function buildResponseBody( $contact ) {
        // Gather user information
        $user = array (
            USERID => $contact->getVariable( $this->getTable( )->getPk( ) )
            ,'first_name' => $contact->getVariable( 'fname' )
            , 'last_name' => $contact->getVariable( 'lname' )
        );

        // If sign in successful, then get token
        $AuthController = $this->getServiceLocator( )->get( 'AuthController' );
        $data = array(
            'oauth' => $AuthController->getToken( $user )
            ,'user' => $user
        );

        return $data;
    }

    private function sendConfirmationMail( $contact ) {
        // Send SignUp confirmation E-Mail
        // ** If everything is ok so far, then I am going to send an email to the Activated Contact
        $mailSender = $this->getServiceLocator( )->get( 'MemberSignUpConfirmation' );
        $mailSender->addTo( array( $contact->getVariable( CONTACT_EMAIL ) => $contact->getVariable( 'fname' ) ) );
        $mailSender->setBodyParms( $contact->getVariables( ) );
        $mailSender->fly( );
    }

    public function create( $data ) {
        try {
            // Handle transaction
            $this->getConnection( )->beginTransaction( );

            $this->validateOAuth2( );

            $this->validateCaptcha( $data );

            $contact = $this->updateContactInfo( );

            $data = $this->buildResponseBody( $contact );

            $this->sendConfirmationMail( $contact );

            // Everything OK so far, so commit !
            $this->getConnection( )->commit( );

            return $this->response( $data );

        } catch ( CommonException $ce ) {
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
