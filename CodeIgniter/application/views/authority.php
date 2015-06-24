<? $P = strpos($_SERVER['HTTP_HOST'], 'paidtest.net') === false ? 'http://' . $_SERVER['HTTP_HOST'] .
'/paidtest/Metronic' : 'http://metronic.paidtest.net'; ?>

    

<!DOCTYPE html>

<!--[if IE 8]>    <html lang="en" class="ie8 no-js"><![endif]-->
<!--[if IE 9]>    <html lang="en" class="ie9 no-js"><![endif]-->
<!--[if !IE]><!--><html lang="en" class="no-js"><!--<![endif]-->

<!-- BEGIN HEAD -->
<head>

  <meta charset="utf-8"/>

  <title>PAIDTEST.net</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge"                              >
  <meta http-equiv="Content-type"    content="text/html; charset=utf-8"             >
  <meta name="viewport"              content="width=device-width, initial-scale=1.0">
  <meta name="description"           content=""                                     >
  <meta name="author"                content=""                                     >

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"      >
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css"      >
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css"            >
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/uniform/css/uniform.default.css"            >
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/pages/css/login2.css">
  <!-- END PAGE LEVEL SCRIPTS -->

  <!-- BEGIN THEME STYLES -->
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/css/components-rounded.css"    id="style_components">
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/css/plugins.css"                                    >
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/layout4/css/layout.css"                              >
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/layout4/css/themes/default.css" id="style_color"     >
  <link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/layout4/css/custom.css"                              >
  <!-- END THEME STYLES -->

  <link rel="shortcut icon" href="favicon.ico">

</head>
<!-- END HEAD -->



<!-- BEGIN BODY -->
<body class="login">

<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler"></div>
<!-- END SIDEBAR TOGGLER BUTTON -->

<!-- BEGIN LOGO -->
<div class="logo">
  <a href="authority.php" style="font-size: 20px; font-weight: bold;">PAIDTEST.net</a>
</div>
<!-- END LOGO -->

<!-- BEGIN LOGIN -->
<div class="content">



  <!-- BEGIN LOGIN FORM -->
  <?= form_open('authority/log_in', array('id' => 'login-form', 'class' =>
'login-form')) ?>
    <input type='submit' class='hide'>
    <div class="form-title">
      <span class="form-title">Welcome</span>
      <span class="form-subtitle">Please log in.</span>
    </div>
    <div id='LIF1' class="alert alert-danger <?= validation_errors() || @$message ?
'' : 'display-hide' ?>" style='margin-bottom: 15px;'>
      <button class="close" data-close="alert"></button>
      <span id='message_1'><?= validation_errors() ?><?= @$message ?></span>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Mail</label>
      <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Mail" name="mail" value='<?= @
$_COOKIE['mail'] ?>'>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Password</label>
      <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password">
    </div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary btn-block uppercase">Log in</button>
    </div>
    <div class="form-actions">
      <div class="pull-left">
        <label class="rememberme check"><input type="checkbox" name="remember" value="1" <?= @
$_COOKIE['mail'] ? 'checked' : '' ?>/>Remember Me</label>
      </div>
      <div class="pull-right forget-password-block">
        <a href="javascript:;" id="forget-password" onclick='request_password( );'>Request Password</a> &nbsp; <span class="forget-password">·</span> &nbsp;
        <a href="javascript:;" id="register-btn"    onclick='sign_up( );'         >Sign Up</a>
      </div>
    </div>
  </form>
  <!-- END LOGIN FORM -->



  <!-- BEGIN FORGOT PASSWORD FORM -->
  <?= form_open('authority/request_password', array('id' => 'forget-form',
'class' => 'forget-form')) ?>
    <input type='submit' class='hide'>
    <div class="form-title">
      <span class="form-title">Request Password</span>
      <span class="form-subtitle">Please enter your mail info.</span>
    </div>
    <div id='LIF2' class="alert alert-info <?= @$forgot == true ? '' :
'display-hide' ?>" style='margin-bottom: 15px;'>
      <button class="close" data-close="alert"></button>
      <span><?= @$message ?></span>
    </div>
    <div id='LIF4' class="alert alert-danger <?= (validation_errors() || @$message )  && @$forgot == false?
