<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Language Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class LanguageForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'LanguageForm' );

        $this->add( array (
          'name' => 'language_seqid',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.language.language_seqid',
            'helpText' => 'helpText.language.language_seqid',
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
            'label' => 'labels.language.description',
            'helpText' => 'helpText.language.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

