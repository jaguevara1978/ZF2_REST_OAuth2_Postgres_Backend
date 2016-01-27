<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Category_challenges Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class CategoryChallengesForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'CategoryChallengesForm' );

        $this->add( array (
          'name' => 'challenge_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.category_challenges.challenge_seqid',
            'helpText' => 'helpText.category_challenges.challenge_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'challenge_category_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.category_challenges.challenge_category_seqid',
            'helpText' => 'helpText.category_challenges.challenge_category_seqid',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

