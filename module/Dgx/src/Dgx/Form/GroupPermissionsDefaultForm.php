<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Group_permissions_default Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class GroupPermissionsDefaultForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'GroupPermissionsDefaultForm' );

        $this->add( array (
          'name' => 'group_perm_seq_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_permissions_default.group_perm_seq_id',
            'helpText' => 'helpText.group_permissions_default.group_perm_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'group_role_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.group_permissions_default.group_role_seq_id',
            'helpText' => 'helpText.group_permissions_default.group_role_seq_id',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

