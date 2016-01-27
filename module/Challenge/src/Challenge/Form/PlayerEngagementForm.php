<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Player_engagement Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class PlayerEngagementForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'PlayerEngagementForm' );

        $this->add( array (
          'name' => 'challenge_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.challenge_seqid',
            'helpText' => 'helpText.player_engagement.challenge_seqid',
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
            'label' => 'labels.player_engagement.contact_seqid',
            'helpText' => 'helpText.player_engagement.contact_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'viewed_count',
          'attributes' => 
          array (
            'type' => 'numeric',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.viewed_count',
            'helpText' => 'helpText.player_engagement.viewed_count',
          ),
        )
         );
        $this->add( array (
          'name' => 'response_time',
          'attributes' => 
          array (
            'type' => 'time without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.response_time',
            'helpText' => 'helpText.player_engagement.response_time',
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
            'label' => 'labels.player_engagement.skipped_time',
            'helpText' => 'helpText.player_engagement.skipped_time',
          ),
        )
         );
        $this->add( array (
          'name' => 'grade_value',
          'attributes' => 
          array (
            'type' => 'numeric',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.grade_value',
            'helpText' => 'helpText.player_engagement.grade_value',
          ),
        )
         );
        $this->add( array (
          'name' => 'hints_provided',
          'attributes' => 
          array (
            'type' => 'numeric',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.hints_provided',
            'helpText' => 'helpText.player_engagement.hints_provided',
          ),
        )
         );
        $this->add( array (
          'name' => 'trivia_responses_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.trivia_responses_seqid',
            'helpText' => 'helpText.player_engagement.trivia_responses_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'start_time',
          'attributes' => 
          array (
            'type' => 'timestamp with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.start_time',
            'helpText' => 'helpText.player_engagement.start_time',
          ),
        )
         );
        $this->add( array (
          'name' => 'end_time',
          'attributes' => 
          array (
            'type' => 'timestamp with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.player_engagement.end_time',
            'helpText' => 'helpText.player_engagement.end_time',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

