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

    <!-- =================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
<!--   ====================================== 0000-->


    <link href="<?=base_url()?>assets/audio/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=base_url()?>assets/audio/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/audio/jquery.jplayer.min.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){

            $("#jquery_jplayer_1").jPlayer({
                ready: function (event) {
                    $(this).jPlayer("setMedia", {
                        title: "Bubble",
                        m4a: "http://jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
                        oga: "http://jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
                    });
                },
                swfPath: "../../dist/jplayer",
                supplied: "m4a, oga",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            });
        });
        //]]>
    </script>

<!--   ====================================== 0000-->

    <!-- =================== -->
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        .w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
        .w3-third img:hover{opacity: 1}
        .search{
            visibility: hidden;
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
        @media only screen and (min-width: 948px) {
            .nav_logo{
                visibility: hidden;
            }
        }
        .w3-hover-white{
            height: 49px;

        }
        .w3-row{
            margin-top: 49px;
        }
        /*}*/

        /* ===========================  */






        #main ul li {
            display: inline;
            list-style: none;
            float: right;
            width: 305px;
            margin-right: 1%;
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
        /*.g-img{*/
        /*margin-bottom: -6px;*/
        /*opacity: 0.8;*/
        /*cursor: pointer;*/

        /*}*/

        .g-img{

            margin-bottom: 1%;

        }

        .g-img a img{
            width: 100%;
            height: 320px;
            border: 10px solid grey;
            margin-left: 1%;
            /*float: right;*/
        }


        /*.gallery li a img{*/
        /*border: 10px solid gray;*/
        /*width: 300px;*/
        /*float: right;*/
        /*}*/

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
        /* ===========================  */
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
        <a href="<?=base_url()?>index.php/welcome/wall" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Wall</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <a class="w3-button w3-padding-large" title="Notifications" href="<?=base_url()?>index.php/welcome/gallery"><span>Gallery</span></a>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                <a href="<?=base_url()?>index.php/welcome/audioGallery" class="w3-bar-item w3-button">Audio Gallery</a>
                <a href="<?=base_url()?>index.php/welcome/videoGallery" class="w3-bar-item w3-button">Video Gallery</a>

            </div>
        </div>
        <!--        <a href="--><?//=base_url()?><!--index.php/welcome/gallery" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Gallery</a>-->
        <a href="<?=base_url()?>index.php/welcome/blog" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" title="">Blogs</a>
        <!--        <div class="w3-dropdown-hover w3-hide-small">-->
        <!--            <button class="w3-button w3-padding-large" title="Notifications"><span>Gallery</span></button>-->
        <!--            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">-->
        <!--                <a href="#" class="w3-bar-item w3-button">One new friend request</a>-->
        <!--                <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>-->
        <!--                <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white" title="My Account">-->
        <!--<img src="facebook/img/default_avatar_male.jpg" class="w3-circle" style="height:23px;width:23px" alt="Avatar">-->
        <!--</a>-->
        <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-hide-small w3-right  w3-hover-white logo"><i class="fa fa-home w3-margin-right"></i>Logo</a>

        <!--        <form action=" " class="w3-bar-item w3-button w3-hide-small w3-right search ">-->
        <!--            <input type="text" placeholder="Search.." name="search">-->
        <!--            <button type="submit"><i class="fa fa-search"></i></button>-->
        <!--        </form>-->

    </div>
</div>

<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="<?=base_url()?>index.php/welcome/wall" class="w3-bar-item w3-button w3-padding-large">Wall</a>
    <a href="<?=base_url()?>index.php/welcome/gallery" class="w3-bar-item w3-button w3-padding-large">Gallery</a>
    <a href="<?=base_url()?>index.php/welcome/blog" class="w3-bar-item w3-button w3-padding-large">Blogs</a>
    <a></a><input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
</div>
<div class=" w3-content" style="max-width:1600px">


    <!-- Sidebar/menu -->
    <!--    <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold; margin-top:50px" id="mySidebar"><br>-->
    <!--        <h3 class="w3-padding-64 w3-center"><b>John <br>Doe</b></h3>-->
    <!--        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>-->
    <!--        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">IMAGES</a>-->
    <!--        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT ME</a>-->
    <!--        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>-->
    <!--    </nav>-->

    <!-- Top menu on small screens -->
    <!--<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">-->
    <!--<span class="w3-left w3-padding">SOME NAME</span>-->
    <!--<a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>-->
    <!--</header>-->

    <!-- Overlay effect when opening sidebar on small screens -->
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

        <!-- Push down content on small screens -->
        <div class="w3-hide-large"></div>

        <!-- Photo grid -->
        <!--        <div class="w3-row">-->
        <!--            <div class="w3-third">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/1.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/3.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/6.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">-->
        <!--            </div>-->
        <!---->
        <!--            <div class="w3-third">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/8.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/6.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/1.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">-->
        <!--            </div>-->
        <!---->
        <!--            <div class="w3-third">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/1.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/8.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">-->
        <!--                <img src="--><?//=base_url()?><!--assets/img/3.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">-->
        <!--            </div>-->
        <!--        </div>-->

        <!--     =================================================   -->

        <div id="main" style="width: 100%;float: left;margin-top: 5%">
<!--            <h2 style="text-align: center;padding: 20px">Audio Gallery</h2>-->
<!--            <div class="album_name" style="width: 20%;float: left">-->
<!--                <ul>-->
<!--                    <li>First Album</li>-->
<!--                    <li>Second Album</li>-->
<!--                    <li>Third Album</li>-->
<!--                    <li>Fourth Album</li>-->
<!--                    <li>Fifth Album</li>-->
<!--                </ul>-->
<!---->
<!--            </div>-->
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                    <div class="jp-gui jp-interface">
                        <div class="jp-controls">
                            <button class="jp-play" role="button" tabindex="0">play</button>
                            <button class="jp-stop" role="button" tabindex="0">stop</button>
                        </div>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-controls">
                            <button class="jp-mute" role="button" tabindex="0">mute</button>
                            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                        </div>
                        <div class="jp-time-holder">
                            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                            <div class="jp-toggles">
                                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                            </div>
                        </div>
                    </div>
                    <div class="jp-details">
                        <div class="jp-title" aria-label="title">&nbsp;</div>
                    </div>
                    <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
        </div>





        <!--         Pagination-->
        <!--        <div class="w3-center w3-padding-32">-->
        <!--            <div class="w3-bar">-->
        <!--                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>-->
        <!--                <a href="#" class="w3-bar-item w3-black w3-button">1</a>-->
        <!--                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>-->
        <!--                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>-->
        <!--                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>-->
        <!--                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>-->
        <!--            </div>-->
        <!--        </div>-->





        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
            <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption"></p>
            </div>
        </div>

        <!--<div style="height: 1090px;width: 100%">-->
        <!--    <ul class="pgwSlider">-->
        <!--        <li><img src="--><?//=base_url()?><!--assets/img/8.jpg" alt="Tea, Coffie" data-description="Eiffel Tower and Champ de Mars"></li>-->
        <!--        <li><img src="--><?//=base_url()?><!--assets/img/3.jpg" alt="Money, Dolor, USA" data-large-src="--><?//=base_url()?><!--assets/img/3.jpg"></li>-->
        <!--        <li>-->
        <!--            <img src="--><?//=base_url()?><!--assets/img/1.jpg">-->
        <!--            <span>Shanghai, China</span>-->
        <!--        </li>-->
        <!--        <li>-->
        <!--            <img src="--><?//=base_url()?><!--assets/img/3.jpg">-->
        <!--            <span>New York, NY, USA</span>-->
        <!--        </li>-->
        <!--    </ul>-->
        <!---->
        <!---->
        <!--</div>-->





        <!-- About section -->
        <!--        <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">-->
        <!--            <h4><b>About Me</b></h4>-->
        <!--            <img src="--><?//=base_url()?><!--assets/img/default_avatar_male.jpg" alt="Me" class="w3-image w3-padding-32" width="600" height="650">-->
        <!--            <div class="w3-content w3-justify" style="max-width:600px">-->
        <!--                <h4>My Name</h4>-->
        <!--                <p>Some text about me. I love taking photos of PEOPLE. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure-->
        <!--                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor-->
        <!--                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
        <!--                </p>-->
        <!--                <p>mail: example@example.com</p>-->
        <!--                <p>tel: 5353 35531</p>-->
        <!--                <hr class="w3-opacity">-->
        <!--                <h4 class="w3-padding-16">Technical Skills</h4>-->
        <!--                <p class="w3-wide">Photography</p>-->
        <!--                <div class="w3-white">-->
        <!--                    <div class="w3-container w3-padding-small w3-center w3-grey" style="width:95%">95%</div>-->
        <!--                </div>-->
        <!--                <p class="w3-wide">Web Design</p>-->
        <!--                <div class="w3-white">-->
        <!--                    <div class="w3-container w3-padding-small w3-center w3-grey" style="width:85%">85%</div>-->
        <!--                </div>-->
        <!--                <p class="w3-wide">Photoshop</p>-->
        <!--                <div class="w3-white">-->
        <!--                    <div class="w3-container w3-padding-small w3-center w3-grey" style="width:80%">80%</div>-->
        <!--                </div>-->
        <!--                <p><button class="w3-button w3-light-grey w3-padding-large w3-margin-top w3-margin-bottom">Download Resume</button></p>-->
        <!--                <hr class="w3-opacity">-->
        <!---->
        <!--                <h4 class="w3-padding-16">How much I charge</h4>-->
        <!--                <div class="w3-row-padding" style="margin:0 -16px">-->
        <!--                    <div class="w3-half w3-margin-bottom">-->
        <!--                        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">-->
        <!--                            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>-->
        <!--                            <li class="w3-padding-16">Web Design</li>-->
        <!--                            <li class="w3-padding-16">Photography</li>-->
        <!--                            <li class="w3-padding-16">5GB Storage</li>-->
        <!--                            <li class="w3-padding-16">Mail Support</li>-->
        <!--                            <li class="w3-padding-16">-->
        <!--                                <h2>$ 10</h2>-->
        <!--                                <span class="w3-opacity">per month</span>-->
        <!--                            </li>-->
        <!--                            <li class="w3-light-grey w3-padding-24">-->
        <!--                                <button class="w3-button w3-white w3-padding-large">Sign Up</button>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="w3-half">-->
        <!--                        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">-->
        <!--                            <li class="w3-black w3-xlarge w3-padding-32">Pro</li>-->
        <!--                            <li class="w3-padding-16">Web Design</li>-->
        <!--                            <li class="w3-padding-16">Photography</li>-->
        <!--                            <li class="w3-padding-16">50GB Storage</li>-->
        <!--                            <li class="w3-padding-16">Endless Support</li>-->
        <!--                            <li class="w3-padding-16">-->
        <!--                                <h2>$ 25</h2>-->
        <!--                                <span class="w3-opacity">per month</span>-->
        <!--                            </li>-->
        <!--                            <li class="w3-light-grey w3-padding-24">-->
        <!--                                <button class="w3-button w3-white w3-padding-large">Sign Up</button>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!--        <!-- Contact section -->
        <!--        <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">-->
        <!--            <div class="w3-content" style="max-width:600px">-->
        <!--                <h4 class="w3-center"><b>Contact Me</b></h4>-->
        <!--                <p>Do you want me to photograph you? Fill out the form and fill me in with the details :) I love meeting new people!</p>-->
        <!--                <form action=" " target="_blank">-->
        <!--                    <div class="w3-section">-->
        <!--                        <label>Name</label>-->
        <!--                        <input class="w3-input w3-border" type="text" name="Name" required>-->
        <!--                    </div>-->
        <!--                    <div class="w3-section">-->
        <!--                        <label>Email</label>-->
        <!--                        <input class="w3-input w3-border" type="text" name="Email" required>-->
        <!--                    </div>-->
        <!--                    <div class="w3-section">-->
        <!--                        <label>Message</label>-->
        <!--                        <input class="w3-input w3-border" type="text" name="Message" required>-->
        <!--                    </div>-->
        <!--                    <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send Message</button>-->
        <!--                </form>-->
        <!--            </div>-->
        <!--        </div>-->

        <!-- Footer -->
        <!--        <footer class="w3-container w3-padding-32 w3-grey">-->
        <!--            <div class="w3-row-padding">-->
        <!--                <div class="w3-third">-->
        <!--                    <h3>INFO</h3>-->
        <!--                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="w3-third">-->
        <!--                    <h3>BLOG POSTS</h3>-->
        <!--                    <ul class="w3-ul">-->
        <!--                        <li class="w3-padding-16 w3-hover-black">-->
        <!--                            <img src="--><?//=base_url()?><!--assets/img/6.jpg" class="w3-left w3-margin-right" style="width:50px">-->
        <!--                            <span class="w3-large">Lorem</span><br>-->
        <!--                            <span>Sed mattis nunc</span>-->
        <!--                        </li>-->
        <!--                        <li class="w3-padding-16 w3-hover-black">-->
        <!--                            <img src="--><?//=base_url()?><!--assets/img/8.jpg" class="w3-left w3-margin-right" style="width:50px">-->
        <!--                            <span class="w3-large">Ipsum</span><br>-->
        <!--                            <span>Praes tinci sed</span>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="w3-third">-->
        <!--                    <h3>POPULAR TAGS</h3>-->
        <!--                    <p>-->
        <!--                        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>-->
        <!--                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DIY</span>-->
        <!--                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>-->
        <!--                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>-->
        <!--                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>-->
        <!--                    </p>-->
        <!--                </div>-->
        <!---->
        <!--            </div>-->
        <!--        </footer>-->

        <footer class="w3-container  ">
            <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
        </footer>
        <!-- End page content -->
    </div>
