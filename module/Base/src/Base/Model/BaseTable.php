<?php// module/Application/src/Application/Model/UserTable.php:namespace Base\Model;use Zend\Db\TableGateway\AbstractTableGateway;use Zend\Db\ResultSet\ResultSet;use Zend\Db\Sql\Where;use Zend\Db\Adapter\Adapter;use Zend\Db\TableGateway\Feature;use Base\Exception\CommonException;class BaseTable extends AbstractTableGateway {    protected $pk;    protected $sequenceName;        public function getPk( ) {        return $this->pk;    }        private function hasSequence( ) {        return ! empty( $this->sequenceName );    }        /**     * @param \Zend\Db\Adapter\Adapter $adapter     */    public function __construct( Adapter $adapter ) {        $this->adapter = $adapter;        if ( $this->hasSequence( ) ) {            $this->featureSet = new Feature\FeatureSet( );            $this->featureSet->addFeature( new Feature\SequenceFeature( $this->pk, $this->sequenceName ) );        }        $this->resultSetPrototype = new ResultSet( );        //$modelName = '\\Application\\Model\\'.ucwords( $this->table );        //$this->resultSetPrototype->setArrayObjectPrototype( new $modelName( ) );        $this->initialize();    }    public function buildWhere( $query ) {        if ( $query instanceof Where ) {            return $query;        } else {            $where = new Where( );            $where->equalTo( $this->pk, $query );            return $where;        }                // TODO - Build a compilator to translate query string to where clause        $whereString = $query[ QUERY_STRING_WHERE ];        /*            TODO - Build a compilator to use this later        $where            ->nest()            ->equalTo('table2.column2', 2)            ->or            ->equalTo('table2.column3', 3)            ->unnest()            ->and            ->equalTo('table1.column1', 1);        */            parse_str( str_replace( QUERY_STRING_AND_DELIMITER, '&', $query[ QUERY_STRING_WHERE ] ), $where );    }    /**        I am able to receive a query by adding it to the url        Instead of the $id you could send me:        /<query_string>where=<fieldName>=<value>|<another_field>=<value>&orderby=<field>=asc    */    public function query( $query ) {        $statement = $this->adapter->query(            'SELECT *            FROM '.$this->table.'            WHERE '.$query[ QUERY_STRING_WHERE ].';'        );                $rowset = $statement->execute( );        $data = array( );        foreach( $rowset as $row ) {            $data[ ] = $row;        }        return $data;    }    public function get ( $query ) {        $where = $this->buildWhere( $query );        $rowset = $this->select( $where );        $row = $rowset->current( );        if ( !$row ) {			throw new CommonException ( 			    array( 			        'messageId' => 'globals.query.record_not_found'			        ,'parms' => array( 'id' => $query /*$this->getSqlStringForSqlObject( )*/ )			        ,EXCEPTION_ERRORKEY => 404			     ) 			 );        }        return $row;    }    public function fetchAll ( ) {        $rowset = $this->select( );        $data = array();        foreach( $rowset as $row ) {            $data[] = $row;        }        return $data;    }    public function updateRecord( $id, $data ) {        $ret = $this->update( $data, array( $this->pk => $id ) );        if ( $ret <= 0 ) {			throw new CommonException ( 			    array( 			        'messageId' => 'globals.query.record_not_found'			        ,'parms' => array( 'id' => $id )			        ,EXCEPTION_ERRORKEY => 404			     ) 			 );        }        $ret = array( 'rowcount' => $ret );        return $ret;    }    public function insertRecord( $data ) {        try {            parent::insert( $data );                            // If the entity has a sequence on the PK then I am going to try            // and retrieve that generated value to send it back            if ( $this->hasSequence( ) ) {                $ret = $this->getLastInsertValue( );                if ( $ret <= 0 ) {        			throw new CommonException (         			    array(         			        'messageId' => 'globals.query.record_not_created'        			        ,'parms' => array( 'id' => implode( ' - ', $data ) )        			        ,EXCEPTION_ERRORKEY => 500        			     )         			 );                }            } else { // No sequence, then I send back the PK value                // If PK value does not exist, then I will send 1                $ret = isset( $data[ $this->pk ] ) ? $data[ $this->pk ] : 1;            }            return $ret;        } catch (  CommonException $ce ) {            throw $ce;        } catch (  \Exception $e ) {            $pos = strpos( $e->getMessage( ), '23505' );            if ( $pos !== false ) {                $detail = explode( 'DETAIL:', $e->getMessage( ) );                if ( array_key_exists( 1, $detail ) ) {                    // Clean string                    $detail = str_replace( array( '(', ')', '  ' ), '', $detail );                    $detail = $detail[ 1 ];                } else {                    $detail = $e->getMessage( );                }    			throw new CommonException (     			    array(     			        'messageId' => 'globals.query.record_already_exists'    			        ,'parms' => array( 'id' => $detail )    			        ,EXCEPTION_ERRORKEY => 23505    			     )     			 );            }            // TODO -  Log to administrator, this would be really bad!            throw $e;        }    }}