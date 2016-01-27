<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Base\Controller\GeneratorController' => 'Base\Controller\GeneratorController',
            'Base\Controller\AuthController' => 'Base\Controller\AuthController',
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        )
        ,'template_map' => array(
            'layout_ckpt'  => __DIR__ . '/../view/email/layout_ckpt.html'
            ,'layout_sponsor'  => __DIR__ . '/../view/email/layout_sponsor.html'
            ,'ckpt_signup'  => __DIR__ . '/../view/email/ckpt_signup.html'
            ,'ckpt_activated' => __DIR__ . '/../view/email/ckpt_activated.html'
            ,'sponsor_signup' => __DIR__ . '/../view/email/sponsor_signup.html'
        )
    ),
    'router' => array(
        'routes' => array(

            'generate' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/gen[/:id]',
                    'defaults' => array(
                        'controller' => 'Base\Controller\GeneratorController',
                    ),
                ),
            ),

            'auth' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/auth[/:id]',
                    'defaults' => array(
                        'controller' => 'Base\Controller\AuthController',
                    ),
                ),
            ),

            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Dgx\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
            'ZF\OAuth2\Service\OAuth2Server'  => 'ZF\OAuth2\Factory\OAuth2ServerFactory'
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);