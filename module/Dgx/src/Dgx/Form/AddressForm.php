<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Address Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class AddressForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'AddressForm' );

        $this->add( array (
          'name' => 'address_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.address.address_seq_id',
            'helpText' => 'helpText.address.address_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'line1',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address.line1',
            'helpText' => 'helpText.address.line1',
          ),
        )
         );
        $this->add( array (
          'name' => 'line2',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address.line2',
            'helpText' => 'helpText.address.line2',
          ),
        )
         );
        $this->add( array (
          'name' => 'contact_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.address.contact_id',
            'helpText' => 'helpText.address.contact_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'address_type',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address.address_type',
            'helpText' => 'helpText.address.address_type',
          ),
        )
         );
        $this->add( array (
          'name' => 'country_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address.country_id',
            'helpText' => 'helpText.address.country_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'state_abbreviation',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address.state_abbreviation',
            'helpText' => 'helpText.address.state_abbreviation',
          ),
        )
         );
        $this->add( array (
          'name' => 'zip_code',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address.zip_code',
            'helpText' => 'helpText.address.zip_code',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

