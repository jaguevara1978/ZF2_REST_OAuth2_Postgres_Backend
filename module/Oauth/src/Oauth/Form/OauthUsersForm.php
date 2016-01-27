<?php

namespace Oauth\Form;


use Base\Form\BaseForm;

/**
 * Oauth_users Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthUsersForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'OauthUsersForm' );

        $this->add( array (
          'name' => 'username',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_users.username',
            'helpText' => 'helpText.oauth_users.username',
          ),
        )
         );
        $this->add( array (
          'name' => 'password',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_users.password',
            'helpText' => 'helpText.oauth_users.password',
          ),
        )
         );
        $this->add( array (
          'name' => 'first_name',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_users.first_name',
            'helpText' => 'helpText.oauth_users.first_name',
          ),
        )
         );
        $this->add( array (
          'name' => 'last_name',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.oauth_users.last_name',
            'helpText' => 'helpText.oauth_users.last_name',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

