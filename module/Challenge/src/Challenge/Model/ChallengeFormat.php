<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Challenge_format Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeFormat extends BaseModel
{

    protected $challenge_format_seqid = null;

    protected $code = null;

    protected $description = null;

    protected $use_category = null;

    protected $parent_format_seqid = null;

    public function exchangeArray($data)
    {
        $this->challenge_format_seqid = ( isset( $data[ 'challenge_format_seqid' ] ) ) ? $data[ 'challenge_format_seqid' ] : null;
        $this->code = ( isset( $data[ 'code' ] ) ) ? $data[ 'code' ] : null;
        $this->description = ( isset( $data[ 'description' ] ) ) ? $data[ 'description' ] : null;
        $this->use_category = ( isset( $data[ 'use_category' ] ) ) ? $data[ 'use_category' ] : null;
        $this->parent_format_seqid = ( isset( $data[ 'parent_format_seqid' ] ) ) ? $data[ 'parent_format_seqid' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'challenge_format_seqid',
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
          'name' => 'code',
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
                'max' => 20,
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
            0 => 
            array (
              'name' => 'StringLength',
              'options' => 
              array (
                'encoding' => 'UTF-8',
                'min' => 1,
                'max' => 256,
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
          'name' => 'use_category',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'parent_format_seqid',
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

