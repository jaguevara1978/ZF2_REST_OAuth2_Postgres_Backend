<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Ethnicity Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class EthnicityForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'EthnicityForm' );

        $this->add( array (
          'name' => 'ethnic_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.ethnicity.ethnic_label',
            'helpText' => 'helpText.ethnicity.ethnic_label',
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
            'label' => 'labels.ethnicity.total_entries',
            'helpText' => 'helpText.ethnicity.total_entries',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

