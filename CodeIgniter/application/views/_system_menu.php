<? $P = strpos( $_SERVER['HTTP_HOST'], 'paidtest.net' ) === false ? 'http://' . $_SERVER['HTTP_HOST'] . '/paidtest/Metronic' : 'http://metronic.paidtest.net'; ?>

<?

  ////
  ///
  //  Menu

  $menu = array(

    /* array(       'Example', 'icon', 'controller' , array(
         array(     'First'  , 'icon', 'controller' , array(
           array(   'A'      , 'icon', 'controller' , array(
             array( '1'      , 'icon', 'controller' ),
             array( '2'      , 'icon', 'controller' ),
             array( '3'      , 'icon', 'controller' ) ) ),
           array(   'B'      , 'icon', 'controller' ),
           array(   'C'      , 'icon', 'controller' ) ) ),
         array(     'Second' , 'icon', 'controller' ),
         array(     'Third'  , 'icon', 'controller' ) ) ) */

    array(   'Home'     , 'icon-home'    , 'system'           ),
    array(   'System'   , 'icon-settings', 'system'           , array(
      array( 'User'     , ''             , 'system_user'      ),
      array( 'Authority', ''             , 'system_authority' ) ) )

  );

                foreach( $menu  as $K0 => $V0 ) { if( $V0[2] == $this -> uri -> segment( 1 ) ) { $M = $K0 . ';'                                    ; }
  if( @$V0[3] ) foreach( $V0[3] as $K1 => $V1 ) { if( $V1[2] == $this -> uri -> segment( 1 ) ) { $M = $K0 . ';' . $K1 . ';'                        ; }
  if( @$V1[3] ) foreach( $V1[3] as $K2 => $V2 ) { if( $V2[2] == $this -> uri -> segment( 1 ) ) { $M = $K0 . ';' . $K1 . ';' . $K2 . ';'            ; }
  if( @$V2[3] ) foreach( $V2[3] as $K3 => $V3 )   if( $V3[2] == $this -> uri -> segment( 1 ) ) { $M = $K0 . ';' . $K1 . ';' . $K2 . ';' . $K3 . ';'; } } } }

  function M( $M, $key ) { if( strpos( $M, $key ) === 0 ) return 'active open'; }

  ////
  ///
  //  Authority

  // AJAX 폼 전달 시 "\r\n"이 아닌 "\n" 만이 전달 되는 이슈가 남아 있다.

  function A( $authority ) { if( strpos( @$_SESSION['authority'], "\n" . $authority . "\n" ) !== false ) return true; }

?>



<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">

  <!-- BEGIN SIDEBAR MENU -->
  <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="80">



      <!-- BEGIN SIDEBAR MENU 0 -->
      <? foreach( $menu as $K0 => $V0 ) { if( A( $V0[2] ) ) { ?>

        <li data-original-title=""
            data-placement     ="right"
            data-html          ="true"
            class              ="tooltips <?= M( $M, $K0 . ';' ) ?> <?= $K0 == 0 ? 'start' : $K0 == count( $menu ) ? 'last' : '' ?>">

          <a href="<?= $V0[2] ?>">
            <i class="<?= $V0[1] ?>"></i>
            <span class="title"><?= $V0[0] ?></span>
            <?= @$V0[3] ? '<span class="arrow ' . M( $M, $K0 . ';' ) . '"></span>' : '' ?>
          </a>

          <? if( @$V0[3] ) { ?><ul class="sub-menu">

            <!-- BEGIN SIDEBAR MENU 1 -->
            <? foreach( $V0[3] as $K1 => $V1 ) { if( A( $V1[2] ) ) { ?>

              <li data-original-title=""
                  data-placement     ="right"
                  data-html          ="true"
                  class              ="tooltips <?= M( $M, $K0 . ';' . $K1 . ';' ) ?>">

                <a href="<?= $V1[2] ?>">
                  <i class="<?= $V1[1] ?>"></i>
                  <?= $V1[0] ?>
                  <?= @$V1[3] ? '<span class="arrow ' . M( $M, $K0 . ';' . $K1 . ';' ) . '"></span>' : '' ?>
                </a>

                <? if( @$V1[3] ) { ?><ul class="sub-menu">

                  <!-- BEGIN SIDEBAR MENU 2 -->
                  <? foreach( $V1[3] as $K2 => $V2 ) { if( A( $V2[2] ) ) { ?>

                    <li data-original-title=""
                        data-placement     ="right"
                        data-html          ="true"
                        class              ="tooltips <?= M( $M, $K0 . ';' . $K1 . ';' . $K2 . ';' ) ?>">

                      <a href="<?= $V2[2] ?>">
                        <i class="<?= $V2[1] ?>"></i>
                        <?= $V2[0] ?>
                        <?= @$V2[3] ? '<span class="arrow ' . M( $M, $K0 . ';' . $K1 . ';' . $K2 . ';' ) . '"></span>' : '' ?>
                      </a>

                      <? if( @$V2[3] ) { ?><ul class="sub-menu">

                        <!-- BEGIN SIDEBAR MENU 3 -->
                        <? foreach( $V2[3] as $K3 => $V3 ) { if( A( $V3[2] ) ) { ?>

                          <li data-original-title=""
                              data-placement     ="right"
                              data-html          ="true"
                              class              ="tooltips  <?= M( $M, $K0 . ';' . $K1 . ';' . $K2 . ';' . $K3 . ';' ) ?>">

                            <a href="<?= $V3[2] ?>">
                              <i class="<?= $V3[1] ?>"></i>
                              <?= $V3[0] ?>
                            </a>

                          </li>

                        <? } } ?>
                        <!-- END SIDEBAR MENU 3 -->

                      </ul><? } ?>

                    </li>

                  <? } } ?>
                  <!-- END SIDEBAR MENU 2 -->

                </ul><? } ?>

              </li>

            <? } } ?>
            <!-- END SIDEBAR MENU 1 -->

          </ul><? } ?>

        </li>

      <? } } ?>
      <!-- END SIDEBAR MENU 0 -->



    </ul>
  </div>
  <!-- END SIDEBAR MENU -->

</div>
<!-- END SIDEBAR -->
