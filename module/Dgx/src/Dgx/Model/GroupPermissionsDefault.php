<?php

namespace Dgx\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Group_permissions_default Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class GroupPermissionsDefault extends BaseModel
{

    protected $group_perm_seq_id = null;

    protected $group_role_seq_id = null;

    public function exchangeArray($data)
    {
        $this->group_perm_seq_id = ( isset( $data[ 'group_perm_seq_id' ] ) ) ? $data[ 'group_perm_seq_id' ] : null;
        $this->group_role_seq_id = ( isset( $data[ 'group_role_seq_id' ] ) ) ? $data[ 'group_role_seq_id' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'group_perm_seq_id',
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
          'name' => 'group_role_seq_id',
          'required' => true,
          'validators' => 
          array (
            0 => 
            array (
              'name' => 'not_empty',
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

