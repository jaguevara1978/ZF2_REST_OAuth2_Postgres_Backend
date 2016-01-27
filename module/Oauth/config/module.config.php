<? return array (
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Oauth\\Controller\\OauthAccessTokensController' => 'Oauth\\Controller\\OauthAccessTokensController',
      'Oauth\\Controller\\OauthAuthorizationCodesController' => 'Oauth\\Controller\\OauthAuthorizationCodesController',
      'Oauth\\Controller\\OauthClientsController' => 'Oauth\\Controller\\OauthClientsController',
      'Oauth\\Controller\\OauthJwtController' => 'Oauth\\Controller\\OauthJwtController',
      'Oauth\\Controller\\OauthRefreshTokensController' => 'Oauth\\Controller\\OauthRefreshTokensController',
      'Oauth\\Controller\\OauthScopesController' => 'Oauth\\Controller\\OauthScopesController',
      'Oauth\\Controller\\OauthUsersController' => 'Oauth\\Controller\\OauthUsersController',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'oauth_access_tokens' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_access_tokens[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthAccessTokensController',
          ),
        ),
      ),
      'oauth_authorization_codes' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_authorization_codes[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthAuthorizationCodesController',
          ),
        ),
      ),
      'oauth_clients' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_clients[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthClientsController',
          ),
        ),
      ),
      'oauth_jwt' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_jwt[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthJwtController',
          ),
        ),
      ),
      'oauth_refresh_tokens' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_refresh_tokens[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthRefreshTokensController',
          ),
        ),
      ),
      'oauth_scopes' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_scopes[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthScopesController',
          ),
        ),
      ),
      'oauth_users' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/oauth_users[/:id]',
          'defaults' => 
          array (
            'controller' => 'Oauth\\Controller\\OauthUsersController',
          ),
        ),
      ),
    ),
  ),
);