<?php

namespace Challenge\Model;


use Base\Model\BaseTable;

/**
 * Challenge Model class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class ChallengeTable extends BaseTable
{

    protected $table = 'challenge';

    protected $pk = 'challenge_seqid';

    protected $sequenceName = 'challenge_challenge_seqid_seq';


	/*#PROTECTED_ZONE#*/
	public function getChallenge( $contact ) {
        /*
        ContactId, Gender, Age, AgeOldest(UnUsed-Set 0), MaritalStatus, 
        Ethnicity, Language, Parent, SexualOrientation, EverDivorced 
        */
        $statement = $this->adapter->query(
            'SELECT challenge_seqid, description, display_time
        	FROM getChallenge( ROW( 
        			'.$contact->getVariable( 'contact_seq_id' ).', 
        			\''.$contact->getVariable( 'gender' ).'\', 
        			( EXTRACT( YEAR FROM age( timestamp \''.$contact->getVariable( 'birthdate' ).'\' ) ) :: bigint ),
        			0,
        			3,
        			3, 
        			2, 
        			false, 
        			'.$contact->getVariable( 'orientation' ).', 
        			false
                ) );'
        );
        
        $result = $statement->execute( );
        $row = $result->current( );
        if ( !$row[ 'challenge_seqid' ] ) {
            /*just for demo pursposes - DELETE*/
            $statementDelete = $this->adapter->query(
                'DELETE FROM player_engagement 
                WHERE contact_seqid = '.$contact->getVariable( 'contact_seq_id' ).';'
            );
            
            $result2 = $statementDelete->execute( );

            $result = $statement->execute( );
            $row = $result->current( );
            /*just for demo pursposes - DELETE*/
            
            if ( !$row[ 'challenge_seqid' ] ) {
    			throw new \Base\Exception\CommonException ( 
    			    array( 
    			        'messageId' => 'globals.challenge.record_not_found'
    			        ,'parms' => array( 'id' => null )
    			        ,EXCEPTION_ERRORKEY => 404
    			     ) 
    			 );
            }
        }

        return $row;
    }
    
    public function validateChallenge( $data ) {
        $statement = $this->adapter->query(
            'SELECT
                response_time,
                floor( grade_value ) grade_value,
                correct,
                correct_answer_id,
            	player_answer_id,
                msg
            FROM validateChallenge( ROW( 
                null,
                '.$data[ 'contact_seqid' ].', 
                null, null, null, null,
                '.$data[ 'tr_id' ].',
                null, null, null, null ) );'
        );
        
        $result = $statement->execute( );
        $row = $result->current( );

//          __debug( $result, $this, __FUNCTION__ );

        if ( count( $row ) <= 0 ) {
			throw new \Base\Exception\CommonException ( 
			    array( 
			        'messageId' => 'globals.challenge.record_not_found'
			        ,'parms' => array( 'id' => null )
			        ,EXCEPTION_ERRORKEY => 404
			     ) 
			 );
        }

        if ( $row[ 'msg' ] ) {
			throw new \Base\Exception\CommonException ( 
			    array( 
			        'messageId' => $row[ 'msg' ]
			        ,'parms' => array( 'id' => null )
			        ,EXCEPTION_ERRORKEY => 200
			     ) 
			 );
        }

        return $row;
    }

    public function getPlayerStats( $data ) {
        $statement = $this->adapter->query(
            'SELECT
            	accumulated_points,
            	answered_challenges,
                msg
            FROM getPlayerStats( '.$data[ 'contact_seqid' ].' );'
        );
        
        $result = $statement->execute( );
        $row = $result->current( );

//          __debug( $result, $this, __FUNCTION__ );

        if ( count( $row ) <= 0 ) {
			throw new \Base\Exception\CommonException ( 
			    array( 
			        'messageId' => 'globals.challenge.record_not_found'
			        ,'parms' => array( 'id' => null )
			        ,EXCEPTION_ERRORKEY => 404
			     ) 
			 );
        }

        if ( $row[ 'msg' ] ) {
			throw new \Base\Exception\CommonException ( 
			    array( 
			        'messageId' => $row[ 'msg' ]
			        ,'parms' => array( 'id' => null )
			        ,EXCEPTION_ERRORKEY => 200
			     ) 
			 );
        }


        /*Temporary - Delete after rewards done */
        $row[ 'accumulated_rewards' ] = rand( 10,100 );

        return $row;
    }

    public function getReward( $data ) {
        $statement = $this->adapter->query(
            'SELECT
            	accumulated_points,
            	answered_challenges,
                msg
            FROM getReward( '.$data[ 'contact_seqid' ].' );'
        );
        
        $result = $statement->execute( );
        $row = $result->current( );

//          __debug( $result, $this, __FUNCTION__ );

        if ( count( $row ) <= 0 ) {
			throw new \Base\Exception\CommonException ( 
			    array( 
			        'messageId' => 'globals.challenge.record_not_found'
			        ,'parms' => array( 'id' => null )
			        ,EXCEPTION_ERRORKEY => 404
			     ) 
			 );
        }

        if ( $row[ 'msg' ] ) {
			throw new \Base\Exception\CommonException ( 
			    array( 
			        'messageId' => $row[ 'msg' ]
			        ,'parms' => array( 'id' => null )
			        ,EXCEPTION_ERRORKEY => 200
			     ) 
			 );
        }


        /*Temporary - Delete after rewards done */
        $row[ 'accumulated_rewards' ] = rand( 10,100 );

        return $row;
    }
	/*#PROTECTED_ZONE#*/
}

