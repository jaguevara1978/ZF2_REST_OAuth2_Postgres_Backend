<?php
 /**
  * Display all errors when APPLICATION_ENV is development.
  */
if ( array_key_exists( 'APPLICATION_ENV', $_SERVER ) ) {
     if ( $_SERVER[ 'APPLICATION_ENV' ] == 'development' ) {
         error_reporting( E_ALL );
         ini_set( "display_errors", 1 );
     }
}

/* Thanks to this annoying warning I had to do this
    date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in 
    <b>/var/www/checkpoint/api/vendor/bshaffer/oauth2-server-php/src/OAuth2/Storage/Pdo.php</b> on line 
    <b>147</b>
*/
// set default time zone if not set at php.ini
/*
if ( !date_default_timezone_get( 'date.timezone' ) ) {
    date_default_timezone_set( 'America/Vancouver' ); // insert here default timezone
}
*/

 /**
  * This makes our life easier when dealing with paths. Everything is relative
  * to the application root now.
  */
 chdir(dirname(__DIR__));

 // Decline static file requests back to the PHP built-in webserver
 if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
     return false;
 }
/*
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}
*/

function __debug( $var, $class = null, $function = __FUNCTION__, $varname = '' ) {
    //if ( empty( $varname ) ) $varname = print_var_name( $var );
    echo $class ? get_class( $class ) : 'Index.php'
        .'->'.$function
        .'( '.$varname.' )';
    
    echo '<pre>';
    print_r( $var );
    echo '</pre>';
    exit;
}


 // Setup autoloading
 require 'init_autoloader.php';

 // Run the application!
 Zend\Mvc\Application::init(require 'config/application.config.php')->run();