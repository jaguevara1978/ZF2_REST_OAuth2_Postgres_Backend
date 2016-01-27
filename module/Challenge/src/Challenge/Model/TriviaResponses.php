<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Trivia_responses Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class TriviaResponses extends BaseModel
{

    protected $trivia_responses_seqid = null;

    protected $challenge_seqid = null;

    protected $description = null;

    protected $start_date = null;

    protected $end_date = null;

    protected $viewed_count = null;

    protected $selected_count = null;

    protected $paused = null;

    protected $selected_time = null;

    public function exchangeArray($data)
    {
        $this->trivia_responses_seqid = ( isset( $data[ 'trivia_responses_seqid' ] ) ) ? $data[ 'trivia_responses_seqid' ] : null;
        $this->challenge_seqid = ( isset( $data[ 'challenge_seqid' ] ) ) ? $data[ 'challenge_seqid' ] : null;
        $this->description = ( isset( $data[ 'description' ] ) ) ? $data[ 'description' ] : null;
        $this->start_date = ( isset( $data[ 'start_date' ] ) ) ? $data[ 'start_date' ] : null;
        $this->end_date = ( isset( $data[ 'end_date' ] ) ) ? $data[ 'end_date' ] : null;
        $this->viewed_count = ( isset( $data[ 'viewed_count' ] ) ) ? $data[ 'viewed_count' ] : null;
        $this->selected_count = ( isset( $data[ 'selected_count' ] ) ) ? $data[ 'selected_count' ] : null;
        $this->paused = ( isset( $data[ 'paused' ] ) ) ? $data[ 'paused' ] : null;
        $this->selected_time = ( isset( $data[ 'selected_time' ] ) ) ? $data[ 'selected_time' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'trivia_responses_seqid',
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
          'name' => 'start_date',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'end_date',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'viewed_count',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'selected_count',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'paused',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'selected_time',
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

