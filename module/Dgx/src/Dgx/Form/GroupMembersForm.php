<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Group_members Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class GroupMembersForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'GroupMembersForm' );

        $this->add( array (
          'name' => 'contact_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_members.contact_seq_id',
            'helpText' => 'helpText.group_members.contact_seq_id',
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
            'label' => 'labels.group_members.group_seq_id',
            'helpText' => 'helpText.group_members.group_seq_id',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

