<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Demo | Find All Together</title>
    <!-- <link href="{{ asset('/css/app.css') }}" rel='stylesheet' type='text/css'> -->
    <!-- <link href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/xenon-core.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet"> -->


<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
<link rel="stylesheet" href="css/fonts/linecons/css/linecons.css">
<link rel="stylesheet" href="css/fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/fonts/elusive/css/elusive.css">
<link rel="stylesheet" href="css/fonts/meteocons/css/meteocons.css">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/xenon-core.css">
<link rel="stylesheet" href="css/xenon-forms.css">
<link rel="stylesheet" href="css/xenon-components.css">
<link rel="stylesheet" href="css/xenon-skins.css">
<link rel="stylesheet" href="js/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="js/cropper/cropper.min.css">
<link rel="stylesheet" href="js/select2/select2.css">
<link rel="stylesheet" href="js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="js/multiselect/css/multi-select.css">
<link rel="stylesheet" href="css/custom.css">
    
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">
      <header class="logo-env"> 
        
        <!-- logo -->
        <div class="logo"> <a href="dashboard-1.html" class="logo-expanded"> <img src="images/logo@2x.png" class="img-responsive" alt="" /> </a> <a href="dashboard-1.html" class="logo-collapsed"> <img src="images/logo-collapsed@2x.png" width="40" alt="" /> </a> </div>
        
        <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
        <div class="mobile-menu-toggle visible-xs"> <a href="#" data-toggle="user-info-menu"> <i class="fa-bell-o"></i> <span class="badge badge-success">7</span> </a> <a href="#" data-toggle="mobile-menu"> <i class="fa-bars"></i> </a> </div>
        
        <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
        <div class="settings-icon" style="display:none"> <a href="#" data-toggle="settings-pane" data-animate="true"> <i class="linecons-cog"></i> </a> </div>
      </header>
      <ul id="main-menu" class="main-menu">
        <!-- add class "multiple-expanded" to allow multiple submenus to open --> 
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <li class="active opened active"><a href="dashboard.html"><i class="fa fa-dashboard"></i> <span class="title">Dashboard</span> </a> </li>
        <li> <a href="manager_request.html"><i class="fa fa-newspaper-o"></i> <span class="title">Request</span> </a> </li>
        <li> <a href="manager_workers.html"><i class="fa fa-female mgr0"></i><i class="fa fa-male"></i> <span class="title">Workers</span> </a> </li>
        <li> <a href="manager_client_places.html"><i class="fa fa-car"></i> <span class="title">Client & Places</span> </a> </li>
        <li> <a href="manager_client_places.html"><i class="fa fa-group"></i> <span class="title">Groups</span> </a> </li>
        <li> <a href="manager_client_places.html"><i class="fa fa-chain"></i> <span class="title">Skills</span> </a> </li>
        
      </ul>
    </div>
  </div>
  <div class="main-content">
    <nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar --> 
      
      <!-- Left links for user info navbar -->
      <ul class="user-info-menu left-links list-inline list-unstyled">
        <li class="hidden-sm hidden-xs"> <a href="#" data-toggle="sidebar"> <i class="fa-bars"></i> </a> </li>
        <li class="dropdown hover-line"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa-bell-o"></i> <span class="badge badge-purple">7</span> </a>
          <ul class="dropdown-menu notifications">
            <li class="top">
              <p class="small"> <a href="#" class="pull-right">Mark all Read</a> You have <strong>3</strong> new notifications. </p>
            </li>
            <li>
              <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                <li class="active notification-success"> <a href="#"> <i class="fa-user"></i> <span class="line"> <strong>New user registered</strong> </span> <span class="line small time"> 30 seconds ago </span> </a> </li>
                <li class="active notification-secondary"> <a href="#"> <i class="fa-lock"></i> <span class="line"> <strong>Privacy settings have been changed</strong> </span> <span class="line small time"> 3 hours ago </span> </a> </li>
                <li class="notification-primary"> <a href="#"> <i class="fa-thumbs-up"></i> <span class="line"> <strong>Someone special liked this</strong> </span> <span class="line small time"> 2 minutes ago </span> </a> </li>
                <li class="notification-danger"> <a href="#"> <i class="fa-calendar"></i> <span class="line"> John cancelled the event </span> <span class="line small time"> 9 hours ago </span> </a> </li>
                <li class="notification-info"> <a href="#"> <i class="fa-database"></i> <span class="line"> The server is status is stable </span> <span class="line small time"> yesterday at 10:30am </span> </a> </li>
                <li class="notification-warning"> <a href="#"> <i class="fa-envelope-o"></i> <span class="line"> New comments waiting approval </span> <span class="line small time"> last week </span> </a> </li>
              </ul>
            </li>
            <li class="external"> <a href="#"> <span>View all notifications</span> <i class="fa-link-ext"></i> </a> </li>
          </ul>
        </li>
      </ul>
      <!-- Right links for user info navbar -->
      <ul class="user-info-menu right-links list-inline list-unstyled">
        <li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
          
          <form name="userinfo_search_form" method="get" action="extra-search.html">
            <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
            <button type="submit" class="btn btn-link"> <i class="linecons-search"></i> </button>
          </form>
        </li>
        <li class="dropdown user-profile"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" /> <span> John Smith <i class="fa-angle-down"></i> </span> </a>
          <ul class="dropdown-menu user-profile-menu list-unstyled">
            <li> <a href="manager_add_post"> <i class="fa-edit"></i> New Post </a> </li>
            <li> <a href="manager_edit"> <i class="fa-wrench"></i> Settings </a> </li>
            <li> <a href="manager_profile"> <i class="fa-user"></i> Profile </a> </li>
            <li> <a href="help"> <i class="fa-info"></i> Help </a> </li>
            <li class="last"> <a href="logout.html"> <i class="fa-lock"></i> Logout </a> </li>
          </ul>
        </li>
        <li style="display:none"> <a href="#" data-toggle="chat"> <i class="fa-comments-o"></i> </a> </li>
      </ul>
    </nav>
    
    <!-- MAIN CONTENT -->
    @yield('content')
    <!-- END MAIN CONTENT --> 
    
    <!-- Main Footer --> 
    <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" --> 
    <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) --> 
    <!-- Or class "fixed" to  always fix the footer to the end of page -->
    <footer class="main-footer sticky footer-type-1">
      <div class="footer-inner"> 
        
        <!-- Add your copyright text here -->
        <div class="footer-text"> &copy; 2014 <strong>Xenon</strong> theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">Purchase for only <strong>23$</strong></a> </div>
        
        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <div class="go-up"> <a href="#" rel="go-top"> <i class="fa-angle-up"></i> </a> </div>
      </div>
    </footer>
  </div>
