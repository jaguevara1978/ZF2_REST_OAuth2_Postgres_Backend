<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Contact Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ContactForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ContactForm' );

        $this->add( array (
          'name' => 'contact_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.contact_seq_id',
            'helpText' => 'helpText.contact.contact_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'fname',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.fname',
            'helpText' => 'helpText.contact.fname',
          ),
        )
         );
        $this->add( array (
          'name' => 'initial',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.initial',
            'helpText' => 'helpText.contact.initial',
          ),
        )
         );
        $this->add( array (
          'name' => 'lname',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.lname',
            'helpText' => 'helpText.contact.lname',
          ),
        )
         );
        $this->add( array (
          'name' => 'salutation',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.salutation',
            'helpText' => 'helpText.contact.salutation',
          ),
        )
         );
        $this->add( array (
          'name' => 'primary_email',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.primary_email',
            'helpText' => 'helpText.contact.primary_email',
          ),
        )
         );
        $this->add( array (
          'name' => 'primary_phone',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.primary_phone',
            'helpText' => 'helpText.contact.primary_phone',
          ),
        )
         );
        $this->add( array (
          'name' => 'birthdate',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.birthdate',
            'helpText' => 'helpText.contact.birthdate',
          ),
        )
         );
        $this->add( array (
          'name' => 'gender',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.gender',
            'helpText' => 'helpText.contact.gender',
          ),
        )
         );
        $this->add( array (
          'name' => 'ethnicity',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.ethnicity',
            'helpText' => 'helpText.contact.ethnicity',
          ),
        )
         );
        $this->add( array (
          'name' => 'language',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.language',
            'helpText' => 'helpText.contact.language',
          ),
        )
         );
        $this->add( array (
          'name' => 'citizenship',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.citizenship',
            'helpText' => 'helpText.contact.citizenship',
          ),
        )
         );
        $this->add( array (
          'name' => 'orientation',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.orientation',
            'helpText' => 'helpText.contact.orientation',
          ),
        )
         );
        $this->add( array (
          'name' => 'company_name',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.company_name',
            'helpText' => 'helpText.contact.company_name',
          ),
        )
         );
        $this->add( array (
          'name' => 'registration_date',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.registration_date',
            'helpText' => 'helpText.contact.registration_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'last_activation_date',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.last_activation_date',
            'helpText' => 'helpText.contact.last_activation_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'last_login_date',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.last_login_date',
            'helpText' => 'helpText.contact.last_login_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'last_deactivation_date',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.last_deactivation_date',
            'helpText' => 'helpText.contact.last_deactivation_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'login_userid',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.login_userid',
            'helpText' => 'helpText.contact.login_userid',
          ),
        )
         );
        $this->add( array (
          'name' => 'login_validated',
          'attributes' => 
          array (
            'type' => 'boolean',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.login_validated',
            'helpText' => 'helpText.contact.login_validated',
          ),
        )
         );
        $this->add( array (
          'name' => 'player_piece',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact.player_piece',
            'helpText' => 'helpText.contact.player_piece',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

