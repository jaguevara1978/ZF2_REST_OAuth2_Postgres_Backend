<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Hint Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class HintForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'HintForm' );

        $this->add( array (
          'name' => 'hint_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.hint.hint_seqid',
            'helpText' => 'helpText.hint.hint_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'format',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.hint.format',
            'helpText' => 'helpText.hint.format',
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
            'label' => 'labels.hint.description',
            'helpText' => 'helpText.hint.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'detail',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.hint.detail',
            'helpText' => 'helpText.hint.detail',
          ),
        )
         );
        $this->add( array (
          'name' => 'reference',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.hint.reference',
            'helpText' => 'helpText.hint.reference',
          ),
        )
         );
        $this->add( array (
          'name' => 'success_level',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.hint.success_level',
            'helpText' => 'helpText.hint.success_level',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

