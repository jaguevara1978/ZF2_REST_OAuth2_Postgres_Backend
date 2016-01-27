<?php

namespace Challenge\Form;


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
          'name' => 'ethnicity_seqid',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.ethnicity.ethnicity_seqid',
            'helpText' => 'helpText.ethnicity.ethnicity_seqid',
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
            'label' => 'labels.ethnicity.description',
            'helpText' => 'helpText.ethnicity.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

