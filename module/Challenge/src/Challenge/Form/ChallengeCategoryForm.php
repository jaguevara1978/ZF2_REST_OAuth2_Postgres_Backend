<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Challenge_category Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeCategoryForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'ChallengeCategoryForm' );

        $this->add( array (
          'name' => 'challenge_category_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_category.challenge_category_seqid',
            'helpText' => 'helpText.challenge_category.challenge_category_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'category_title',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_category.category_title',
            'helpText' => 'helpText.challenge_category.category_title',
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
            'label' => 'labels.challenge_category.description',
            'helpText' => 'helpText.challenge_category.description',
          ),
        )
         );
        $this->add( array (
          'name' => 'FK_challenge_category_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.challenge_category.FK_challenge_category_seqid',
            'helpText' => 'helpText.challenge_category.FK_challenge_category_seqid',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

