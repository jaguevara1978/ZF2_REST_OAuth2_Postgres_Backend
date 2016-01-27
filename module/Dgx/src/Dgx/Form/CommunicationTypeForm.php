<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Communication_type Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class CommunicationTypeForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'CommunicationTypeForm' );

        $this->add( array (
          'name' => 'communication_type',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.communication_type.communication_type',
            'helpText' => 'helpText.communication_type.communication_type',
          ),
        )
         );
        $this->add( array (
          'name' => 'comm_type_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.communication_type.comm_type_label',
            'helpText' => 'helpText.communication_type.comm_type_label',
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
            'label' => 'labels.communication_type.description',
            'helpText' => 'helpText.communication_type.description',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

