 
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyPrograms |  Guide</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   
    <link rel="stylesheet" href="<?php echo base_url('assets/home_files/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home_files/ionicons.css') ?>">   
    <link rel="stylesheet" href="<?php echo base_url('assets/home_files/AdminLTE.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home_files/_all-skins.css') ?>">
 
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assets/css/plugins/dataTables/dataTables.bootstrap.css') ?>" rel="stylesheet">     
    <link href="<?php echo base_url('assets/css/jquery-ui.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>">

    
  <style>  
  .elibrary_hide_display{
    display: none;
    visibility: hidden;
  }
  </style>

   <style>.cke{visibility:hidden;}</style></head><body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">MPP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">MyProgram PHP</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
                             <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"> 0</span>
                </a>
                <ul class="dropdown-menu">
               
                  <li class="header">You have 0 message(s)</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">                    
 
                    </ul>
                  </li>
                  <li class="footer"><a href="">See All Messages</a></li>
                </ul>
              </li>              
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('assets/home_files/passport.png') ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs">Welcome: <?php echo $username; ?> </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/home_files/passport.png') ?>" class="img-circle" alt="User Image">
                    <p>
                       <?php echo $username; ?> <small>Member since 2019-04-20 06:00:00</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                   
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url('index.php/Home/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>