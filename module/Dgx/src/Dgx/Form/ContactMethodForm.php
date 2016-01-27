<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Contact_method Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ContactMethodForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ContactMethodForm' );

        $this->add( array (
          'name' => 'contact_method_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.contact_method.contact_method_id',
            'helpText' => 'helpText.contact_method.contact_method_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'contact_method_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.contact_method.contact_method_label',
            'helpText' => 'helpText.contact_method.contact_method_label',
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
            'label' => 'labels.contact_method.description',
            'helpText' => 'helpText.contact_method.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

