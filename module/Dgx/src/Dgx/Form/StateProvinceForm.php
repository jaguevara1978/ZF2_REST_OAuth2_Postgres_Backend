<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * State_province Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class StateProvinceForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'StateProvinceForm' );

        $this->add( array (
          'name' => 'country_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.country_id',
            'helpText' => 'helpText.state_province.country_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'state_abbreviation',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.state_abbreviation',
            'helpText' => 'helpText.state_province.state_abbreviation',
          ),
        )
         );
        $this->add( array (
          'name' => 'state_name',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.state_name',
            'helpText' => 'helpText.state_province.state_name',
          ),
        )
         );
        $this->add( array (
          'name' => 'active_entries',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.active_entries',
            'helpText' => 'helpText.state_province.active_entries',
          ),
        )
         );
        $this->add( array (
          'name' => 'deleted_entries',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.deleted_entries',
            'helpText' => 'helpText.state_province.deleted_entries',
          ),
        )
         );
        $this->add( array (
          'name' => 'current_entries',
          'attributes' => 
          array (
            'type' => 'bigint',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.current_entries',
            'helpText' => 'helpText.state_province.current_entries',
          ),
        )
         );
        $this->add( array (
          'name' => 'last_updated',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.state_province.last_updated',
            'helpText' => 'helpText.state_province.last_updated',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

