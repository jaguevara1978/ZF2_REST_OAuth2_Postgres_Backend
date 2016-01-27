<?namespace Base\Generator;use Base\Generator\BaseGenerator;use Zend\Code\Generator\ClassGenerator;use Zend\Code\Generator\DocBlockGenerator;use Zend\Code\Generator\DocBlock\Tag;use Zend\Code\Generator\PropertyGenerator;use Zend\Code\Generator\MethodGenerator;use Zend\Code\Generator\ParameterGenerator;class TableGenerator extends BaseGenerator {    protected $subDir = 'Model';    protected $suffix = 'Table';    protected $useArr = array (                'Base\Model\BaseTable'=>null,            );    protected $extendedClass = 'BaseTable';    protected $primary;    public function getPrimary( ) {        if ( ! $this->primary ) {            $constraints = $this->getTable( )->getConstraints( );            foreach ( $constraints AS $constraint ) {                if ( $constraint->isPrimaryKey( ) ) {                    $primaryColumns = $constraint->getColumns( );                    return $primaryColumns[ 0 ];                }            }        }        return $this->primary;    }    public function generate( ) {        $properties = array ( );        $properties[ ] = new PropertyGenerator( 'table', $this->getTableName( ), PropertyGenerator::FLAG_PROTECTED );        $properties[ ] = new PropertyGenerator( 'pk', $this->getPrimary( ), PropertyGenerator::FLAG_PROTECTED );                // If the pk of the table has a sequence, then I will create a Sequence name for the pk        foreach ( $this->getTable( )->getColumns( ) as $column ) {            if ( $column->getName( ) !== $this->getPrimary( ) ) continue;            // If the column has a sequence, The default value            $needle = "nextval('";            $default =$column->getColumnDefault( );            $pos = strpos( $default, $needle );            if ( $pos !== false ) { // It means it has a sequence                // Now I am going to get the sequnece name                $name = substr( $default, strlen( $needle ), strpos( $default, "'", strlen( $needle ) + 1 ) - strlen( $needle ) );                $properties[ ] = new PropertyGenerator( 'sequenceName', $name, PropertyGenerator::FLAG_PROTECTED );            }        }        $this->setProperties( $properties );        return parent::generate( );    }    public function addMethods( &$classGenerator ) { }}?>