<?

  class System_Authority extends CI_Controller {

    public function __construct( ) {

      parent::__construct( );

      session_start( );

      // 권한 확인

      $this -> load -> helper( array( 'url', 'form' ) );
      $this -> load -> model( 'model_system_authority' );

    }

    public function index( ) {

      $S = &$_SESSION['system_authority_filter'];

      if( ! @$S['field'] ) $S['field'] = 'key';
      if( ! @$S['order'] ) $S['order'] = 'DESC';
      if( ! @$S['limit'] ) $S['limit'] = 10;
      if( ! @$S['page' ] ) $S['page' ] =  1;

      $this -> load -> view( '_system_head.php'      );
      $this -> load -> view( '_system_menu.php'      );
      $this -> load -> view(  'system_authority.php' );
      $this -> load -> view( '_system_foot.php'      );

    }

    public function records( $more = 0    ) { echo '{"RS":' . json_encode( $this -> model_system_authority -> records( $more ) ) . '}'; }
    public function record(  $key  = null ) { echo            json_encode( $this -> model_system_authority -> record(  $key  ) );       }
    public function filter(               ) { echo                         $this -> model_system_authority -> filter(        );         }
    public function insert(               ) { echo            json_encode( $this -> model_system_authority -> insert(        ) );       }
    public function update(               ) { echo            json_encode( $this -> model_system_authority -> update(        ) );       }
    public function delete(  $key  = null ) {                              $this -> model_system_authority -> delete(  $key  );         }

  }

?>
