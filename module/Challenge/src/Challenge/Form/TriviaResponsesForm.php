<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Trivia_responses Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class TriviaResponsesForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'TriviaResponsesForm' );

        $this->add( array (
          'name' => 'trivia_responses_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.trivia_responses.trivia_responses_seqid',
            'helpText' => 'helpText.trivia_responses.trivia_responses_seqid',
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
            'label' => 'labels.trivia_responses.challenge_seqid',
            'helpText' => 'helpText.trivia_responses.challenge_seqid',
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
            'label' => 'labels.trivia_responses.description',
            'helpText' => 'helpText.trivia_responses.description',
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
            'label' => 'labels.trivia_responses.start_date',
            'helpText' => 'helpText.trivia_responses.start_date',
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
            'label' => 'labels.trivia_responses.end_date',
            'helpText' => 'helpText.trivia_responses.end_date',
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
            'label' => 'labels.trivia_responses.viewed_count',
            'helpText' => 'helpText.trivia_responses.viewed_count',
          ),
        )
         );
        $this->add( array (
          'name' => 'selected_count',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.trivia_responses.selected_count',
            'helpText' => 'helpText.trivia_responses.selected_count',
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
            'label' => 'labels.trivia_responses.paused',
            'helpText' => 'helpText.trivia_responses.paused',
          ),
        )
         );
        $this->add( array (
          'name' => 'selected_time',
          'attributes' => 
          array (
            'type' => 'time with time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.trivia_responses.selected_time',
            'helpText' => 'helpText.trivia_responses.selected_time',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

