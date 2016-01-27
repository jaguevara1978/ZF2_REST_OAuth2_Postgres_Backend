<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

 return array(
    'db' => array(
        'driver'        => 'Pdo_pgsql',
        'dsn'           => 'pgsql:host=192.168.1.253;port=5432;dbname=dgx',
        'adapters' => array(
            'dgx' => array(
               'driver' => 'Pdo_pgsql',
               'dsn'    => 'pgsql:host=192.168.1.253;port=5432;dbname=dgx',
            ),

            'challenge' => array(
               'driver' => 'Pdo_pgsql',
               'dsn'    => 'pgsql:host=192.168.1.253;port=5432;dbname=challenge',
            ),
             
            'zzz' => array(
               'driver' => 'Pdo_pgsql',
               'dsn'    => 'pgsql:host=192.168.1.253;port=5432;dbname=zzz',
            ),
            'oauth' => array(
                'driver' => 'Pdo_pgsql',
                'dsn'      => 'pgsql:host=192.168.1.253;port=5432;dbname=oauth', // for example "mysql:dbname=oauth2_db;host=localhost"
            ),
        )
    )
    ,'allowedOrigins' => array(
        'ckpt' => 'http://members.checkpointchallenge.com'
        ,'sponsor' => 'http://sponsor.matoot.com'
    )
    ,'mailSender' => array(
        CONFIG_CKPT_SIGNUP => array(
            'admin@checkpointchallenge.com' => 'Checkpoint Challenge'
        )
        ,CONFIG_SPONSOR_SIGNUP => array(
            'admin@matoot.com' => 'Matoot'
        )
    )
    ,'service_manager' => array(
         'factories' => array(
             'Zend\Db\Adapter\Adapter'
                     => 'Zend\Db\Adapter\AdapterServiceFactory',
         ),
        // to allow other adapter to be called by
        // $sm->get('db1') or $sm->get('db2') based on the adapters config.
        'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        ),
    ),
 );
