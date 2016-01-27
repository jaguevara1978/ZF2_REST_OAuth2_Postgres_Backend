<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Address_type Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class AddressTypeForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'AddressTypeForm' );

        $this->add( array (
          'name' => 'address_type',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address_type.address_type',
            'helpText' => 'helpText.address_type.address_type',
          ),
        )
         );
        $this->add( array (
          'name' => 'description',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.address_type.description',
            'helpText' => 'helpText.address_type.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

