<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Group_roles Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class GroupRolesForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'GroupRolesForm' );

        $this->add( array (
          'name' => 'group_role_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_roles.group_role_seq_id',
            'helpText' => 'helpText.group_roles.group_role_seq_id',
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
            'label' => 'labels.group_roles.description',
            'helpText' => 'helpText.group_roles.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'notes',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.group_roles.notes',
            'helpText' => 'helpText.group_roles.notes',
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
            'label' => 'labels.group_roles.contact_seq_id',
            'helpText' => 'helpText.group_roles.contact_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'group_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_roles.group_seq_id',
            'helpText' => 'helpText.group_roles.group_seq_id',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

