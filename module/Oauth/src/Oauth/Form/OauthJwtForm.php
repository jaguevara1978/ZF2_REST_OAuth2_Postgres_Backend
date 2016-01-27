<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_jwt Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthJwtForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthJwtForm' );

        $this->add( array (
          'name' => 'client_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_jwt.client_id',
            'helpText' => 'helpText.oauth_jwt.client_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'subject',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_jwt.subject',
            'helpText' => 'helpText.oauth_jwt.subject',
          ),
        )
         );
        $this->add( array (
          'name' => 'public_key',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_jwt.public_key',
            'helpText' => 'helpText.oauth_jwt.public_key',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

