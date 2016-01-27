<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Miscellaneous_counts Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class MiscellaneousCountsForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'MiscellaneousCountsForm' );

        $this->add( array (
          'name' => 'control_seq_id',
          'attributes' => 
          array (
            'type' => 'smallint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.control_seq_id',
            'helpText' => 'helpText.miscellaneous_counts.control_seq_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_men',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.total_men',
            'helpText' => 'helpText.miscellaneous_counts.total_men',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_women',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.total_women',
            'helpText' => 'helpText.miscellaneous_counts.total_women',
          ),
        )
         );
        $this->add( array (
          'name' => 'active_men',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.active_men',
            'helpText' => 'helpText.miscellaneous_counts.active_men',
          ),
        )
         );
        $this->add( array (
          'name' => 'active_women',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.active_women',
            'helpText' => 'helpText.miscellaneous_counts.active_women',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_other',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.total_other',
            'helpText' => 'helpText.miscellaneous_counts.total_other',
          ),
        )
         );
        $this->add( array (
          'name' => 'active_other',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.miscellaneous_counts.active_other',
            'helpText' => 'helpText.miscellaneous_counts.active_other',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

