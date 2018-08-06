<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url()?>assets/img/index.ico">

      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">

    <title>
        <?php
         if(!isset($subtitle)){$subtitle = '';}
        if(isset($title)){ echo $title; }else{  $title = 'User - Dashboard'; echo $title;  }
        ?> 
        
        </title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-extend.css">

	<link rel="stylesheet" href="<?=base_url()?>assets/datepicker/css/bootstrap-datetimepicker.css">
	 <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

	
<!--	<link rel="stylesheet" href="--><?//=base_url()?><!--assets/css/jquery.dataTables.min.css">-->
<!--	<link rel="stylesheet" href="--><?//=base_url()?><!--assets/css/sweetalert.css">	-->
    <link rel="stylesheet" href="<?=base_url()?>vendor/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/fullcalendar/fullcalendar.print.min.css" media="print">
	<!-- theme style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/master_style.css">
	
	<!-- MinimalPro Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/_all-skins.css">
   <!--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->
   

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
	<!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
	<![endif]-->

     <style>
         .sidebar-menu > li.user-profile > .treeview-menu li:hover{ background-color:#1d463c;}
         .skin-blue-light .content-header{background: #fff;}
         .content-header > h1, .content-header > .container > h1{
             color: #455a64;
         }
         .skin-blue-light .box{
             background: #fff;
         }
         .box-header .box-title, .box-header > .fa, .box-header > .glyphicon, .box-header > .ion{
             color: #455a64;
         }
         .fc th.fc-fri, .fc th.fc-mon, .fc th.fc-sat, .fc th.fc-sun, .fc th.fc-thu, .fc th.fc-tue, .fc th.fc-wed{
             background: #f2f7f8;
         }
         .fc-day{
             background: #fff;
             
         }
         .fc-widget-content{
             border-color: #ddd !important;
         }
         .fc-unthemed .fc-today{
             background: #f2f4f8 !important;
         }
         .box-footer{
            border-top: 1px solid #f4f4f4;
            background-color: #fff;
         }
         .table-bordered, .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
            border: 1px solid #f4f4f4;
        }
         .nav-tabs-custom > .tab-content{
            background: #fff;
            padding-top:60px;
        }
        .nav-tabs-custom{
            background: transparent;
        }
        .skin-blue-light .content{
            background: #fff;
        }
     </style>
  </head>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
    <?php
              $user_data = $this->session->userdata('user_info');


    ?>
<style>
    .box-header .box-title{
        color: #000;
    }
</style>
    

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="<?=base_url()?>assets/img/logo.png" alt="logo" style="height: 50px;"></span>
		  <span class="dark-logo"><img src="<?=base_url()?>assets/img/logo.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="<?=base_url()?>assets/img/logo.jpeg" alt="logo" class="light-logo">
	  	  <img src="<?=base_url()?>assets/img/logo.jpeg" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  			
		  
          <!-- Messages: style can be found in dropdown.less-->
           
          <!-- Notifications: style can be found in dropdown.less -->
         
        
		  <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/img/user-info.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/img/user.png" class="float-left rounded-circle" alt="User Image">
                <p>
                 <?=$user_data['user_name']?>
                  <small class="mb-2"> </small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded"><?=$user_data['role']?></a>
                </p>

              </li>
              <!-- Menu Body -->
             <li class="user-body" style="padding-top:35px;">
                <div class="row no-gutters">
                 
                 
                  <div class="col-12 text-left">
                    <a href="<?=base_url('user/profile')?>"><i class="ion ion-settings"></i> My Profile</a>
                  </div>
				          
				  <div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?=base_url('user/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
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
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
           <a href="<?=base_url('user/')?>">
                 <img src="<?=base_url()?>assets/img/user-info.jpg" alt="user">
                <span><?=substr($user_data['user_name'], 0, 10).'..'?></span><br/>
                 <span class="role"> <?=$user_data['role']?></span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
               </a>

    		  <ul class="treeview-menu">
              <li><a href="<?=base_url('user/profile')?>"><i class="fa fa-user mr-5"></i>My Profile </a></li>

        		<li><a href="<?=base_url()?>"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
          </ul>
        </li>
       
        <li class="<?=($title=='Dashboard' ? 'active' : '')?>"><a href="<?=base_url()?>user/"><i class="fa fa-dashboard"></i><span>DASHBOARD</span></a></li>
        <li class="<?=($title=='Posts' ? 'active' : '')?>"><a href="<?=base_url()?>user/blogs"><i class="fa fa-rss"></i><span>Blog</span></a></li>
        <li class="<?=($title=='Notice' ? 'active' : '')?>"><a href="<?=base_url()?>user/notice"><i class="fa fa-bell"></i><span>Notice</span></a></li>
        <li class="<?=($title=='Slider' ? 'active' : '')?>"><a href="<?=base_url()?>user/slider"><i class="fa fa-file-image-o"></i><span>Banner</span></a></li>
        <li class="<?=($title=='Rotor' ? 'active' : '')?>"><a href="<?=base_url()?>user/rotor"><i class="fa fa-file-image-o"></i><span>Rotor</span></a></li>
        <li class="<?=($title=='Event' ? 'active' : '')?>"><a href="<?=base_url()?>user/events"><i class="fa fa-calendar"></i><span>Events</span></a></li>
        <li class="<?=($title=='Category' ? 'active' : '')?>"><a href="<?=base_url()?>user/category"><i class="fa fa-arrows"></i><span>Category</span></a></li>
        <li class="<?=($title=='Album' ? 'active' : '')?>"><a href="<?=base_url()?>user/album"><i class="fa fa-arrows"></i><span>Albums</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-upload" aria-hidden="true"></i>Gallery</a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?=base_url()?>user/upload_image"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Image Gallery</span></a>
                    <a href="<?=base_url()?>user/upload_audio"><i class="fa fa-volume-up" aria-hidden="true"></i><span>Audio Gallery</span></a>
                    <a href="<?=base_url()?>user/upload_video"><i class="fa fa-file-video-o" aria-hidden="true"></i><span>Video Gallery</span></a>
                </li>
            </ul>
        </li>
       
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->