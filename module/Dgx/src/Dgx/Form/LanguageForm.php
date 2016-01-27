<?php

namespace Dgx\Form;


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
          'name' => 'language_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.language.language_label',
            'helpText' => 'helpText.language.language_label',
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
            'label' => 'labels.language.total_entries',
            'helpText' => 'helpText.language.total_entries',
          ),
        )
         );
        $this->add( array (
          'name' => 'i18n_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.language.i18n_label',
            'helpText' => 'helpText.language.i18n_label',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

