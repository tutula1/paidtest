<?

  class System extends CI_Controller {

    public function __construct( ) {

      parent::__construct( );

      session_start( );

      $this -> load -> helper( 'url' );

      if( ! @$_SESSION['authority'] ) redirect( 'authority' );

    }

    public function index( ) {

      $this -> load -> view( '_system_head.php' );
      $this -> load -> view( '_system_menu.php' );
      $this -> load -> view(  'system.php'      );
      $this -> load -> view( '_system_foot.php' );

    }

  }

?>
