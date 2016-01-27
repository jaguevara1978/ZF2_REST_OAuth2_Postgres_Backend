<?php

namespace Dgx\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Miscellaneous_counts Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class MiscellaneousCounts extends BaseModel
{

    protected $control_seq_id = null;

    protected $total_men = null;

    protected $total_women = null;

    protected $active_men = null;

    protected $active_women = null;

    protected $total_other = null;

    protected $active_other = null;

    public function exchangeArray($data)
    {
        $this->control_seq_id = ( isset( $data[ 'control_seq_id' ] ) ) ? $data[ 'control_seq_id' ] : null;
        $this->total_men = ( isset( $data[ 'total_men' ] ) ) ? $data[ 'total_men' ] : null;
        $this->total_women = ( isset( $data[ 'total_women' ] ) ) ? $data[ 'total_women' ] : null;
        $this->active_men = ( isset( $data[ 'active_men' ] ) ) ? $data[ 'active_men' ] : null;
        $this->active_women = ( isset( $data[ 'active_women' ] ) ) ? $data[ 'active_women' ] : null;
        $this->total_other = ( isset( $data[ 'total_other' ] ) ) ? $data[ 'total_other' ] : null;
        $this->active_other = ( isset( $data[ 'active_other' ] ) ) ? $data[ 'active_other' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'control_seq_id',
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
          'name' => 'total_men',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'total_women',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'active_men',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'active_women',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'total_other',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'active_other',
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

