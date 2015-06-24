<? $P = strpos( $_SERVER['HTTP_HOST'], 'paidtest.net' ) === false ? 'http://' . $_SERVER['HTTP_HOST'] . '/paidtest/Metronic' : 'http://metronic.paidtest.net'; ?>



</div>
<!-- END CONTAINER -->



<!-- BEGIN FOOTER -->
<div class="page-footer">
  <div class="page-footer-inner">
    2015 &copy; PAIDTEST.net by Jay Casee.
  </div>
  <div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
  </div>
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!--[if lt IE 9]>
<script src="metronic/assets/global/plugins/respond.min.js" ></script>
<script src="metronic/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.min.js"                                           ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery-migrate.min.js"                                   ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery-ui/jquery-ui.min.js"                              ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js"                           ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"              ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.blockui.min.js"                                   ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.cokie.min.js"                                     ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/uniform/jquery.uniform.min.js"                           ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"             ></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"                            ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"                ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"                 ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"                ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"               ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"                   ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"            ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/morris/morris.min.js"                                    ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/morris/raphael-min.js"                                   ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.sparkline.min.js"                                 ></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/scripts/metronic.js"                                             ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/layout4/scripts/layout.js"                                        ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/layout4/scripts/demo.js"                                          ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/pages/scripts/index3.js"                                          ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/pages/scripts/tasks.js"                                           ></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
  jQuery(document).ready(function() {
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    Demo.init(); // init demo features
    Index.init(); // init index page
    Tasks.initDashboardWidget(); // init tash dashboard widget
  });
</script>

<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->

</html>
