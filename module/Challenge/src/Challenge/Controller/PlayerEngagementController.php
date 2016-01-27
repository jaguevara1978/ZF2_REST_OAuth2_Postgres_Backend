<?php

namespace Challenge\Controller;


use Base\Controller\BaseController;

/**
 * Player_engagement Controller class
 *
 * This is an auto-generated class. Always remember to keep your custom code inside
 * of the PROTECTED_ZONE to avoid losses.
 */
class PlayerEngagementController extends BaseController
{

    public function __construct()
    {
        $this->setEntity( 'PlayerEngagement' );
        $this->setChildNameSpace( __NAMESPACE__ );
    }


	/*#PROTECTED_ZONE#*/
	public function get( $id ) {
        try {
            $this->validateOAuth2( );

            $id = $this->getQuery( $id );

            $result = $this->getTable( )->get ( $id );
 
            return $this->response( $result );
        } catch ( Exception $e ) {
            return $this->response( $e );
        }
    }
    private function getQuery( $id ) {
        if ( is_object( $id ) ) return $id;
        if ( is_array( $id ) ) return $id;
        if ( strpos( $id, QUERY_STRING_ID ) === false ) return $id;

        $queryString = str_replace( QUERY_STRING_ID, '', $id );

        parse_str( $queryString, $query );

        return $query;
    }
	/*#PROTECTED_ZONE#*/
}

