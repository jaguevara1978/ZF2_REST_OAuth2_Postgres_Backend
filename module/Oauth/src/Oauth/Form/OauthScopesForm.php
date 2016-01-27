<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_scopes Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthScopesForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthScopesForm' );

        $this->add( array (
          'name' => 'type',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_scopes.type',
            'helpText' => 'helpText.oauth_scopes.type',
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
            'label' => 'labels.oauth_scopes.scope',
            'helpText' => 'helpText.oauth_scopes.scope',
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
            'label' => 'labels.oauth_scopes.client_id',
            'helpText' => 'helpText.oauth_scopes.client_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'is_default',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_scopes.is_default',
            'helpText' => 'helpText.oauth_scopes.is_default',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

