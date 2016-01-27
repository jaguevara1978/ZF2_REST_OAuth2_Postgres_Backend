<?php

namespace Oauth\Model;


use Base\Model\BaseModel;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Oauth_clients Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class OauthClients extends BaseModel
{

    protected $client_id = null;

    protected $client_secret = null;

    protected $redirect_uri = null;

    protected $grant_types = null;

    protected $scope = null;

    protected $user_id = null;

    public function exchangeArray($data)
    {
        $this->client_id = ( isset( $data[ 'client_id' ] ) ) ? $data[ 'client_id' ] : null;
        $this->client_secret = ( isset( $data[ 'client_secret' ] ) ) ? $data[ 'client_secret' ] : null;
        $this->redirect_uri = ( isset( $data[ 'redirect_uri' ] ) ) ? $data[ 'redirect_uri' ] : null;
        $this->grant_types = ( isset( $data[ 'grant_types' ] ) ) ? $data[ 'grant_types' ] : null;
        $this->scope = ( isset( $data[ 'scope' ] ) ) ? $data[ 'scope' ] : null;
        $this->user_id = ( isset( $data[ 'user_id' ] ) ) ? $data[ 'user_id' ] : null;
    }

    public function getInputFilter()
    {
        if ( !$this->inputFilter ) {
        $inputFilter = new InputFilter();
        $factory     = new InputFactory();


        $inputFilter->add( $factory->createInput( array (
          'name' => 'client_id',
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
                'max' => 80,
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
          'name' => 'client_secret',
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
                'max' => 80,
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
          'name' => 'redirect_uri',
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
                'max' => 2000,
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
          'name' => 'grant_types',
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
          'name' => 'user_id',
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
                'max' => 255,
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

