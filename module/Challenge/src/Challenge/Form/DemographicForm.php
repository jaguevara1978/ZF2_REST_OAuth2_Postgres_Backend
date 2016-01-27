<?php

namespace Challenge\Form;


use Base\Form\BaseForm;

/**
 * Demographic Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class DemographicForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'DemographicForm' );

        $this->add( array (
          'name' => 'demographic_seqid',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.demographic_seqid',
            'helpText' => 'helpText.demographic.demographic_seqid',
          ),
        )
         );
        $this->add( array (
          'name' => 'gender',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.gender',
            'helpText' => 'helpText.demographic.gender',
          ),
        )
         );
        $this->add( array (
          'name' => 'age_youngest',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.age_youngest',
            'helpText' => 'helpText.demographic.age_youngest',
          ),
        )
         );
        $this->add( array (
          'name' => 'age_oldest',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.age_oldest',
            'helpText' => 'helpText.demographic.age_oldest',
          ),
        )
         );
        $this->add( array (
          'name' => 'marital_status',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.marital_status',
            'helpText' => 'helpText.demographic.marital_status',
          ),
        )
         );
        $this->add( array (
          'name' => 'ethnicity',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.ethnicity',
            'helpText' => 'helpText.demographic.ethnicity',
          ),
        )
         );
        $this->add( array (
          'name' => 'language',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.language',
            'helpText' => 'helpText.demographic.language',
          ),
        )
         );
        $this->add( array (
          'name' => 'parent',
          'attributes' => 
          array (
            'type' => 'boolean',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.parent',
            'helpText' => 'helpText.demographic.parent',
          ),
        )
         );
        $this->add( array (
          'name' => 'sexual_orientation',
          'attributes' => 
          array (
            'type' => 'integer',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.sexual_orientation',
            'helpText' => 'helpText.demographic.sexual_orientation',
          ),
        )
         );
        $this->add( array (
          'name' => 'ever_divorced',
          'attributes' => 
          array (
            'type' => 'boolean',
          ),
          'options' => 
          array (
            'label' => 'labels.demographic.ever_divorced',
            'helpText' => 'helpText.demographic.ever_divorced',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

