<?namespace Dgx\Controller;

use Base\Controller\BaseController;

class UserController extends BaseController {    public function __construct( ) {        $this->setEntity( 'User' );        $this->setChildNameSpace( __NAMESPACE__ );    }}?>