<?php

namespace Challenge\Controller;


use Base\Controller\BaseController;

/**
 * Trivia_responses Controller class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class TriviaResponsesController extends BaseController
{

    public function __construct()
    {
        $this->setEntity( 'TriviaResponses' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }


	/*#PROTECTED_ZONE#*/
	/**
    	Challenge is an array.
	*/
	public function getChallengeResponses( $challenge ) {
        return $this->getTable( )->getChallengeResponses( $challenge );
	}
	/*#PROTECTED_ZONE#*/
}

