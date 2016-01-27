<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Trivia_response_grade Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class TriviaResponseGrade extends BaseModel
{

    protected $trivia_responses_seqid = null;

    protected $response_value = null;

    public function exchangeArray($data)
    {
        $this->trivia_responses_seqid = ( isset( $data[ 'trivia_responses_seqid' ] ) ) ? $data[ 'trivia_responses_seqid' ] : null;
        $this->response_value = ( isset( $data[ 'response_value' ] ) ) ? $data[ 'response_value' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'trivia_responses_seqid',
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
          'name' => 'response_value',
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

