<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Weighting Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class WeightingForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'WeightingForm' );

        $this->add( array (
          'name' => 'weighting_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.weighting.weighting_seqid',
            'helpText' => 'helpText.weighting.weighting_seqid',
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
            'label' => 'labels.weighting.challenge_seqid',
            'helpText' => 'helpText.weighting.challenge_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'demographic_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.weighting.demographic_seqid',
            'helpText' => 'helpText.weighting.demographic_seqid',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

