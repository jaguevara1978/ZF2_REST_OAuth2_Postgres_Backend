<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Sponsorship Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class SponsorshipForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'SponsorshipForm' );

        $this->add( array (
          'name' => 'sponsorship_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.sponsorship.sponsorship_seqid',
            'helpText' => 'helpText.sponsorship.sponsorship_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'contact_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.sponsorship.contact_seqid',
            'helpText' => 'helpText.sponsorship.contact_seqid',
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
            'label' => 'labels.sponsorship.start_date',
            'helpText' => 'helpText.sponsorship.start_date',
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
            'label' => 'labels.sponsorship.end_date',
            'helpText' => 'helpText.sponsorship.end_date',
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
            'label' => 'labels.sponsorship.max_display',
            'helpText' => 'helpText.sponsorship.max_display',
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
            'label' => 'labels.sponsorship.max_contribution',
            'helpText' => 'helpText.sponsorship.max_contribution',
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
            'label' => 'labels.sponsorship.per_display_contribution',
            'helpText' => 'helpText.sponsorship.per_display_contribution',
          ),
        )
         );
        $this->add( array (
          'name' => 'priority',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.sponsorship.priority',
            'helpText' => 'helpText.sponsorship.priority',
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
            'label' => 'labels.sponsorship.total_views',
            'helpText' => 'helpText.sponsorship.total_views',
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
            'label' => 'labels.sponsorship.total_correct',
            'helpText' => 'helpText.sponsorship.total_correct',
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
            'label' => 'labels.sponsorship.paused',
            'helpText' => 'helpText.sponsorship.paused',
          ),
        )
         );
        $this->add( array (
          'name' => 'default_url',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.sponsorship.default_url',
            'helpText' => 'helpText.sponsorship.default_url',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

