<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- Bootstrap 3.3.2 -->
<link href="<?= base_url()?>bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- FontAwesome 4.3.0 -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons 2.0.0 -->
<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?= base_url()?>bootstrap/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
<link href="<?= base_url()?>bootstrap/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
<!-- iCheck -->
<link href="<?= base_url()?>bootstrap/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?= base_url()?>bootstrap/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?= base_url()?>bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?= base_url()?>bootstrap/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?= base_url()?>bootstrap/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?= base_url()?>bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('site/Home');?>" class="logo"><b>DSSC</b>Managment</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url();?>bootstrap/dist/img/IMG_5476.jpg" class="user-image" alt="User Image"/>
                            <span class="hidden-xs"> <?php echo $this->session->userdata('name'); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=site_url('loginController/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar"> 
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"> 

    
    <!-- /.search form --> 
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview"> <a href="<?php echo site_url('Dashboard/Index/') ?>"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li>
      <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('Event/AddEvent/') ?>"><i class="fa fa-circle-o"></i> Add Event</a></li>
          <li><a href="<?php echo site_url('Event/UpdateEvent/') ?>"><i class="fa fa-circle-o"></i> Update Event</a></li>
        </ul>
      </li>
      <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Budget</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo site_url('Budget/AddBudget/') ?>"><i class="fa fa-circle-o"></i>Add Budget</a></li>
         <li><a href="<?php echo site_url('Budget/ApproveBudget/') ?>"><i class="fa fa-circle-o"></i>Principal Approval</a></li>
          <li><a href="<?php echo site_url('Budget/UpdateBudget/') ?>"><i class="fa fa-circle-o"></i> Update Budget</a></li>
          <li><a href="<?php echo site_url('Budget/BudgetReport/') ?>"><i class="fa fa-circle-o"></i>Budget Report</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar --> 
</aside>
