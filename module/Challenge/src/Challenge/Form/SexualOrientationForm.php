<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Sexual_orientation Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class SexualOrientationForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'SexualOrientationForm' );

        $this->add( array (
          'name' => 'sexual_orientation_seqid',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.sexual_orientation.sexual_orientation_seqid',
            'helpText' => 'helpText.sexual_orientation.sexual_orientation_seqid',
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
            'label' => 'labels.sexual_orientation.description',
            'helpText' => 'helpText.sexual_orientation.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

