<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * For_demographic Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ForDemographicForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ForDemographicForm' );

        $this->add( array (
          'name' => 'demographic_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.demographic_seqid',
            'helpText' => 'helpText.for_demographic.demographic_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'sponsorship_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.sponsorship_seqid',
            'helpText' => 'helpText.for_demographic.sponsorship_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_views',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.total_views',
            'helpText' => 'helpText.for_demographic.total_views',
          ),
        )
         );
        $this->add( array (
          'name' => 'total_correct',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.total_correct',
            'helpText' => 'helpText.for_demographic.total_correct',
          ),
        )
         );
        $this->add( array (
          'name' => 'max_display',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.max_display',
            'helpText' => 'helpText.for_demographic.max_display',
          ),
        )
         );
        $this->add( array (
          'name' => 'max_contribution',
          'attributes' => 
          array (
            'type' => 'numeric',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.max_contribution',
            'helpText' => 'helpText.for_demographic.max_contribution',
          ),
        )
         );
        $this->add( array (
          'name' => 'per_display_contribution',
          'attributes' => 
          array (
            'type' => 'numeric',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.per_display_contribution',
            'helpText' => 'helpText.for_demographic.per_display_contribution',
          ),
        )
         );
        $this->add( array (
          'name' => 'start_date',
          'attributes' => 
          array (
            'type' => 'timestamp with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.start_date',
            'helpText' => 'helpText.for_demographic.start_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'end_date',
          'attributes' => 
          array (
            'type' => 'timestamp with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.end_date',
            'helpText' => 'helpText.for_demographic.end_date',
          ),
        )
         );
        $this->add( array (
          'name' => 'paused',
          'attributes' => 
          array (
            'type' => 'boolean',
          ),
          'options' => 
          array (
            'label' => 'labels.for_demographic.paused',
            'helpText' => 'helpText.for_demographic.paused',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

