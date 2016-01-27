<?php

namespace Dgx\Form;


use Base\Form\BaseForm;

/**
 * Country Form class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class CountryForm extends BaseForm
{

    public function __construct()
    {
        parent::__construct( 'CountryForm' );

        $this->add( array (
          'name' => 'country_id',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.country.country_id',
            'helpText' => 'helpText.country.country_id',
          ),
        )
         );
        $this->add( array (
          'name' => 'country_name',
          'attributes' => 
          array (
            'type' => 'text',
          ),
          'options' => 
          array (
            'label' => 'labels.country.country_name',
            'helpText' => 'helpText.country.country_name',
          ),
        )
         );
        $this->add( array (
          'name' => 'last_update',
          'attributes' => 
          array (
            'type' => 'timestamp without time zone',
          ),
          'options' => 
          array (
            'label' => 'labels.country.last_update',
            'helpText' => 'helpText.country.last_update',
          ),
        )
         );
    }


	/*#PROTECTED_ZONE#*/
	
	/*#PROTECTED_ZONE#*/
}

