 <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Class Scheduling System</title>
    <!-- <meta name="description" content="Sufee Admin - HTML5 Admin Template"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/selectFX/css/cs-skin-elastic.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/jqvmap/dist/jqvmap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
  
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.lwMultiSelect.css');?>"" type="text/css">
    <link rel="icon" href="<?php echo base_url('assets/img/logo.jpg'); ?>" /> 
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/table-style.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/circle.css'); ?>">

    <style>
        .navbar-2 {
          overflow: hidden;
          background-color: white;
        }

        .navbar-2 a {
          float: left;
          font-size: 16px;
          color: #000;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown-2 {
          float: left;
          overflow: hidden;
        }

        .dropdown-2 .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: #000;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar-2 a:hover, .dropdown-2:hover .dropbtn {
          background-color: #c51e3a;
        }

        .dropdown-content-2 {
          display: none;
          position: absolute;
          background-color: white;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content-2 a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content-2 a:hover {
          background-color: #c51e3a;
        }

        .dropdown-2:hover .dropdown-content-2 {
          display: block;
        }

        .force-scroll {
        overflow-y: scroll;
        max-height: 500px;
        height: auto;
        }
</style>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('welcome_admin');?>"><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/img/logo.jpg'); ?>"></a>
                <a class="navbar-brand hidden" href="<?php echo site_url('welcome_admin');?>"><img style="width: 30px; height: 30px;" 
                    src="<?php echo base_url('assets/img/logo.jpg'); ?>"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url('welcome_admin');?>"> <i class="menu-icon fa fa-home"></i>Home</a>
                    </li>
                    <h3 class="menu-title">Manage</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-address-card-o"></i><a href="<?php echo site_url('welcome_admin/faculty');?>">Faculty</a></li>
                            <li><i class="fa fa-hotel"></i><a href="<?php echo site_url('welcome_admin/section');?>">Section</a></li>
                            <li><i class="fa fa-building-o"></i><a href="<?php echo site_url('welcome_admin/rooms');?>">Rooms</a></li>
                            <li><i class="fa fa-graduation-cap"></i><a href="<?php echo site_url('welcome_admin/courses');?>">Courses</a></li>
                            <li><i class="fa fa-suitcase"></i><a href="<?php echo site_url('welcome_admin/department');?>">Departments</a></li>
                            <li><i class="fa fa-book"></i><a href="<?php echo site_url('welcome_admin/subjects');?>">Subjects</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar"></i>Schedule</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-eye"></i><a href="<?php echo site_url('welcome_admin/generate_sched');?>">Generate Schedule</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo site_url('welcome_admin/viewSched');?>">View By Faculty</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo site_url('welcome_admin/viewSchedbyRoom');?>">View By Room</a></li>

                           
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left"></div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url('assets/images/admin.jpg');?>" alt="User Avatar">
                            <!-- <span><?php echo $this->session->userdata('user'); ?></span> -->
                        </a>
                        <div class="user-menu dropdown-menu" style="background-color: #d3d3d3;">
                            <a class="nav-link" href="<?php echo base_url('Home/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>           
                </div>
            </div>

        </header><!-- /header -->

