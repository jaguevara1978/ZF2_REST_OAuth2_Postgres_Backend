<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Player_engagement Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class PlayerEngagement extends BaseModel
{

    protected $challenge_seqid = null;

    protected $contact_seqid = null;

    protected $viewed_count = null;

    protected $response_time = null;

    protected $skipped_time = null;

    protected $grade_value = null;

    protected $hints_provided = null;

    protected $trivia_responses_seqid = null;

    protected $start_time = null;

    protected $end_time = null;

    public function exchangeArray($data)
    {
        $this->challenge_seqid = ( isset( $data[ 'challenge_seqid' ] ) ) ? $data[ 'challenge_seqid' ] : null;
        $this->contact_seqid = ( isset( $data[ 'contact_seqid' ] ) ) ? $data[ 'contact_seqid' ] : null;
        $this->viewed_count = ( isset( $data[ 'viewed_count' ] ) ) ? $data[ 'viewed_count' ] : null;
        $this->response_time = ( isset( $data[ 'response_time' ] ) ) ? $data[ 'response_time' ] : null;
        $this->skipped_time = ( isset( $data[ 'skipped_time' ] ) ) ? $data[ 'skipped_time' ] : null;
        $this->grade_value = ( isset( $data[ 'grade_value' ] ) ) ? $data[ 'grade_value' ] : null;
        $this->hints_provided = ( isset( $data[ 'hints_provided' ] ) ) ? $data[ 'hints_provided' ] : null;
        $this->trivia_responses_seqid = ( isset( $data[ 'trivia_responses_seqid' ] ) ) ? $data[ 'trivia_responses_seqid' ] : null;
        $this->start_time = ( isset( $data[ 'start_time' ] ) ) ? $data[ 'start_time' ] : null;
        $this->end_time = ( isset( $data[ 'end_time' ] ) ) ? $data[ 'end_time' ] : null;
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
          'name' => 'contact_seqid',
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
          'name' => 'viewed_count',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'response_time',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'skipped_time',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'grade_value',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'hints_provided',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'trivia_responses_seqid',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'start_time',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'end_time',
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

