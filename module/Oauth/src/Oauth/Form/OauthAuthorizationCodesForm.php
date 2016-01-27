<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_authorization_codes Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthAuthorizationCodesForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthAuthorizationCodesForm' );

        $this->add( array (
          'name' => 'authorization_code',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_authorization_codes.authorization_code',
            'helpText' => 'helpText.oauth_authorization_codes.authorization_code',
          ),
        )
         );
        $this->add( array (
          'name' => 'client_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_authorization_codes.client_id',
            'helpText' => 'helpText.oauth_authorization_codes.client_id',
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
            'label' => 'labels.oauth_authorization_codes.user_id',
            'helpText' => 'helpText.oauth_authorization_codes.user_id',
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
            'label' => 'labels.oauth_authorization_codes.redirect_uri',
            'helpText' => 'helpText.oauth_authorization_codes.redirect_uri',
          ),
        )
         );
        $this->add( array (
          'name' => 'expires',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_authorization_codes.expires',
            'helpText' => 'helpText.oauth_authorization_codes.expires',
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
            'label' => 'labels.oauth_authorization_codes.scope',
            'helpText' => 'helpText.oauth_authorization_codes.scope',
          ),
        )
         );
        $this->add( array (
          'name' => 'id_token',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_authorization_codes.id_token',
            'helpText' => 'helpText.oauth_authorization_codes.id_token',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

