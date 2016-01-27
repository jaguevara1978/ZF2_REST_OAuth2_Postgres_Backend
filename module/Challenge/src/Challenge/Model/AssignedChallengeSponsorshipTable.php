<?php

namespace Challenge\Model;


use Base\Model\BaseTable;

/**
 * Assigned_challenge_sponsorship Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class AssignedChallengeSponsorshipTable extends BaseTable
{

    protected $table = 'assigned_challenge_sponsorship';

    protected $pk = 'sponsorship_seqid';


	/*#PROTECTED_ZONE#*/
	public function getChallengeSponsorship( $challenge ) {
        $statement = $this->adapter->query(
            'SELECT s.*
            FROM
            	sponsorship s
            	,assigned_challenge_sponsorship acs
            WHERE s.sponsorship_seqid = acs.sponsorship_seqid
            AND ( s.end_date IS NULL OR s.end_date >= current_date )
            AND acs.paused = FALSE
            AND ( acs.end_date IS NULL OR acs.end_date >= current_date )
            AND acs.challenge_seqid = '.$challenge[ 'challenge_seqid' ].'
            ORDER BY random( )
            LIMIT 1;'
        );
        
        $rowset = $statement->execute( );

        return $rowset->current( );
	}
	/*#PROTECTED_ZONE#*/
}

