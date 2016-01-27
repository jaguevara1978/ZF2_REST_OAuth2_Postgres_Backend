<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Activity_log Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ActivityLogForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ActivityLogForm' );

        $this->add( array (
          'name' => 'activity_seq_id',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.activity_log.activity_seq_id',
            'helpText' => 'helpText.activity_log.activity_seq_id',
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
            'label' => 'labels.activity_log.contact_seq_id',
            'helpText' => 'helpText.activity_log.contact_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'activity_start_date',
          'attributes' => 
          array (
            'type' => 'timestamp with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.activity_log.activity_start_date',
            'helpText' => 'helpText.activity_log.activity_start_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'activity_end_date',
          'attributes' => 
          array (
            'type' => 'timestamp with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.activity_log.activity_end_date',
            'helpText' => 'helpText.activity_log.activity_end_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'param_label',
          'attributes' => 
          array (
            'type' => 'ARRAY',
          ),
          'options' => 
          array (
            'label' => 'labels.activity_log.param_label',
            'helpText' => 'helpText.activity_log.param_label',
          ),
        )
         );
        $this->add( array (
          'name' => 'param_value',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.activity_log.param_value',
            'helpText' => 'helpText.activity_log.param_value',
          ),
        )
         );
        $this->add( array (
          'name' => 'activity_type_seq_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.activity_log.activity_type_seq_id',
            'helpText' => 'helpText.activity_log.activity_type_seq_id',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

