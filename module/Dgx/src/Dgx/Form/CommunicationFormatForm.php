<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Communication_format Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class CommunicationFormatForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'CommunicationFormatForm' );

        $this->add( array (
          'name' => 'communication_format',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.communication_format.communication_format',
            'helpText' => 'helpText.communication_format.communication_format',
          ),
        )
         );
        $this->add( array (
          'name' => 'comm_format_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.communication_format.comm_format_label',
            'helpText' => 'helpText.communication_format.comm_format_label',
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
            'label' => 'labels.communication_format.description',
            'helpText' => 'helpText.communication_format.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'mime_type',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.communication_format.mime_type',
            'helpText' => 'helpText.communication_format.mime_type',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

