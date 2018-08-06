




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
                
                <h3>RESET PASSWORD</h3></div>
            <div class="card-body " >

                <div class="row">
                    <div class="col-sm-12" id="new_pass">
                        
                    </div>
                     <?php 

                       $alert =  $this->session->flashdata('alert');
                       if($alert!=''){
                       echo '<div class="alert alert-warning">'.$alert.'</div>';
                     }

                  ?>
                </div>

                <?php

                echo form_open('#', array('id'=>'cofrimPass'));
                ?>


               
                <input type="hidden" name="user" value="<?=$user?>"/>
                <input type="password" class="lock" name="password" id="password" placeholder="password" required="" value="">
                <input type="password" class="lock" name="confpassword" id="confpassword" placeholder="password" required="" value="">
               
                <button type="submit" class="btn" id="confirm" >Set New password</button>
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
$(document).ready(function(){

      $('#cofrimPass').on('submit', function(e){
         
       //   e.preventDefault();
        //   alert('dd');
          
              e.preventDefault();
                 var formdata = $('#cofrimPass').serialize();
               $('#new_pass').html('Loading....');
              // console.log(formdata);
                $.ajax({
                        url: '<?=base_url()?>welcome/update_password',
                        type: 'POST',
                        data: formdata,
                        success:function(response) {  
                         
                        console.log(response);
                          if(response.validator.success==1){
                              window.location.href=response.validator.messages;
                          }else{
                            $('#new_pass').html('<div class="alert alert-warning">'+response.validator.messages+'</div>');
                          }
                    }
                  }); 




             });
             
           
  });

   
</script>

</body>
</html>
