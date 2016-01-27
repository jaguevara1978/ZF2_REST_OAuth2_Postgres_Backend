<?php
namespace Base;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Adapter\DbTable\CallbackCheckAdapter as AuthAdapter;
use Zend\Crypt\Password\Bcrypt;

define( 'POST', 'POST' );
define( 'PUT', 'PUT' );
define( 'GET', 'GET' );
define( 'DELETE', 'DELETE' );

define( 'ENVIRONMENT_DEVELOPMENT', 'development' );

define( 'CONTENT_TYPE', 'application/json' );
define( 'TO_JSON', 'JSON' );
define( 'TO_ARRAY', 'ARRAY' );
define( 'TO_OBJECT', 'OBJECT' );
define( 'TYPE_INTEGER_ARRAY', 'TYPE_INTEGER_ARRAY' );

define( 'EXPIRED_TOKEN', 'expired_token' );
define( 'INVALID_TOKEN', 'invalid_token' );
define( 'ACTIVATION_TOKEN', 'activate' );
define( 'SIGNUP_ALREADY_ACTIVATED', 1120 );

define( 'RECAPTCHA_SITE_KEY', 'siteKey' );
define( 'RECAPTCHA_SECRET_KEY', 'secretKey' );


define( 'NEW_TOKEN', 'new_token' );
define( 'USERID', 'user_id' );
define( 'CONTACT_EMAIL', 'primary_email' );
define( 'CONTACT_USERID', 'login_userid' );
define( 'USERNAME', 'username' );
define( 'PASSWORD', 'password' );

define( 'QUERY_STRING_ID', '<query_string>' );
define( 'QUERY_STRING_WHERE', 'where' );
define( 'QUERY_STRING_ORDERBY', 'orderby' );
define( 'QUERY_STRING_AND_DELIMITER', '|' );
define( 'QUERY_STRING_OR_DELIMITER', '#' );

define( 'STATUS_FAILED', 'Failed' );
define( 'EXCEPTION_ERRORKEY', 'errorKey' );
define( 'CONFIG_CKPT_SIGNUP', 'email_ckpt_signup' );
define( 'CONFIG_SPONSOR_SIGNUP', 'email_sponsor_signup' );

define( 'DEFAULT_DISPLAY_TIME', 10 );

class Module {
    public function onBootstrap( MvcEvent $e ) {
        $eventManager        = $e->getApplication( )->getEventManager( );
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach( $eventManager );

        $sm = $e->getApplication( )->getServiceManager( );

        // Translator
        $translator = $sm->get('translator');
        $translator->setLocale( ( isset( $_COOKIE['locale'] ) ? $_COOKIE['locale'] : 'en_US' ) )->setFallbackLocale( 'en_US' );
        /*$translator
            ->setLocale(\Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']))
            ->setFallbackLocale( 'en_US' );*/
        \Zend\Validator\AbstractValidator::setDefaultTranslator($translator);
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig( ) {
        return array(
            'invokables' => array( 
                'OauthAccessTokensController' => 'Oauth\Controller\OauthAccessTokensController'
                ,'OauthUsersController' => 'Oauth\Controller\OauthUsersController'
                ,'ContactController' => 'Dgx\Controller\ContactController'
                ,'AuthController' => 'Base\Controller\AuthController'
                ,'PlayerEngagementController' => 'Challenge\Controller\PlayerEngagementController'
                ,'TriviaResponsesController' => 'Challenge\Controller\TriviaResponsesController'
                ,'AssignedChallengeSponsorshipController' => 'Challenge\Controller\AssignedChallengeSponsorshipController'
                ,'ContactLiveChallengeController' => 'Challenge\Controller\ContactLiveChallengeController'
            ),
            'factories' => array(
                'MailSender' => function ( $sm ) {
                    //$config = $sm->get( 'config' );
                    $MailSender = new \Base\Mail\MailSender( $sm );
                    //$MailSender->setConfig( $config );

                    return $MailSender;
                }
                ,'MemberSignUp' => function ( $sm ) {
                    $MailSender = new \Base\Mail\MemberSignUp( $sm );
                    return $MailSender;
                }
                ,'MemberSignUpConfirmation' => function ( $sm ) {
                    $MailSender = new \Base\Mail\MemberSignUpConfirmation( $sm );
                    return $MailSender;
                }
                ,'AuthService' => function( $sm ) {
                    // dbAdapter is oauth db
                    // and has oauth_users table with columns : user_name and pass_word
                    //that password hashed with md5
                    $dbAdapter = $sm->get( 'oauth' );

                    $credentialValidationCallback = function( $dbCredential, $requestCredential ) {
                        return ( new Bcrypt( ) )->verify( $requestCredential, $dbCredential );
                    };
                    /*
                    DbAdapter $zendDb,
                    $tableName = null,
                    $identityColumn = null,
                    $credentialColumn = null,
                    $credentialValidationCallback = null
                    */
                    $authAdapter  = new AuthAdapter(
                                                $dbAdapter
                                                ,'oauth_users'
                                                ,'username'
                                                ,'password'
                                                ,$credentialValidationCallback
                                            );
                     
                    $authService = new AuthenticationService( );
                    $authService->setAdapter( $authAdapter );
                    //$authService->setStorage($sm->get('SanAuth\Model\MyAuthStorage'));
                      
                    return $authService;
                },
            ),
        );
    }
}
