<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Assigned_challenge_sponsorship Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class AssignedChallengeSponsorshipForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'AssignedChallengeSponsorshipForm' );

        $this->add( array (
          'name' => 'sponsorship_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.assigned_challenge_sponsorship.sponsorship_seqid',
            'helpText' => 'helpText.assigned_challenge_sponsorship.sponsorship_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'challenge_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.assigned_challenge_sponsorship.challenge_seqid',
            'helpText' => 'helpText.assigned_challenge_sponsorship.challenge_seqid',
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
            'label' => 'labels.assigned_challenge_sponsorship.total_views',
            'helpText' => 'helpText.assigned_challenge_sponsorship.total_views',
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
            'label' => 'labels.assigned_challenge_sponsorship.total_correct',
            'helpText' => 'helpText.assigned_challenge_sponsorship.total_correct',
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
            'label' => 'labels.assigned_challenge_sponsorship.start_date',
            'helpText' => 'helpText.assigned_challenge_sponsorship.start_date',
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
            'label' => 'labels.assigned_challenge_sponsorship.end_date',
            'helpText' => 'helpText.assigned_challenge_sponsorship.end_date',
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
            'label' => 'labels.assigned_challenge_sponsorship.paused',
            'helpText' => 'helpText.assigned_challenge_sponsorship.paused',
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
            'label' => 'labels.assigned_challenge_sponsorship.max_display',
            'helpText' => 'helpText.assigned_challenge_sponsorship.max_display',
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
            'label' => 'labels.assigned_challenge_sponsorship.max_contribution',
            'helpText' => 'helpText.assigned_challenge_sponsorship.max_contribution',
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
            'label' => 'labels.assigned_challenge_sponsorship.per_display_contribution',
            'helpText' => 'helpText.assigned_challenge_sponsorship.per_display_contribution',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

