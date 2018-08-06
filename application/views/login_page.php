




<?php echo $this->session->flashdata('alert');?>


<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/update_style.css">
</head>
<body>
<div style="margin: auto; width: 80%" >
    


    <section class="new content_area clearfix">
        <div class="container log" >
        <div class="card card-login mx-auto mt-5" >
            <div class="card-header">
                
                <h3>Login</h3></div>
            <div class="card-body " >

                <div class="row">
                    <div class="col-sm-12" id="lg_noti">

                    </div>
                </div>

                <?php

                echo form_open('#', array('id'=>'myFormLogin'));
                ?>


                <input type="email" class="user" name="useremail" id="useremail" placeholder="Email" required="">
                <input type="password" class="lock" name="userpassword" id="userpassword" placeholder="password" required="" value="">
                <div class="signin-rit">
						<span class="checkbox1">
							 <label class="checkbox"><input type="checkbox" name="checkbox" >Remember me</label>
						</span>
                    <div class="clear"> </div>
                </div>
                <button type="button" class="btn" id="Login_btn" >Login</button>
                </form>


            </div>
        </div>
    </div>
    </section>

</div>
<footer class="w3-container  ">
    <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
</footer>


<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!--<script src="--><?//=base_url()?><!--assets/js/jquery-3.3.1.js" ></script>-->
<script src="<?=base_url()?>assets/js/script.js" ></script>



<script type="text/javascript">
    var url = '<?=base_url()?>';
    $(document).ready(function(){
        console.log(url);
      $(document).on( 'click', '#Login_btn', function(){
          
        var data =  $('#myFormLogin').serialize();
        $.ajax({
            url:url+'welcome/login_check',
            type:'POST',
            data: data,
            success: function(resp){
                console.log(resp);
             if(resp.status == 1){
                 $('#lg_noti').html('<div class="alert alert-success">'+resp.msg+'</div>');
                 window.location.href = resp.page;
             }else{
                  $('#lg_noti').html('<div class="alert alert-warning">'+resp.msg+'</div>');
             }
            }
        });
        }); 
    });
    // $('#myFormLogin').on( 'submit', function(){
    //     var data =  $('#myFormLogin').serialize();
    //     $.ajax({
    //         url:'<?=base_url()?>welcome/login_check',
    //         type:'post',
    //         data: data,
    //         success: function(resp){
    //             console.log(resp);
    //             if(resp.status == 1){
    //                 $('#lg_noti').html('<div class="alert alert-success">'+resp.msg+'</div>');
    //                 window.location.href = resp.page;
    //             }else{
    //                 $('#lg_noti').html('<div class="alert alert-warning">'+resp.msg+'</div>');
    //             }
    //         }
    //     });
    // });

   
</script>

</body>
</html>
