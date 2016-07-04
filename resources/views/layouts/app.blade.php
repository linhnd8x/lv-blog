<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Xenon Boostrap Admin Panel" />
<meta name="author" content="" />
<title>Posts management</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic"> -->
<link rel="stylesheet" href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('/css/fw-core.css') }}">
<link rel="stylesheet" href="{{ asset('/css/fw-forms.css') }}">

<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">


<!-- <script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script> -->
<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<!-- Imported styles on this page -->

<!-- Bottom Scripts -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/resizeable.js') }}"></script>
<script src="{{ asset('/js/joinable.js') }}"></script>
<script src="{{ asset('/js/fw-toggles.js') }}"></script>

<!-- JavaScripts initializations and stuff -->
<script src="{{ asset('/js/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/fw-custom.js') }}"></script>

<!-- select2 -->

<!-- JavaScripts dataTables -->
<script src="{{ asset('/js/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('/js/datatables/tabletools/dataTables.tableTools.min.js') }}"></script>
<script src="{{ asset('/js/jquery-validate/jquery.validate.min.js') }}"></script>

<!-- <script src="js/master.js"></script> -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<!--[endif]--->

</head>
<body class="page-body skin-facebook">
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always --> 
  
  <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. --> 
  <!-- Adding class "toggle-others" will keep only one menu item open at a time. --> 
  <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
  <div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">
      <header class="logo-env"> 
        
        <!-- logo -->
        <!-- <div class="logo"> <a href="dashboard-1.html" class="logo-expanded"> <img src="images/logo@2x.png" class="img-responsive" alt="" /> </a> <a href="dashboard-1.html" class="logo-collapsed"> <img src="images/logo-collapsed@2x.png" width="40" alt="" /> </a> </div> -->
        
        <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
      <!--   <div class="mobile-menu-toggle visible-xs"> <a href="#" data-toggle="user-info-menu"> <i class="fa-bell-o"></i> <span class="badge badge-success">7</span> </a> <a href="#" data-toggle="mobile-menu"> <i class="fa-bars"></i> </a> </div> -->
        
        <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
        <!-- <div class="settings-icon" style="display:none"> <a href="#" data-toggle="settings-pane" data-animate="true"> <i class="linecons-cog"></i> </a> </div> -->
      </header>
      <ul id="main-menu" class="main-menu">
        <!-- add class "multiple-expanded" to allow multiple submenus to open --> 
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <li class="active opened active"><a href="{{ url('posts/') }}"><i class="fa fa-dashboard"></i> <span class="title">Posts</span> </a> </li>
        <li> <a href="{{ url('category/') }}"><i class="fa fa-newspaper-o"></i> <span class="title">Categories</span> </a> </li>
        <li> <a href="{{ url('tag/') }}"><i class="fa fa-female mgr0"></i><i class="fa fa-male"></i> <span class="title">Tags</span> </a> </li>
        <li> <a href="{{ url('user/') }}"><i class="fa fa-car"></i> <span class="title">Users</span> </a> </li>     
      </ul>
    </div>
  </div>
  <div class="main-content">
    <nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar --> 
      
      <!-- Left links for user info navbar -->
      <ul class="user-info-menu left-links list-inline list-unstyled">
        <li class="hidden-sm hidden-xs"> <a href="#" data-toggle="sidebar"> <i class="fa-bars"></i> </a> </li>
      </ul>
      <!-- Right links for user info navbar -->
      <ul class="user-info-menu right-links list-inline list-unstyled">
        <li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
          
          <form name="userinfo_search_form" method="get" action="extra-search.html">
            <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
            <button type="submit" class="btn btn-link"> <i class="linecons-search"></i> </button>
          </form>
        </li>
        <li class="dropdown user-profile"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ asset('/images/user-4.png') }}" alt="user-image" class="img-circle img-inline userpic-32" width="28" /> <span> Admin <i class="fa-angle-down"></i> </span> </a>
          <ul class="dropdown-menu user-profile-menu list-unstyled">
            <li> <a href="{{ url('posts/new-post') }}"> <i class="fa-edit"></i> New Post </a></li>
            <li> <a href="{{ url('category/new-category') }}"> <i class="fa-wrench"></i> New Category </a></li>
            <li> <a href="{{ url('tag/new-tag') }}"> <i class="fa-user"></i> New Tag </a></li>
            <li class="last"> <a href="{{ url('auth/logout') }}"> <i class="fa-lock"></i> Logout </a></li>
          </ul>
        </li>
        <li style="display:none"> <a href="#" data-toggle="chat"> <i class="fa-comments-o"></i> </a> </li>
      </ul>
    </nav>

  @yield('content')	

  <!-- Main Footer --> 
  <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" --> 
  <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) --> 
  <!-- Or class "fixed" to  always fix the footer to the end of page -->
  <footer class="main-footer">
    <div class="footer-inner"> 
      
      <!-- Add your copyright text here -->
      <div class="footer-text"> &copy; 2016 <strong></strong> theme by Edo Nguyen</div>
      
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
</body>
</html>