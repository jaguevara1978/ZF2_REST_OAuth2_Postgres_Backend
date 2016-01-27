<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Point_of_contact Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class PointOfContactForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'PointOfContactForm' );

        $this->add( array (
          'name' => 'description',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.point_of_contact.description',
            'helpText' => 'helpText.point_of_contact.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'communication_format',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.point_of_contact.communication_format',
            'helpText' => 'helpText.point_of_contact.communication_format',
          ),
        )
         );
        $this->add( array (
          'name' => 'communication_type',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.point_of_contact.communication_type',
            'helpText' => 'helpText.point_of_contact.communication_type',
          ),
        )
         );
        $this->add( array (
          'name' => 'contact_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.point_of_contact.contact_seq_id',
            'helpText' => 'helpText.point_of_contact.contact_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'contact_method_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.point_of_contact.contact_method_id',
            'helpText' => 'helpText.point_of_contact.contact_method_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'alt_contact_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.point_of_contact.alt_contact_seq_id',
            'helpText' => 'helpText.point_of_contact.alt_contact_seq_id',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

