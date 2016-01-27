<?php

namespace Dgx\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Activity_log Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ActivityLog extends BaseModel
{

    protected $activity_seq_id = null;

    protected $contact_seq_id = null;

    protected $activity_start_date = null;

    protected $activity_end_date = null;

    protected $param_label = null;

    protected $param_value = null;

    protected $activity_type_seq_id = null;

    public function exchangeArray($data)
    {
        $this->activity_seq_id = ( isset( $data[ 'activity_seq_id' ] ) ) ? $data[ 'activity_seq_id' ] : null;
        $this->contact_seq_id = ( isset( $data[ 'contact_seq_id' ] ) ) ? $data[ 'contact_seq_id' ] : null;
        $this->activity_start_date = ( isset( $data[ 'activity_start_date' ] ) ) ? $data[ 'activity_start_date' ] : null;
        $this->activity_end_date = ( isset( $data[ 'activity_end_date' ] ) ) ? $data[ 'activity_end_date' ] : null;
        $this->param_label = ( isset( $data[ 'param_label' ] ) ) ? $data[ 'param_label' ] : null;
        $this->param_value = ( isset( $data[ 'param_value' ] ) ) ? $data[ 'param_value' ] : null;
        $this->activity_type_seq_id = ( isset( $data[ 'activity_type_seq_id' ] ) ) ? $data[ 'activity_type_seq_id' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'activity_seq_id',
          'required' => false,
          'validators' => 
          array (
            0 => 
            array (
              'name' => 'not_empty',
            ),
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'contact_seq_id',
          'required' => true,
          'validators' => 
          array (
            0 => 
            array (
              'name' => 'not_empty',
            ),
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'activity_start_date',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'activity_end_date',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'param_label',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'param_value',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'activity_type_seq_id',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $this->addCustomFilters( $inputFilter, $factory );
        $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }


	/*#PROTECTED_ZONE#*/
	/**
     * You may customize the filters behaviours using this method
     */
    public function addCustomFilters(&$inputFilter, $factory)
    {
        return $inputFilter;
    }
	/*#PROTECTED_ZONE#*/
}

