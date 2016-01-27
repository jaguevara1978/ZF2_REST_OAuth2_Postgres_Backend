<?php

namespace Challenge\Model;


use Base\Model\BaseTable;

/**
 * Trivia_responses Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class TriviaResponsesTable extends BaseTable
{

    protected $table = 'trivia_responses';

    protected $pk = 'trivia_responses_seqid';

    protected $sequenceName = 'trivia_responses_trivia_responses_seqid_seq';


	/*#PROTECTED_ZONE#*/
	public function getChallengeResponses( $challenge ) {
        $statement = $this->adapter->query(
            'SELECT tr.* 
            FROM
            	trivia_responses tr
            WHERE tr.paused = FALSE
            AND ( tr.end_date IS NULL OR tr.end_date >= current_date )
            AND tr.challenge_seqid = '.$challenge[ 'challenge_seqid' ].'
            ORDER BY random();'
        );
        
        $rowset = $statement->execute( );

        $data = array( );
        foreach( $rowset as $row ) {
            $data[ ] = $row;
        }

        return $data;
	}
	/*#PROTECTED_ZONE#*/
}

