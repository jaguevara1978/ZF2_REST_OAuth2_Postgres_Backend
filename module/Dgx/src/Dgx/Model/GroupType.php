<?php

namespace Dgx\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Group_type Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class GroupType extends BaseModel
{

    protected $group_type_seq_id = null;

    protected $group_type_label = null;

    protected $description = null;

    protected $total_added = null;

    protected $total_deleted = null;

    protected $current_membership = null;

    public function exchangeArray($data)
    {
        $this->group_type_seq_id = ( isset( $data[ 'group_type_seq_id' ] ) ) ? $data[ 'group_type_seq_id' ] : null;
        $this->group_type_label = ( isset( $data[ 'group_type_label' ] ) ) ? $data[ 'group_type_label' ] : null;
        $this->description = ( isset( $data[ 'description' ] ) ) ? $data[ 'description' ] : null;
        $this->total_added = ( isset( $data[ 'total_added' ] ) ) ? $data[ 'total_added' ] : null;
        $this->total_deleted = ( isset( $data[ 'total_deleted' ] ) ) ? $data[ 'total_deleted' ] : null;
        $this->current_membership = ( isset( $data[ 'current_membership' ] ) ) ? $data[ 'current_membership' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'group_type_seq_id',
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
          'name' => 'group_type_label',
          'required' => false,
          'validators' => 
          array (
            0 => 
            array (
              'name' => 'StringLength',
              'options' => 
              array (
                'encoding' => 'UTF-8',
                'min' => 1,
                'max' => 16,
              ),
            ),
            1 => 
            array (
              'name' => 'Alnum',
              'options' => 
              array (
                'allowWhiteSpace' => true,
              ),
            ),
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'description',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'total_added',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'total_deleted',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'current_membership',
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

