<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Group_type Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class GroupTypeForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'GroupTypeForm' );

        $this->add( array (
          'name' => 'group_type_seq_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_type.group_type_seq_id',
            'helpText' => 'helpText.group_type.group_type_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'group_type_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.group_type.group_type_label',
            'helpText' => 'helpText.group_type.group_type_label',
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
            'label' => 'labels.group_type.description',
            'helpText' => 'helpText.group_type.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_added',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_type.total_added',
            'helpText' => 'helpText.group_type.total_added',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_deleted',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_type.total_deleted',
            'helpText' => 'helpText.group_type.total_deleted',
          ),
        )
         );
        $this->add( array (
          'name' => 'current_membership',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_type.current_membership',
            'helpText' => 'helpText.group_type.current_membership',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

