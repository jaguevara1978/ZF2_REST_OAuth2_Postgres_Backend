<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Challenge_hints Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeHintsForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ChallengeHintsForm' );

        $this->add( array (
          'name' => 'challenge_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_hints.challenge_seqid',
            'helpText' => 'helpText.challenge_hints.challenge_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'hint_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_hints.hint_seqid',
            'helpText' => 'helpText.challenge_hints.hint_seqid',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

