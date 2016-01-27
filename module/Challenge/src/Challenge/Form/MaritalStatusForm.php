<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Marital_status Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class MaritalStatusForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'MaritalStatusForm' );

        $this->add( array (
          'name' => 'marital_status_seqid',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.marital_status.marital_status_seqid',
            'helpText' => 'helpText.marital_status.marital_status_seqid',
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
            'label' => 'labels.marital_status.description',
            'helpText' => 'helpText.marital_status.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

