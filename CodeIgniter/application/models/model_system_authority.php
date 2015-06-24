<?

  class Model_System_Authority extends CI_Model {

    public function __construct( ) {

      parent::__construct( );

      $this -> load -> database( );

    }



    ////
    ///
    //  Select

    function records( $more = 0 ) {

      $S = &$_SESSION['system_authority_filter'];

      $Q = 'SELECT * 
            FROM   `system_authority`
            WHERE  `delete` IS NULL';

      if( @$S['key_from'] ) $Q .= ' AND `key` >= "' . $S['key_from'] . '"';
      if( @$S['key_to'  ] ) $Q .= ' AND `key` <= "' . $S['key_to'  ] . '"';

      if( @$S['name'         ] ) $Q .= ' AND `name`      LIKE "%' . $S['name'         ] . '%"';
      if( @$S['authority'    ] ) $Q .= ' AND `authority` LIKE "%' . $S['authority'    ] . '%"';

      $Q .= ' ORDER BY `' . $S['field'] . '`' .   $S['order'];
      $Q .= ' LIMIT '     . $S['limit'];
      $Q .= ' OFFSET '    . $S['limit'] * intval( $S['page' ] - 1 + $more );

      $RS = $this -> db -> query( $Q );

      return $RS -> result_array( );

    }

    public function record( $key ) {

      return $this -> db -> query( 'SELECT * FROM `system_authority` WHERE `key` = "' . $key . '"' ) -> row_array( );

    }

    function filter( ) {

      $S = &$_SESSION['system_authority_filter'];

      $S['key_from'     ] = $this -> db -> escape_str( @$_POST['key_from'     ] );
      $S['key_to'       ] = $this -> db -> escape_str( @$_POST['key_to'       ] );
      $S['name'         ] = $this -> db -> escape_str( @$_POST['name'         ] );
      $S['authority'    ] = $this -> db -> escape_str( @$_POST['authority'    ] );
      $S['field'        ] = $this -> db -> escape_str( @$_POST['field'        ] );
      $S['order'        ] = $this -> db -> escape_str( @$_POST['order'        ] );
      $S['limit'        ] = $this -> db -> escape_str( @$_POST['limit'        ] );
      $S['page'         ] = $this -> db -> escape_str( @$_POST['page'         ] );

      if( ! is_numeric( @$S['key_from'] ) ) $S['key_from'] = null;
      if( ! is_numeric( @$S['key_to'  ] ) ) $S['key_to'  ] = null;

      if( ! @$S['field'] ) $S['field'] = 'key';
      if( ! @$S['order'] ) $S['order'] = 'DESC';

      if( ! ( is_numeric( @$S['limit'] ) && @$S['limit'] ) ) $S['limit'] = 10;
      if( ! ( is_numeric( @$S['page' ] ) && @$S['page' ] ) ) $S['page' ] =  1;

      return $S;

    }



    ////
    ///
    //  Insert, Update & Delete

    function validation( ) {

      $this -> load -> library( 'form_validation' );

      $this -> form_validation -> set_rules( 'name'     , 'name'     , 'required' );
      $this -> form_validation -> set_rules( 'authority', 'authority', 'required' );

      if( ! $this -> form_validation -> run( ) ) return $this -> form_validation -> error_array( );

    }

    function insert( ) {

      if( $validation = $this -> validation( ) ) return $validation;

      $this -> db -> query( 'INSERT `system_authority` ( `name`     ,
                                                         `authority`,
                                                         `insert`   )
                             VALUES ( "' . $this -> db -> escape_str( @$_POST['name'         ] ) . '",
                                      "' . $this -> db -> escape_str( @$_POST['authority'    ] ) . '",
                                      NOW( ) )' );

    }

    function update( ) {

      if( $validation = $this -> validation( ) ) return $validation;

      $this -> db -> query( 'UPDATE `system_authority`
                             SET    `name`          = "' . $this -> db -> escape_str( @$_POST['name'     ] ) . '",
                                    `authority`     = "' . $this -> db -> escape_str( @$_POST['authority'] ) . '",
                                    `update`        = NOW( )
                             WHERE  `key`           = "' . $this -> db -> escape_str( @$_POST['key'      ] ) . '"' );

    }

    function delete( $key ) {

      $this -> db -> query( 'UPDATE `system_authority`
                             SET    `delete` = NOW( )
                             WHERE  `key` = "' . $key . '"' );

    }

  }

?>
