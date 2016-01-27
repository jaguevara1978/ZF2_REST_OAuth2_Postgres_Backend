<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Salutation Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class SalutationForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'SalutationForm' );

        $this->add( array (
          'name' => 'salutation_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.salutation.salutation_label',
            'helpText' => 'helpText.salutation.salutation_label',
          ),
        )
         );
        $this->add( array (
          'name' => 'full_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.salutation.full_label',
            'helpText' => 'helpText.salutation.full_label',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_entries',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.salutation.total_entries',
            'helpText' => 'helpText.salutation.total_entries',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

