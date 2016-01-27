<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Challenge Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ChallengeForm' );

        $this->add( array (
          'name' => 'challenge_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.challenge_seqid',
            'helpText' => 'helpText.challenge.challenge_seqid',
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
            'label' => 'labels.challenge.description',
            'helpText' => 'helpText.challenge.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'challenge_type_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.challenge_type_seqid',
            'helpText' => 'helpText.challenge.challenge_type_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'mime_source',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.mime_source',
            'helpText' => 'helpText.challenge.mime_source',
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
            'label' => 'labels.challenge.start_date',
            'helpText' => 'helpText.challenge.start_date',
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
            'label' => 'labels.challenge.end_date',
            'helpText' => 'helpText.challenge.end_date',
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
            'label' => 'labels.challenge.paused',
            'helpText' => 'helpText.challenge.paused',
          ),
        )
         );
        $this->add( array (
          'name' => 'viewed_count',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.viewed_count',
            'helpText' => 'helpText.challenge.viewed_count',
          ),
        )
         );
        $this->add( array (
          'name' => 'skipped_count',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.skipped_count',
            'helpText' => 'helpText.challenge.skipped_count',
          ),
        )
         );
        $this->add( array (
          'name' => 'responded_count',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.responded_count',
            'helpText' => 'helpText.challenge.responded_count',
          ),
        )
         );
        $this->add( array (
          'name' => 'skipped_time',
          'attributes' => 
          array (
            'type' => 'time without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.skipped_time',
            'helpText' => 'helpText.challenge.skipped_time',
          ),
        )
         );
        $this->add( array (
          'name' => 'timed_out_count',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.timed_out_count',
            'helpText' => 'helpText.challenge.timed_out_count',
          ),
        )
         );
        $this->add( array (
          'name' => 'display_time',
          'attributes' => 
          array (
            'type' => 'time without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.display_time',
            'helpText' => 'helpText.challenge.display_time',
          ),
        )
         );
        $this->add( array (
          'name' => 'first_hint_time',
          'attributes' => 
          array (
            'type' => 'time without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.first_hint_time',
            'helpText' => 'helpText.challenge.first_hint_time',
          ),
        )
         );
        $this->add( array (
          'name' => 'hint_interval',
          'attributes' => 
          array (
            'type' => 'time without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge.hint_interval',
            'helpText' => 'helpText.challenge.hint_interval',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

