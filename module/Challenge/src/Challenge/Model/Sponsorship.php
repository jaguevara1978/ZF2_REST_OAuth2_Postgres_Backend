<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Sponsorship Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class Sponsorship extends BaseModel
{

    protected $sponsorship_seqid = null;

    protected $contact_seqid = null;

    protected $start_date = null;

    protected $end_date = null;

    protected $max_display = null;

    protected $max_contribution = null;

    protected $per_display_contribution = null;

    protected $priority = null;

    protected $total_views = null;

    protected $total_correct = null;

    protected $paused = null;

    protected $default_url = null;

    public function exchangeArray($data)
    {
        $this->sponsorship_seqid = ( isset( $data[ 'sponsorship_seqid' ] ) ) ? $data[ 'sponsorship_seqid' ] : null;
        $this->contact_seqid = ( isset( $data[ 'contact_seqid' ] ) ) ? $data[ 'contact_seqid' ] : null;
        $this->start_date = ( isset( $data[ 'start_date' ] ) ) ? $data[ 'start_date' ] : null;
        $this->end_date = ( isset( $data[ 'end_date' ] ) ) ? $data[ 'end_date' ] : null;
        $this->max_display = ( isset( $data[ 'max_display' ] ) ) ? $data[ 'max_display' ] : null;
        $this->max_contribution = ( isset( $data[ 'max_contribution' ] ) ) ? $data[ 'max_contribution' ] : null;
        $this->per_display_contribution = ( isset( $data[ 'per_display_contribution' ] ) ) ? $data[ 'per_display_contribution' ] : null;
        $this->priority = ( isset( $data[ 'priority' ] ) ) ? $data[ 'priority' ] : null;
        $this->total_views = ( isset( $data[ 'total_views' ] ) ) ? $data[ 'total_views' ] : null;
        $this->total_correct = ( isset( $data[ 'total_correct' ] ) ) ? $data[ 'total_correct' ] : null;
        $this->paused = ( isset( $data[ 'paused' ] ) ) ? $data[ 'paused' ] : null;
        $this->default_url = ( isset( $data[ 'default_url' ] ) ) ? $data[ 'default_url' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'sponsorship_seqid',
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
          'name' => 'max_display',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'max_contribution',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'per_display_contribution',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'priority',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'total_views',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'total_correct',
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
          'name' => 'default_url',
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
                'max' => 2000,
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

