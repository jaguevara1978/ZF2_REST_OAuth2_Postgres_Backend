<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Challenge_format Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeFormatForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ChallengeFormatForm' );

        $this->add( array (
          'name' => 'challenge_format_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_format.challenge_format_seqid',
            'helpText' => 'helpText.challenge_format.challenge_format_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'code',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_format.code',
            'helpText' => 'helpText.challenge_format.code',
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
            'label' => 'labels.challenge_format.description',
            'helpText' => 'helpText.challenge_format.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'use_category',
          'attributes' => 
          array (
            'type' => 'boolean',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_format.use_category',
            'helpText' => 'helpText.challenge_format.use_category',
          ),
        )
         );
        $this->add( array (
          'name' => 'parent_format_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_format.parent_format_seqid',
            'helpText' => 'helpText.challenge_format.parent_format_seqid',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