</div>
<!--<script>-->
<!--    // Script to open and close sidebar-->
<!--    function w3_open() {-->
<!--        document.getElementById("mySidebar").style.display = "block";-->
<!--        document.getElementById("myOverlay").style.display = "block";-->
<!--    }-->
<!---->
<!--    function w3_close() {-->
<!--        document.getElementById("mySidebar").style.display = "none";-->
<!--        document.getElementById("myOverlay").style.display = "none";-->
<!--    }-->
<!---->
<!--    // Modal Image Gallery-->
<!--    function onClick(element) {-->
<!--        document.getElementById("img01").src = element.src;-->
<!--        document.getElementById("modal01").style.display = "block";-->
<!--        var captionText = document.getElementById("caption");-->
<!--        captionText.innerHTML = element.alt;-->
<!--    }-->
<!---->
<!--</script>-->
<!---->
<!--<script>-->
<!--    // Accordion-->
<!--    function myFunction(id) {-->
<!--        var x = document.getElementById(id);-->
<!--        if (x.className.indexOf("w3-show") == -1) {-->
<!--            x.className += " w3-show";-->
<!--            x.previousElementSibling.className += " w3-theme-d1";-->
<!--        } else {-->
<!--            x.className = x.className.replace("w3-show", "");-->
<!--            x.previousElementSibling.className =-->
<!--                x.previousElementSibling.className.replace(" w3-theme-d1", "");-->
<!--        }-->
<!--    }-->
<!---->
<!--    // Used to toggle the menu on smaller screens when clicking on the menu button-->
<!--    function openNav() {-->
<!--        var x = document.getElementById("navDemo");-->
<!--        if (x.className.indexOf("w3-show") == -1) {-->
<!--            x.className += " w3-show";-->
<!--        } else {-->
<!--            x.className = x.className.replace(" w3-show", "");-->
<!--        }-->
<!--    }-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/gallery/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="--><?//=base_url()?><!--vendor/jquery/jquery.min.js"></script>-->
<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?=base_url()?>assets/PgwSlider-master/pgwslider.js"></script>
<script src="http://zeptojs.com/zepto.js"></script>
<!--<script src="--><?//=base_url()?><!--assets/js/jquery-3.3.1.js" ></script>-->
<!--<script src="--><?//=base_url()?><!--assets/js/script.js" ></script>-->
<script src="<?=base_url()?>assets/js/plugins.js"></script>
<script src="<?=base_url()?>assets/js/magnific-popup.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script>




<script>
    // Accordion
    //    function myFunction(id) {
    //        var x = document.getElementById(id);
    //        if (x.className.indexOf("w3-show") == -1) {
    //            x.className += " w3-show";
    //            x.previousElementSibling.className += " w3-theme-d1";
    //        } else {
    //            x.className = x.className.replace("w3-show", "");
    //            x.previousElementSibling.className =
    //                x.previousElementSibling.className.replace(" w3-theme-d1", "");
    //        }
    //    }
    //
    //    // Used to toggle the menu on smaller screens when clicking on the menu button
    //    function openNav() {
    //        var x = document.getElementById("navDemo");
    //        if (x.className.indexOf("w3-show") == -1) {
    //            x.className += " w3-show";
    //        } else {
    //            x.className = x.className.replace(" w3-show", "");
    //        }
    //    }

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