<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/PgwSlider-master/pgwslider.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">


    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        .w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
        .w3-third img:hover{opacity: 1}
        .search{
            visibility: hidden;
        }
        .logo{
                visibility: visible;
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
        .w3-hover-white{
            height: 49px;}
        @media only screen and (max-width: 600px) and (min-width: 320px) {
            .nav_logo{
                visibility: visible;
            }
        }
       
        .w3-hover-white{
            height: 49px;

        }






        #main ul li {
            display: inline;
            list-style: none;
            float: right;
            width: 305px;
            margin-right: 1%;
            margin-top: 3%;
            margin-bottom: 3%;
        }



        #main {
            background: #fff;
            margin: 0 auto;
            width: 100%;
        }

        .slider li{

            list-style: none;

        }


        @media only screen and (min-width: 1000px) {
            .slider_area {
                margin-top: 6%;
                height: 300px;
                overflow: hidden;
                width: 100%;
            }
        }

        .g-img a img{
            width: 100%;
            height: 320px;
            border: 10px solid grey;
            margin-left: 1%;
        }



        .album_name li {
            list-style: none;
            font-weight: bold;
            line-height: 3;
            text-align: center;
            font-family: "Arial Rounded MT Bold";
            font-size: 20px;
            background: grey;
            margin-left: 1%;
        }
        .w3-padding-large {
            padding: 8px 24px !important;
        }
        @media only screen and (max-width: 600px) and (min-width: 320px) {
            .slider_areaa{
                height: auto;
                margin-top: 5%;
            }

        }
    </style>
</head>

<body>
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
        </div>
        <a href="<?=base_url()?>welcome/blog" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Blogs</a>
        <?php  $user_data = $this->session->userdata('user_info');
            if($user_data['is_login']){ ?>
                <a class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo" style="background: #3c5a9a" href="<?= base_url('welcome/logout');?>">Logout</a>
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
<div class=" w3-content" style="max-width:1600px">




    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <section class="slider_area">
        <ul class="slider content">
            <li><img src="<?=base_url()?>assets/img/8.jpg" alt=""><title>slider title description (1)</title></li>
            <li><img src="<?=base_url()?>assets/img/6.jpg" alt=""><title>slider title description (2)</title></li>
            <li><img src="<?=base_url()?>assets/img/3.jpg" alt=""><title>slider title description (3)</title></li>
        </ul>
    </section>
    <section class="slider_areaa">
        <ul class="slider content">
            <li><img src="<?=base_url()?>assets/img/8.jpg" alt=""><title>slider title description (1)</title></li>
            <li><img src="<?=base_url()?>assets/img/6.jpg" alt=""><title>slider title description (2)</title></li>
            <li><img src="<?=base_url()?>assets/img/3.jpg" alt=""><title>slider title description (3)</title></li>
        </ul>
    </section>



    <!-- !PAGE CONTENT! -->
    <div class="w3-main">

        <div class="w3-hide-large"></div>

        <div id="main" style="width: 100%;float: left;margin-top: 5%">
            <h2 style="text-align: center;padding: 20px">Audio Gallery</h2>
            <div class="album_name" style="width: 20%;float: left">
                <ul>
                    <li>First Album</li>
                    <li>Second Album</li>
                    <li>Third Album</li>
                    <li>Fourth Album</li>
                    <li>Fifth Album</li>
                </ul>

            </div>
            <ul class="gallery clearfix" style="width: 80%;float: left">

                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                    <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>
                <li>
                    <a href="<?=base_url()?>assets/img/audio.mp3" title="Title" class="popup-youtube no-padd">

                        <audio src="<?=base_url()?>assets/img/audio.mp3" controls style="width: 305px"></audio>
                </li>



            </ul>
        </div>






        <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
            <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption"></p>
            </div>
        </div>





        <footer class="w3-container  ">
            <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
        </footer>
        <!-- End page content -->
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/gallery/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?=base_url()?>assets/PgwSlider-master/pgwslider.js"></script>
<script src="http://zeptojs.com/zepto.js"></script>
<script src="<?=base_url()?>assets/js/plugins.js"></script>
<script src="<?=base_url()?>assets/js/magnific-popup.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script>




<script>


    $(document).ready(function() {
        $('.pgwSlider').pgwSlider();
    });




    $(document).ready(function() {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });
</script>
</body>
</html>