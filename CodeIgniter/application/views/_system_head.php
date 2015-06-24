<? $P = strpos( $_SERVER['HTTP_HOST'], 'paidtest.net' ) === false ? 'http://' . $_SERVER['HTTP_HOST'] . '/paidtest/Metronic' : 'http://metronic.paidtest.net'; ?>



<!DOCTYPE html>

<!--[if IE 8]>    <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>    <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>

<meta charset="utf-8"/>

<title>PAIDTEST.net</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport"    content="width=device-width, initial-scale=1">
<meta name="description" content=""                                   >
<meta name="author"      content=""                                   >

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"        >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css"        >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"  >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css"              >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/uniform/css/uniform.default.css"              >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css">
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/fullcalendar/fullcalendar.min.css"                >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css"                         >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/plugins/morris/morris.css"                                >
<!-- END PAGE LEVEL PLUGIN STYLES -->

<!-- BEGIN PAGE STYLES -->
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/pages/css/tasks.css">
<!-- END PAGE STYLES -->

<!-- BEGIN THEME STYLES -->
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/css/components-rounded.css"  id="style_components">
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/global/css/plugins.css"                                  >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/layout4/css/layout.css"                            >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/layout4/css/themes/light.css" id="style_color"     >
<link rel="stylesheet" type="text/css" href="<?= $P ?>/theme/assets/admin/layout4/css/custom.css"                            >
<!-- END THEME STYLES -->

<link rel="shortcut icon" href="favicon.ico"/>

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">



