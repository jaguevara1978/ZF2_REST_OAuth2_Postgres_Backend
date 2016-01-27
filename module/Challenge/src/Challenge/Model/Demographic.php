<?php

namespace Challenge\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Demographic Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class Demographic extends BaseModel
{

    protected $demographic_seqid = null;

    protected $gender = null;

    protected $age_youngest = null;

    protected $age_oldest = null;

    protected $marital_status = null;

    protected $ethnicity = null;

    protected $language = null;

    protected $parent = null;

    protected $sexual_orientation = null;

    protected $ever_divorced = null;

    public function exchangeArray($data)
    {
        $this->demographic_seqid = ( isset( $data[ 'demographic_seqid' ] ) ) ? $data[ 'demographic_seqid' ] : null;
        $this->gender = ( isset( $data[ 'gender' ] ) ) ? $data[ 'gender' ] : null;
        $this->age_youngest = ( isset( $data[ 'age_youngest' ] ) ) ? $data[ 'age_youngest' ] : null;
        $this->age_oldest = ( isset( $data[ 'age_oldest' ] ) ) ? $data[ 'age_oldest' ] : null;
        $this->marital_status = ( isset( $data[ 'marital_status' ] ) ) ? $data[ 'marital_status' ] : null;
        $this->ethnicity = ( isset( $data[ 'ethnicity' ] ) ) ? $data[ 'ethnicity' ] : null;
        $this->language = ( isset( $data[ 'language' ] ) ) ? $data[ 'language' ] : null;
        $this->parent = ( isset( $data[ 'parent' ] ) ) ? $data[ 'parent' ] : null;
        $this->sexual_orientation = ( isset( $data[ 'sexual_orientation' ] ) ) ? $data[ 'sexual_orientation' ] : null;
        $this->ever_divorced = ( isset( $data[ 'ever_divorced' ] ) ) ? $data[ 'ever_divorced' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'demographic_seqid',
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
          'name' => 'gender',
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
                'max' => 1,
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
          'name' => 'age_youngest',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'age_oldest',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'marital_status',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'ethnicity',
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
          'name' => 'language',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'parent',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'sexual_orientation',
          'required' => false,
          'validators' => 
          array (
          ),
        )) );

        $inputFilter->add( $factory->createInput( array (
          'name' => 'ever_divorced',
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

