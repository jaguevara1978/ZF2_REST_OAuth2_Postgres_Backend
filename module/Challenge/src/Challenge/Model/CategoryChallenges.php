<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Category_challenges Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class CategoryChallenges extends BaseModel
{

    protected $challenge_seqid = null;

    protected $challenge_category_seqid = null;

    public function exchangeArray($data)
    {
        $this->challenge_seqid = ( isset( $data[ 'challenge_seqid' ] ) ) ? $data[ 'challenge_seqid' ] : null;
        $this->challenge_category_seqid = ( isset( $data[ 'challenge_category_seqid' ] ) ) ? $data[ 'challenge_category_seqid' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'challenge_seqid',
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
          'name' => 'challenge_category_seqid',
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

