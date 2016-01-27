<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Trivia_response_grade Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class TriviaResponseGradeForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'TriviaResponseGradeForm' );

        $this->add( array (
          'name' => 'trivia_responses_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.trivia_response_grade.trivia_responses_seqid',
            'helpText' => 'helpText.trivia_response_grade.trivia_responses_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'response_value',
          'attributes' => 
          array (
            'type' => 'numeric',
          ),
          'options' => 
          array (
            'label' => 'labels.trivia_response_grade.response_value',
            'helpText' => 'helpText.trivia_response_grade.response_value',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