'' : 'display-hide' ?>" style='margin-bottom: 15px;'>
      <button class="close" data-close="alert"></button>
      <span><?= validation_errors() ?><?= @$message ?></span>
    </div>
    <div class="form-group">
      <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Mail" name="mail"/>
    </div>
    <div class="form-actions">
      <button type="button" class="btn btn-default" onclick='log_in( );'>Back</button>
      <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
    </div>
  </form>
  <!-- END FORGOT PASSWORD FORM -->



  <!-- BEGIN REGISTRATION FORM -->
  <?= form_open('authority/sign_up', array('id' => 'register-form', 'class' =>
'register-form')) ?>
    <input type='submit' class='hide'>
    <div class="form-title">
      <span class="form-title">Sign Up</span>
      <span class="form-subtitle">Please enter your account info.</span>
    </div>
    <div id='LIF3' class="alert alert-danger <?= validation_errors() || @$message ?
'' : 'display-hide' ?>" style='margin-bottom: 15px;'>
      <button class="close" data-close="alert"></button>
      <span><?= validation_errors() ?><?= @$message ?></span>
    </div>
    <div class="form-group">
      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
      <label class="control-label visible-ie8 visible-ie9">Mail</label>
      <input class="form-control placeholder-no-fix" type="text" placeholder="Mail" name="mail"/>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Password</label>
      <input class="form-control placeholder-no-fix" type="password" placeholder="Password" name="password"/>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Password Confirmation</label>
      <input class="form-control placeholder-no-fix" type="password" placeholder="Password Confirmation" name="confirmation"/>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Name</label>
      <input class="form-control placeholder-no-fix" type="text" placeholder="Name" name="name"/>
    </div>
    <div class="form-actions">
      <button type="button" id="register-back-btn"   class="btn btn-default" onclick='log_in( );'>Back</button>
      <button type="submit" id="register-submit-btn" class="btn btn-primary uppercase pull-right">Submit</button>
    </div>
  </form>
  <!-- END REGISTRATION FORM -->



</div>
<div class="copyright hide">
  <iframe name='E'></iframe>
</div>
<!-- END LOGIN -->



<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!--[if lt IE 9]>
<script src="<?= $P ?>/theme/assets/global/plugins/respond.min.js" ></script>
<script src="<?= $P ?>/theme/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.min.js"                ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery-migrate.min.js"        ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.blockui.min.js"        ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery.cokie.min.js"          ></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script type="text/javascript" src="<?= $P ?>/theme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>-->
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="<?= $P ?>/theme/assets/global/scripts/metronic.js"     ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/layout4/scripts/layout.js"></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/layout4/scripts/demo.js"  ></script>
<script type="text/javascript" src="<?= $P ?>/theme/assets/admin/pages/scripts/login.js"   ></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
  jQuery( document ).ready( function( ) {
    Metronic.init( );
      Layout.init( );
       Login.init( );
        Demo.init( );
  } );
</script>

<!-- END JAVASCRIPTS -->



<?

if (strpos($_SERVER["REQUEST_URI"], 'request_password') !== false) {
    echo '<script> document.getElementById(  "login-form" ).style.display = "none"; 
                   document.getElementById( "forget-form" ).style.display = "block"; </script>';
}
if (strpos($_SERVER["REQUEST_URI"], 'sign_up') !== false) {
    echo '<script> document.getElementById(    "login-form" ).style.display = "none"; 
                   document.getElementById( "register-form" ).style.display = "block"; </script>';
}
?>



<script>

  function log_in(           ) { document.getElementById(    "login-form" ).style.display = "block"; 
                                 document.getElementById( "register-form" ).style.display = "none";
                                 document.getElementById(   "forget-form" ).style.display = "none";
                                 document.getElementById(          "LIF1" ).style.display = "none"; }

  function request_password( ) { document.getElementById(    "login-form" ).style.display = "none"; 
                                 document.getElementById(   "forget-form" ).style.display = "block";
                                 document.getElementById(          "LIF2" ).style.display = "none"; }

  function sign_up(          ) { document.getElementById(    "login-form" ).style.display = "none"; 
                                 document.getElementById( "register-form" ).style.display = "block";
                                 document.getElementById(          "LIF3" ).style.display = "none";
                                 document.getElementById(          "LIF4" ).style.display = "none"; }

</script>



</body>
<!-- END BODY -->

</html>
