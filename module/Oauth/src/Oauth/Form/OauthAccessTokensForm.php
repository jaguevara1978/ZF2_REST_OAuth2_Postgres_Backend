<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_access_tokens Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthAccessTokensForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthAccessTokensForm' );

        $this->add( array (
          'name' => 'access_token',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_access_tokens.access_token',
            'helpText' => 'helpText.oauth_access_tokens.access_token',
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
            'label' => 'labels.oauth_access_tokens.client_id',
            'helpText' => 'helpText.oauth_access_tokens.client_id',
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
            'label' => 'labels.oauth_access_tokens.user_id',
            'helpText' => 'helpText.oauth_access_tokens.user_id',
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
            'label' => 'labels.oauth_access_tokens.expires',
            'helpText' => 'helpText.oauth_access_tokens.expires',
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
            'label' => 'labels.oauth_access_tokens.scope',
            'helpText' => 'helpText.oauth_access_tokens.scope',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

