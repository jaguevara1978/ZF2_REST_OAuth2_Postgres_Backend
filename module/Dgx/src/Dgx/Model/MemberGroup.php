<?php

namespace Dgx\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Member_group Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class MemberGroup extends BaseModel
{

    protected $group_seq_id = null;

    protected $group_type_seq_id = null;

    protected $parent_group_seq_id = null;

    protected $group_adm_contact_seq_id = null;

    protected $group_name = null;

    public function exchangeArray($data)
    {
        $this->group_seq_id = ( isset( $data[ 'group_seq_id' ] ) ) ? $data[ 'group_seq_id' ] : null;
        $this->group_type_seq_id = ( isset( $data[ 'group_type_seq_id' ] ) ) ? $data[ 'group_type_seq_id' ] : null;
        $this->parent_group_seq_id = ( isset( $data[ 'parent_group_seq_id' ] ) ) ? $data[ 'parent_group_seq_id' ] : null;
        $this->group_adm_contact_seq_id = ( isset( $data[ 'group_adm_contact_seq_id' ] ) ) ? $data[ 'group_adm_contact_seq_id' ] : null;
        $this->group_name = ( isset( $data[ 'group_name' ] ) ) ? $data[ 'group_name' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'group_seq_id',
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
          'name' => 'group_type_seq_id',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'parent_group_seq_id',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'group_adm_contact_seq_id',
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
          'name' => 'group_name',
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
                'max' => 64,
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

