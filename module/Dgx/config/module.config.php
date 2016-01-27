<? return array (
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Dgx\\Controller\\User' => 'Dgx\\Controller\\UserController',
      'Dgx\\Controller\\Language' => 'Dgx\\Controller\\LanguageController',
      'Dgx\\Controller\\LanguageController' => 'Dgx\\Controller\\LanguageController',
      'Dgx\\Controller\\MiscellaneousCountsController' => 'Dgx\\Controller\\MiscellaneousCountsController',
      'Dgx\\Controller\\AddressTypeController' => 'Dgx\\Controller\\AddressTypeController',
      'Dgx\\Controller\\ContactMethodController' => 'Dgx\\Controller\\ContactMethodController',
      'Dgx\\Controller\\AddressController' => 'Dgx\\Controller\\AddressController',
      'Dgx\\Controller\\CountryController' => 'Dgx\\Controller\\CountryController',
      'Dgx\\Controller\\SalutationController' => 'Dgx\\Controller\\SalutationController',
      'Dgx\\Controller\\EthnicityController' => 'Dgx\\Controller\\EthnicityController',
      'Dgx\\Controller\\StateProvinceController' => 'Dgx\\Controller\\StateProvinceController',
      'Dgx\\Controller\\PostalcodeController' => 'Dgx\\Controller\\PostalcodeController',
      'Dgx\\Controller\\LoggedActivityController' => 'Dgx\\Controller\\LoggedActivityController',
      'Dgx\\Controller\\ActivityLogController' => 'Dgx\\Controller\\ActivityLogController',
      'Dgx\\Controller\\GroupTypeController' => 'Dgx\\Controller\\GroupTypeController',
      'Dgx\\Controller\\MemberGroupController' => 'Dgx\\Controller\\MemberGroupController',
      'Dgx\\Controller\\GroupPermissionsDefaultController' => 'Dgx\\Controller\\GroupPermissionsDefaultController',
      'Dgx\\Controller\\GroupMembersController' => 'Dgx\\Controller\\GroupMembersController',
      'Dgx\\Controller\\GroupRolesController' => 'Dgx\\Controller\\GroupRolesController',
      'Dgx\\Controller\\CommunicationFormatController' => 'Dgx\\Controller\\CommunicationFormatController',
      'Dgx\\Controller\\CommunicationTypeController' => 'Dgx\\Controller\\CommunicationTypeController',
      'Dgx\\Controller\\ContactController' => 'Dgx\\Controller\\ContactController',
      'Dgx\\Controller\\PointOfContactController' => 'Dgx\\Controller\\PointOfContactController',
      'Dgx\\Controller\\ContactActivate' => 'Dgx\\Controller\\ContactActivateController',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\Index',
            'action' => 'index',
          ),
        ),
      ),
      'user' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/user[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\User',
          ),
        ),
      ),
      'language' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/language[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\LanguageController',
          ),
        ),
      ),
      'miscellaneous_counts' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/miscellaneous_counts[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\MiscellaneousCountsController',
          ),
        ),
      ),
      'address_type' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/address_type[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\AddressTypeController',
          ),
        ),
      ),
      'contact_method' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/contact_method[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\ContactMethodController',
          ),
        ),
      ),
      'address' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/address[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\AddressController',
          ),
        ),
      ),
      'country' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/country[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\CountryController',
          ),
        ),
      ),
      'salutation' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/salutation[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\SalutationController',
          ),
        ),
      ),
      'ethnicity' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/ethnicity[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\EthnicityController',
          ),
        ),
      ),
      'state_province' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/state_province[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\StateProvinceController',
          ),
        ),
      ),
      'postalcode' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/postalcode[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\PostalcodeController',
          ),
        ),
      ),
      'logged_activity' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/logged_activity[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\LoggedActivityController',
          ),
        ),
      ),
      'activity_log' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/activity_log[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\ActivityLogController',
          ),
        ),
      ),
      'group_type' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/group_type[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\GroupTypeController',
          ),
        ),
      ),
      'member_group' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/member_group[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\MemberGroupController',
          ),
        ),
      ),
      'group_permissions_default' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/group_permissions_default[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\GroupPermissionsDefaultController',
          ),
        ),
      ),
      'group_members' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/group_members[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\GroupMembersController',
          ),
        ),
      ),
      'group_roles' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/group_roles[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\GroupRolesController',
          ),
        ),
      ),
      'communication_format' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/communication_format[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\CommunicationFormatController',
          ),
        ),
      ),
      'communication_type' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/communication_type[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\CommunicationTypeController',
          ),
        ),
      ),
      'contact' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/contact[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\ContactController',
          ),
        ),
      ),
      'contactActivate' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/confirm_signup[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\ContactActivate',
          ),
        ),
      ),
      'point_of_contact' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/point_of_contact[/:id]',
          'defaults' => 
          array (
            'controller' => 'Dgx\\Controller\\PointOfContactController',
          ),
        ),
      ),
    ),
  ),
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
      1 => 'Zend\\Log\\LoggerAbstractServiceFactory',
    ),
    'factories' => 
    array (
      'translator' => 'Zend\\Mvc\\Service\\TranslatorServiceFactory',
    ),
  ),
  'translator' => 
  array (
    'locale' => 'en_US',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'gettext',
        'base_dir' => '/Applications/XAMPP/xamppfiles/htdocs/matoot/api/api_zend/module/Dgx/config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'console' => 
  array (
    'router' => 
    array (
      'routes' => 
      array (
      ),
    ),
  ),
);