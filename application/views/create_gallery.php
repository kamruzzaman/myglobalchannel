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


    .w3-padding-large {
        padding: 8px 24px !important;
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
    @media only screen and (max-width: 600px) and (min-width: 320px) {
            .slider_areaa{
               height: auto;
                margin-top: 5%;
            }

    }
    .btn_gallery{
        float: right;
        text-decoration: none;
        border: 1px solid #ddd;
        padding: 10px 15px;
        margin: -60px 14px 22px 0;
        display: inline-block;
        background: #007bff;
        color: #fff;
    }
    .gallerbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
    
    .gallerbtn:hover {
        opacity: 1;
    }
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text], .form_control {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
    
    input[type=text]:focus{
        background-color: #ddd;
        outline: none;
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


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <div class="w3-main">
        <div class="w3-hide-large"></div>



        <div id="main" style="width: 100%;float: left;margin-top: 5%">
            <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
            <h2 style="text-align: center;padding: 20px">Create New Image Gallery</h2>
            
            <?php echo form_open_multipart('welcome/create_photogallery', array('id' => 'file_up')); ?>
            <div class="container">
               
                <label for=""><b>Select Album</b></label>
                <select class="form_control" name="album_id" id="album_id">
                    <option>Select album</option>
                    <? foreach($get_album as $albm){ ?>
                    
                        <option value="<?= $albm['id'] ?>"><?= $albm['album_name'] ?></option>
                    <?php } ?>
                </select>
            
                <label for=""><b>Create Album</b></label>
                <input type="text" placeholder="Enter album Name" name="album_name">
            
                <label for=""><b>UPload Photo</b></label>
                <input type="file" name="files[]" multiple/>
                <button type="submit" class="gallerbtn" id="file_uplod">Upload Photo</button>
              </div>
            <?php echo form_close(); ?>
             <div id="uploaded_images"></div>
        </div>






        







        <footer class="w3-container  ">
            <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
        </footer>
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
<script src="<?=base_url()?>assets/js/main.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("area[rel^='prettyPhoto']").prettyPhoto();

        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});


    });
</script>




<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    $(document).ready(function() {
        $('.pgwSlider').pgwSlider();
    });
</script>
<script>
        var url = "<?= base_url() ?>";
			$(document).ready(function(){
			    console.log(url);
			 $('#file_uzplod').on('submit', function(){
			     console.log('submitt');
			  var files = $('#files')[0].files;
			  var error = '';
			  var form_data = new FormData();
			  for(var count = 0; count<files.length; count++)
			  {
			   var name = files[count].name;
			   var extension = name.split('.').pop().toLowerCase();
			   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			   {
			    error += "Invalid " + count + " Image File"
			   }
			   else
			   {
			    form_data.append("files[]", files[count]);
			   }
			  }
			  if(error == '')
			  {
			   $.ajax({
			    url:url+"welcome/create_gallery", //base_url() return http://localhost/tutorial/codeigniter/
			    method:"POST",
			    data:form_data,
			    contentType:false,
			    cache:false,
			    processData:false,
			    beforeSend:function()
			    {
			     $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
			    },
			    success:function(data)
			    {
			     //$('#uploaded_images').html(data);
			     window.location = data.link;
			     //window.location.href = ''
			     $('#files').val('');
			    }
			   })
			  }
			  else
			  {
			   alert(error);
			  }
			 });
			});
			</script>
</body>
</html>