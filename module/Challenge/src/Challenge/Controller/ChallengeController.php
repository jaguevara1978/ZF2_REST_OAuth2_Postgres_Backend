<?php

namespace Challenge\Controller;

use \Exception;
use \DateTime;

use Base\Controller\BaseController;

/**
 * Challenge Controller class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeController extends BaseController
{

    public function __construct()
    {
        $this->setEntity( 'Challenge' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }


	/*#PROTECTED_ZONE#*/
	/**
     * Simple PHP age Calculator
     * 
     * Calculate and returns age based on the date provided by the user.
     * @param   date of birth('Format:yyyy-mm-dd').
     * @return  age based on date of birth
     */
/*
    private function ageCalculator( $dob ) {
        if ( !empty( $dob ) ) {
            $birthdate = new DateTime( $dob );
            $today   = new DateTime( 'today' );
            $age = $birthdate->diff( $today )->y;
            return $age;
        } else {
            return 0;
        }
    }
*/

    public function getChallenge( $contact ) {
        return $this->getTable( )->getChallenge( $contact );
    }

    /**
        Convert a time format to just seconds, 
        for example: 1:10:20 = 3600 + 600 + 20 = 4220 Seconds
    */
    private function timeToSecs( $strTime ) {
        $strTime = preg_replace( "/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $strTime );
        sscanf( $strTime, "%d:%d:%d", $hours, $minutes, $seconds );
        $timeSeconds = $hours * 3600 + $minutes * 60 + $seconds;

        return $timeSeconds;
    }

    private function saveHistory( $data ) {
        $data[ 'viewed_count' ] = 1;
        $PlayerEngagementController = $this->getServiceLocator( )->get( 'PlayerEngagementController' );
        $PlayerEngagementController->create( $data );
    }

    public function get( $id ) {
        try {
            if ( $id == 0 ) {
    //             $initTime = now( );
                // I need to know if the token is valid
                $this->validateOAuth2( );
    
                // Valid token - It passed the validation
                // Now I go find the User information
                $contact = $this->getTokenContact( );
    
                // Now I go find the challenge matching Demographics and Player History
                $challenge = $this->getChallenge( $contact );
                
                // Now I go find the Challenge responses
                $TriviaResponsesController = $this->getServiceLocator( )->get( 'TriviaResponsesController' );
                $responses = $TriviaResponsesController->getChallengeResponses( $challenge );
        
                // Now I have to go for an Challenge Assigned sponsor 
                // to show it along with the challenge
                // Now I go find the Challenge responses
                $AssignedChallengeSponsorshipController = $this->getServiceLocator( )->get( 'AssignedChallengeSponsorshipController' );
                $sponsorship = $AssignedChallengeSponsorshipController->getChallengeSponsorship( $challenge );
    
                // Now I save the history of the challenge I am going to respond
                // So I can know later which challenges the player already knows
                // also, I need to keep a record of the actual 
                // Challenge that the contact is answering So I can know later which challenge the answer belongs
                // And it won't be necessary to send or receive the Challenge ID for security purposes
                $this->saveHistory( array(
                    'contact_seqid' => $contact->getVariable( 'contact_seq_id' )
                    , 'challenge_seqid' => $challenge[ 'challenge_seqid' ]
                    , 'sponsorship_seqid' =>  $sponsorship[ 'sponsorship_seqid' ] ) );
    
                // Now I prepare the response for the request
                // Useful UI Info
                $result[ 'correct' ] = -1;
                $result[ 'correct_answer_id' ] = null;
                $result[ 'grade_value' ] = 0;
                $result[ 'msg' ] = null;
                $result[ 'player_answer_id' ] = null;
                $result[ 'response_time' ] = null;
                $data[ 'contact_seqid' ] = $contact->getVariable( 'contact_seq_id' );
                $result[ 'player_stats' ] = $this->getTable( )->getPlayerStats( $data );

                // Basic Challenge Info
                $result[ 'description' ] = $challenge[ 'description' ];
                $result[ 'display_time' ] = !$challenge[ 'display_time' ] ? DEFAULT_DISPLAY_TIME : $challenge[ 'display_time' ];
                $result[ 'site' ] = $sponsorship[ 'default_url' ];
                // Challenge Possible answers
                $count = 0;
                foreach( $responses as $resp ) {
                    $count++;
                    $result[ 'options' ][ $count ][ 'value' ] = $resp[ 'trivia_responses_seqid' ];
                    $result[ 'options' ][ $count ][ 'option' ] = $resp[ 'description' ];
                }
    
    //             __debug( $result, $this, __FUNCTION__ );
               
                return $this->response( $result );
            }
        } catch ( Exception $e ) {
            return $this->response( $e );
        }
    }
    public function getList( ) {
        return $this->response( $this->translate( 'globals.errors.not_acceptable' ), 406 ); 
    }
   
    public function update( $id, $data ) {
        return $this->response( $this->translate( 'globals.errors.not_acceptable' ), 406 ); 
    }
    
    public function delete( $id ) {
        return $this->response( $this->translate( 'globals.errors.not_acceptable' ), 406 ); 
    }
	/*#PROTECTED_ZONE#*/
}

