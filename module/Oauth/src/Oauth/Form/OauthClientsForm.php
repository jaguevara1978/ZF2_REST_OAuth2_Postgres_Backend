<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_clients Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthClientsForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthClientsForm' );

        $this->add( array (
          'name' => 'client_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_clients.client_id',
            'helpText' => 'helpText.oauth_clients.client_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'client_secret',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_clients.client_secret',
            'helpText' => 'helpText.oauth_clients.client_secret',
          ),
        )
         );
        $this->add( array (
          'name' => 'redirect_uri',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_clients.redirect_uri',
            'helpText' => 'helpText.oauth_clients.redirect_uri',
          ),
        )
         );
        $this->add( array (
          'name' => 'grant_types',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_clients.grant_types',
            'helpText' => 'helpText.oauth_clients.grant_types',
          ),
        )
         );
        $this->add( array (
          'name' => 'scope',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_clients.scope',
            'helpText' => 'helpText.oauth_clients.scope',
          ),
        )
         );
        $this->add( array (
          'name' => 'user_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_clients.user_id',
            'helpText' => 'helpText.oauth_clients.user_id',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

