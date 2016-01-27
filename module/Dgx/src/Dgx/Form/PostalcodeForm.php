<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Postalcode Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class PostalcodeForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'PostalcodeForm' );

        $this->add( array (
          'name' => 'country_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.postalcode.country_id',
            'helpText' => 'helpText.postalcode.country_id',
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
            'label' => 'labels.postalcode.zip_code',
            'helpText' => 'helpText.postalcode.zip_code',
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
            'label' => 'labels.postalcode.state_abbreviation',
            'helpText' => 'helpText.postalcode.state_abbreviation',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

