<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Member_group Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class MemberGroupForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'MemberGroupForm' );

        $this->add( array (
          'name' => 'group_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.member_group.group_seq_id',
            'helpText' => 'helpText.member_group.group_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'group_type_seq_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.member_group.group_type_seq_id',
            'helpText' => 'helpText.member_group.group_type_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'parent_group_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.member_group.parent_group_seq_id',
            'helpText' => 'helpText.member_group.parent_group_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'group_adm_contact_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.member_group.group_adm_contact_seq_id',
            'helpText' => 'helpText.member_group.group_adm_contact_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'group_name',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.member_group.group_name',
            'helpText' => 'helpText.member_group.group_name',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

