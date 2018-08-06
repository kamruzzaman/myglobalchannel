<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/blog.css">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


        input[type="checkbox"], input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        .card-body p {
            text-align: center;
            margin-top: 1em;
            font-size: 0.95em;
            letter-spacing: 1px;
        }

        .w3-hover-white{
            height: 49px;
        }
        @media only screen and (max-width: 947px) {

            form{
                visibility: hidden;
            }
            .logo{
                visibility: hidden;
            }
            .w3-bar{
                height: 49px;
            }

        }
        @media only screen and (max-width: 600px) and (min-width: 320px) {
            .nav_logo{
                visibility: visible;
            }
            .slider.content title{
                margin-top: -40%;
            }
        }
        @media only screen and (min-width: 948px) {
            .nav_logo{
                visibility: hidden;
            }
        }

        .btn{
            background: #314D68;
            color: #fff;
            font-size: 17px;
            border: none;
            width: 100%;
            padding: 10px 15px;
            border-radius: 0;
        }

        }

        .w3-hover-white{
            height: 49px;}
        @media only screen and (max-width: 947px) {

            form{
                visibility: hidden;
            }
            .logo{
                visibility: hidden;
            }
            .w3-bar{
                height: 49px;
            }

        }
        @media only screen and (max-width: 600px) and (min-width: 320px) {
            .nav_logo{
                visibility: visible;
            }
            .slider.content title{
                margin-top: -40%;
            }
        }
        @media only screen and (min-width: 948px) {
            .nav_logo{
                visibility: hidden;
            }
        }

        .card{
            max-width: 380px;
            vertical-align: middle;
            border: 0;
            margin: auto;
            margin-top: 10%;

        }


        .card-header h3 {
            color: #ffffff;
            font-size: 22px;
        }
        .card-header {
            border-bottom: none;
            text-align: center;
            background-color: #314D68;
            padding: 5px;
        }
        .card-body input.user {
            background: url(<?=base_url()?>assets/img/user.png)no-repeat 8px 10px #fff;
        }
        .card-body input.lock {
            background: url(<?=base_url()?>assets/img/lock.png)no-repeat 8px 10px #fff;
        }

        input[type="text"], input[type="password"],input[type="email"],input[type="tel"] {
            width: 100%;
            padding: 10px 10px 10px 35px;
            font-weight: normal;
            background: none;
            border: 1px solid #8FA4B9;
            color: #545454;
            outline: none;
            font-size: 14px;
            margin: 6px 0 17px 0px;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
            -moz-transition: 0.5s all;
        }
        .card-body input[type="submit"] {
            background: #314D68;
            color: #fff;
            font-size: 17px;
            border: none;
            width: 100%;
            outline: none;
            cursor: pointer;
            -webkit-appearance: none;
            padding: 10px 15px;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }
        .reset_password{
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">

        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right  w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="<?=base_url()?>" class="w3-bar-item w3-button  w3-theme-d4 w3-hover-white nav_logo"><i class="fa fa-home w3-margin-right"></i>Logo</a>
        <a href="<?=base_url()?>index.php/welcome/wall" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Wall</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small large w3-hover-white" title="">People</a>
        <a href="<?=base_url()?>index.php/welcome/gallery" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Gallery</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Projects</a>
        <a href="<?=base_url()?>index.php/welcome/blog" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Blogs</a>
        <div class="w3-dropdown-hover w3-hide-small">

            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
            </div>
        </div>

        <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo"><i class="fa fa-home w3-margin-right"></i>Logo</a>

        <button class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo" style="background: #3c5a9a" onclick="document.getElementById('id01').style.display='block'">Login</button>


    </div>
</div>



<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="<?=base_url()?>index.php/welcome/wall" class="w3-bar-item w3-button w3-padding-large">Wall</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">People</a>
    <a href="<?=base_url()?>index.php/welcome/gallery" class="w3-bar-item w3-button w3-padding-large">Gallery</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Projects</a>
    <a href="<?=base_url()?>index.php/welcome/blog" class="w3-bar-item w3-button w3-padding-large">Blogs</a>
    <a></a><input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
</div>


<div class="container" style="margin-top: 49px;">
    <div class="card">

<div class="card-header">
    <h3 style="font-family: 'Palatino Linotype'">Admin Panel</h3>
</div>
    <div class="card-body " >

        <div class="row">
            <div class="col-sm-12" id="lg_noti">

            </div>
        </div>

      <form action="<?=base_url()?>/index.php/welcome/login_validation" method="post">

        <input type="email" class="user" name="useremail" placeholder="Email" required="">
        <input type="password" class="lock" name="Userpassword" placeholder="password" required="" value="">
        <input type="hidden" name="sendbacktopage" value="/">

        <button type="submit" class="btn" id="Login_btn" >Login</button>
        <a href="#" class="reset_password w3-hover-opacity" id="resetPassword" >Reset Password</a>

      </form>



    </div>
    </div>
</div>

    <footer class="w3-container  ">
        <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
    </footer>



</body>
</html>
