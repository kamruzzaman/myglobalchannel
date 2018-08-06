<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="<?=base_url()?>vendor/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/fullcalendar/fullcalendar.print.min.css" media="print">
	
    <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-extend.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/blog.css">
   <link rel="stylesheet" href="<?=base_url()?>assets/css/update_style.css">
   <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fileinput.css" />
        

</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">

        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right  w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="<?=base_url()?>" class="w3-bar-item w3-button  w3-theme-d4 w3-hover-white nav_logo"><i class="fa fa-home w3-margin-right"></i>Logo</a>
        <a href="<?=base_url()?>welcome/wall" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Wall</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <a class="w3-button w3-padding-large" title="Notifications" href="<?=base_url()?>welcome/gallery"><span>Gallery</span></a>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                <a href="<?=base_url()?>welcome/audioGallery" class="w3-bar-item w3-button">Audio Gallery</a>
                <a href="<?=base_url()?>welcome/videoGallery" class="w3-bar-item w3-button">Video Gallery</a>

            </div>
        </div>        <a href="<?=base_url()?>welcome/blog" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Blogs</a>
        <div class="w3-dropdown-hover w3-hide-small">

            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
            </div>
        </div>

        <!--<a href="<?=base_url()?>" class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo"><i class="fa fa-home w3-margin-right"></i>Logo</a>-->
        <?php  $user_data = $this->session->userdata('user_info');
            if($user_data['is_login']){ ?>
                <a class="w3-bar-item w3-button w3-hide-small w3-right   w3-hover-white logo" style="background: #3c5a9a" href="<?= base_url('user/');?>">Dashboard</a>
                <a class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo" style="background: #3c5a9a" href="<?= base_url('user/logout');?>">Logout</a>
                
           <?php }else{
        ?>
        <button class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo" style="background: #3c5a9a" onclick="document.getElementById('id01').style.display='block'">Login</button>
        <?php } ?>


    </div>
</div>
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="<?=base_url()?>welcome/wall" class="w3-bar-item w3-button w3-padding-large">Wall</a>
    <a href="<?=base_url()?>welcome/gallery" class="w3-bar-item w3-button w3-padding-large">Gallery</a>
    <a href="<?=base_url()?>welcome/blog" class="w3-bar-item w3-button w3-padding-large">Blogs</a>
    <a></a><input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
</div>
