<?php

namespace Oauth\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Oauth_scopes Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthScopes extends BaseModel
{

    protected $type = null;

    protected $scope = null;

    protected $client_id = null;

    protected $is_default = null;

    public function exchangeArray($data)
    {
        $this->type = ( isset( $data[ 'type' ] ) ) ? $data[ 'type' ] : null;
        $this->scope = ( isset( $data[ 'scope' ] ) ) ? $data[ 'scope' ] : null;
        $this->client_id = ( isset( $data[ 'client_id' ] ) ) ? $data[ 'client_id' ] : null;
        $this->is_default = ( isset( $data[ 'is_default' ] ) ) ? $data[ 'is_default' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'type',
          'required' => true,
          'validators' => 
          array (
            0 => 
            array (
              'name' => 'not_empty',
            ),
            1 => 
            array (
              'name' => 'StringLength',
              'options' => 
              array (
                'encoding' => 'UTF-8',
                'min' => 1,
                'max' => 255,
              ),
            ),
            2 => 
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
          'name' => 'scope',
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

        $inputFilter->add( $factory->createInput( array (
          'name' => 'client_id',
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
                'max' => 80,
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
          'name' => 'is_default',
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

