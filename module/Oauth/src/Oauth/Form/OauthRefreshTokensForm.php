<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_refresh_tokens Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthRefreshTokensForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthRefreshTokensForm' );

        $this->add( array (
          'name' => 'refresh_token',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_refresh_tokens.refresh_token',
            'helpText' => 'helpText.oauth_refresh_tokens.refresh_token',
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
            'label' => 'labels.oauth_refresh_tokens.client_id',
            'helpText' => 'helpText.oauth_refresh_tokens.client_id',
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
            'label' => 'labels.oauth_refresh_tokens.user_id',
            'helpText' => 'helpText.oauth_refresh_tokens.user_id',
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
            'label' => 'labels.oauth_refresh_tokens.expires',
            'helpText' => 'helpText.oauth_refresh_tokens.expires',
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
            'label' => 'labels.oauth_refresh_tokens.scope',
            'helpText' => 'helpText.oauth_refresh_tokens.scope',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