</div>
</div>

<!-- Page Loading Overlay -->
<div class="page-loading-overlay">
  <div class="loader-2"></div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
    <!-- Imported styles on this page -->

    <!-- Bottom Scripts -->
<!--     <script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>

    <script src="{{ asset('/js/resizeable.js') }}"></script>

    <script src="{{ asset('/js/xenon-toggles.js') }}"></script>

    <!-- JavaScripts initializations and stuff -->
  <!--   <script src="{{ asset('/js/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script> -->

    <!-- JavaScripts dataTables -->
 <!--    <script src="{{ asset('/js/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('/js/datatables/tabletools/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/xenon-custom.js') }}"></script> -->

    <script src="js/jquery-1.11.1.min.js"></script>
<!-- Imported styles on this page -->

<!-- Bottom Scripts -->
<script src="js/bootstrap.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/resizeable.js"></script>
<script src="js/joinable.js"></script>
<script src="js/xenon-api.js"></script>
<script src="js/xenon-toggles.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="js/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/selectboxit/jquery.selectBoxIt.min.js"></script>

<!-- select2 -->
<script src="js/multiselect/js/jquery.multi-select.js"></script>
<script src="js/select2/select2.min.js"></script>

<!-- cropper image -->
<script src="js/cropper/cropper.min.js"></script>

<!-- JavaScripts fullcalendar -->
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar/fullcalendar.min.js"></script>

<!-- JavaScripts dataTables -->
<script src="js/datatables/dataTables.bootstrap.js"></script>
<script src="js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
<script src="js/datatables/tabletools/dataTables.tableTools.min.js"></script>
<script src="js/jquery-validate/jquery.validate.min.js"></script>
<script src="js/xenon-custom.js"></script>
<script src="js/master.js"></script>

  </body>