<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">

  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner">
  
    <!-- BEGIN LOGO -->
    <div class="page-logo">
      <a href="index.html">
        <span class="logo-default" style="position: relative; top: 23px; font-size: 20px; font-weight: bold;">PAIDTEST.net</span>
      </a>
      <div class="menu-toggler sidebar-toggler"></div>
    </div>
    <!-- END LOGO -->

    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
    <!-- END RESPONSIVE MENU TOGGLER -->



    <? /*
    <!-- BEGIN PAGE ACTIONS -->
    <div class="page-actions">
      <div class="btn-group">
        <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li>
            <a href="#">
              <i class="icon-docs"></i> New Post </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-tag"></i> New Comment </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-share"></i> Share </a>
          </li>
          <li class="divider">
          </li>
          <li>
            <a href="#">
              <i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- END PAGE ACTIONS -->
    */ ?>



    <!-- BEGIN PAGE TOP -->
    <div class="page-top">

      <? /*
      <!-- BEGIN HEADER SEARCH BOX -->
      <form class="search-form" action="extra_search.html" method="GET">
        <div class="input-group">
          <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
          <span class="input-group-btn">
          <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
          </span>
        </div>
      </form>
      <!-- END HEADER SEARCH BOX -->
      */ ?>

      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          <li class="separator hide">
          </li>



          <? /*
          <!-- BEGIN NOTIFICATION DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <i class="icon-bell"></i>
            <span class="badge badge-success">
            7 </span>
            </a>
            <ul class="dropdown-menu">
              <li class="external">
                <h3><span class="bold">12 pending</span> notifications</h3>
                <a href="extra_profile.html">view all</a>
              </li>
              <li>
                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                  <li>
                    <a href="javascript:;">
                      <span class="time">just now</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-success">
                    <i class="fa fa-plus"></i>
                    </span>
                    New user registered. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">3 mins</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-danger">
                    <i class="fa fa-bolt"></i>
                    </span>
                    Server #12 overloaded. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">10 mins</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-warning">
                    <i class="fa fa-bell-o"></i>
                    </span>
                    Server #2 not responding. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">14 hrs</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-info">
                    <i class="fa fa-bullhorn"></i>
                    </span>
                    Application error. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">2 days</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-danger">
                    <i class="fa fa-bolt"></i>
                    </span>
                    Database overloaded 68%. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">3 days</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-danger">
                    <i class="fa fa-bolt"></i>
                    </span>
                    A user IP blocked. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">4 days</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-warning">
                    <i class="fa fa-bell-o"></i>
                    </span>
                    Storage Server #4 not responding dfdfdfd. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">5 days</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-info">
                    <i class="fa fa-bullhorn"></i>
                    </span>
                    System Error. </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="time">9 days</span>
                    <span class="details">
                    <span class="label label-sm label-icon label-danger">
                    <i class="fa fa-bolt"></i>
                    </span>
                    Storage server failed. </span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- END NOTIFICATION DROPDOWN -->



          <li class="separator hide">
          </li>
          <!-- BEGIN INBOX DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <i class="icon-envelope-open"></i>
            <span class="badge badge-danger">
            4 </span>
            </a>
            <ul class="dropdown-menu">
              <li class="external">
                <h3>You have <span class="bold">7 New</span> Messages</h3>
                <a href="inbox.html">view all</a>
              </li>
              <li>
                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                  <li>
                    <a href="inbox.html?a=view">
                    <span class="photo">
                    <img src="metronic/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                    </span>
                    <span class="subject">
                    <span class="from">
                    Lisa Wong </span>
                    <span class="time">Just Now </span>
                    </span>
                    <span class="message">
                    Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.html?a=view">
                    <span class="photo">
                    <img src="metronic/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                    </span>
                    <span class="subject">
                    <span class="from">
                    Richard Doe </span>
                    <span class="time">16 mins </span>
                    </span>
                    <span class="message">
                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.html?a=view">
                    <span class="photo">
                    <img src="metronic/assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                    </span>
                    <span class="subject">
                    <span class="from">
                    Bob Nilson </span>
                    <span class="time">2 hrs </span>
                    </span>
                    <span class="message">
                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.html?a=view">
                    <span class="photo">
                    <img src="metronic/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                    </span>
                    <span class="subject">
                    <span class="from">
                    Lisa Wong </span>
                    <span class="time">40 mins </span>
                    </span>
                    <span class="message">
                    Vivamus sed auctor 40% nibh congue nibh... </span>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.html?a=view">
                    <span class="photo">
                    <img src="metronic/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                    </span>
                    <span class="subject">
                    <span class="from">
                    Richard Doe </span>
                    <span class="time">46 mins </span>
                    </span>
                    <span class="message">
                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- END INBOX DROPDOWN -->



          <li class="separator hide">
          </li>



          <!-- BEGIN TODO DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <i class="icon-calendar"></i>
            <span class="badge badge-primary">
            3 </span>
            </a>
            <ul class="dropdown-menu extended tasks">
              <li class="external">
                <h3>You have <span class="bold">12 pending</span> tasks</h3>
                <a href="page_todo.html">view all</a>
              </li>
              <li>
                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">New release v1.2 </span>
                    <span class="percent">30%</span>
                    </span>
                    <span class="progress">
                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">Application deployment</span>
                    <span class="percent">65%</span>
                    </span>
                    <span class="progress">
                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">Mobile app release</span>
                    <span class="percent">98%</span>
                    </span>
                    <span class="progress">
                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">Database migration</span>
                    <span class="percent">10%</span>
                    </span>
                    <span class="progress">
                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">Web server upgrade</span>
                    <span class="percent">58%</span>
                    </span>
                    <span class="progress">
                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">Mobile development</span>
                    <span class="percent">85%</span>
                    </span>
                    <span class="progress">
                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                    <span class="task">
                    <span class="desc">New UI release</span>
                    <span class="percent">38%</span>
                    </span>
                    <span class="progress progress-striped">
                    <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
                    </span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- END TODO DROPDOWN -->
          */ ?>



          <!-- BEGIN USER LOGIN DROPDOWN -->
          <li class="dropdown dropdown-user dropdown-dark">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

            <span class="username username-hide-on-mobile"><?= @$_SESSION['name' ] ?></span>

              <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
              <!--<img alt="" class="img-circle" src="metronic/assets/admin/layout4/img/avatar9.jpg"/>-->

            </a>
            <ul class="dropdown-menu dropdown-menu-default">

              <? /*
              <li>
                <a href="page_calendar.html">
                  <i class="icon-calendar"></i> My Calendar </a>
              </li>
              <li>
                <a href="inbox.html">
                  <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                3 </span>
                </a>
              </li>
              <li>
                <a href="page_todo.html">
                  <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                7 </span>
                </a>
              </li>
              <li class="divider">
              </li>
              */ ?>

              <li>
                <a href="?P=system_user_profile&K=<?= @$_SESSION['user'] ?>">
                  <i class="icon-user"></i> My Profile </a>
              </li>
              <li>
                <a href="authority/log_out">
                  <i class="icon-lock"></i> Log Out </a>
              </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->

        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->

    </div>
    <!-- END PAGE TOP -->

  </div>
  <!-- END HEADER INNER -->

</div>
<!-- END HEADER -->



<div class="clearfix"></div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
