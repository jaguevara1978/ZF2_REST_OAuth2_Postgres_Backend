<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Challenge Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class Challenge extends BaseModel
{

    protected $challenge_seqid = null;

    protected $description = null;

    protected $challenge_type_seqid = null;

    protected $mime_source = null;

    protected $start_date = null;

    protected $end_date = null;

    protected $paused = null;

    protected $viewed_count = null;

    protected $skipped_count = null;

    protected $responded_count = null;

    protected $skipped_time = null;

    protected $timed_out_count = null;

    protected $display_time = null;

    protected $first_hint_time = null;

    protected $hint_interval = null;

    public function exchangeArray($data)
    {
        $this->challenge_seqid = ( isset( $data[ 'challenge_seqid' ] ) ) ? $data[ 'challenge_seqid' ] : null;
        $this->description = ( isset( $data[ 'description' ] ) ) ? $data[ 'description' ] : null;
        $this->challenge_type_seqid = ( isset( $data[ 'challenge_type_seqid' ] ) ) ? $data[ 'challenge_type_seqid' ] : null;
        $this->mime_source = ( isset( $data[ 'mime_source' ] ) ) ? $data[ 'mime_source' ] : null;
        $this->start_date = ( isset( $data[ 'start_date' ] ) ) ? $data[ 'start_date' ] : null;
        $this->end_date = ( isset( $data[ 'end_date' ] ) ) ? $data[ 'end_date' ] : null;
        $this->paused = ( isset( $data[ 'paused' ] ) ) ? $data[ 'paused' ] : null;
        $this->viewed_count = ( isset( $data[ 'viewed_count' ] ) ) ? $data[ 'viewed_count' ] : null;
        $this->skipped_count = ( isset( $data[ 'skipped_count' ] ) ) ? $data[ 'skipped_count' ] : null;
        $this->responded_count = ( isset( $data[ 'responded_count' ] ) ) ? $data[ 'responded_count' ] : null;
        $this->skipped_time = ( isset( $data[ 'skipped_time' ] ) ) ? $data[ 'skipped_time' ] : null;
        $this->timed_out_count = ( isset( $data[ 'timed_out_count' ] ) ) ? $data[ 'timed_out_count' ] : null;
        $this->display_time = ( isset( $data[ 'display_time' ] ) ) ? $data[ 'display_time' ] : null;
        $this->first_hint_time = ( isset( $data[ 'first_hint_time' ] ) ) ? $data[ 'first_hint_time' ] : null;
        $this->hint_interval = ( isset( $data[ 'hint_interval' ] ) ) ? $data[ 'hint_interval' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'challenge_seqid',
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
          'name' => 'challenge_type_seqid',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'mime_source',
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
          'name' => 'paused',
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
          'name' => 'skipped_count',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'responded_count',
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
          'name' => 'timed_out_count',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'display_time',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'first_hint_time',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'hint_interval',
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

