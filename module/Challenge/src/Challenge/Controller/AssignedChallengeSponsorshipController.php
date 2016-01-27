<?php

namespace Challenge\Controller;


use Base\Controller\BaseController;

/**
 * Assigned_challenge_sponsorship Controller class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class AssignedChallengeSponsorshipController extends BaseController
{

    public function __construct()
    {
        $this->setEntity( 'AssignedChallengeSponsorship' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }


	/*#PROTECTED_ZONE#*/
	public function getChallengeSponsorship( $challenge ) {
        return $this->getTable( )->getChallengeSponsorship( $challenge );
	}
	/*#PROTECTED_ZONE#*/
}

