<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Logged_activity Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class LoggedActivityForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'LoggedActivityForm' );

        $this->add( array (
          'name' => 'activity_type_seq_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.logged_activity.activity_type_seq_id',
            'helpText' => 'helpText.logged_activity.activity_type_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'activity_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.logged_activity.activity_label',
            'helpText' => 'helpText.logged_activity.activity_label',
          ),
        )
         );
        $this->add( array (
          'name' => 'default_param_label',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.logged_activity.default_param_label',
            'helpText' => 'helpText.logged_activity.default_param_label',
          ),
        )
         );
        $this->add( array (
          'name' => 'default_param_value',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.logged_activity.default_param_value',
            'helpText' => 'helpText.logged_activity.default_param_value',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

