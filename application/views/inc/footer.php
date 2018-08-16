
<div class="modal"  id="id01">
    <div class="container log" >
        <div class="card card-login mx-auto mt-5" >
            <div class="card-header">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times; </span>
                </div>
                <h3>Login</h3></div>
            <div class="card-body " >

                        <div class="row">
                        <div class="col-sm-12" id="lg_noti">

                        </div>
                    </div>

                    <?php

                        echo form_open('#', array('id'=>'myFormLogin'));
                    ?>


                    <input type="email" class="user" name="useremail" placeholder="Email" required="">
                    <input type="password" class="lock" name="userpassword" placeholder="password" required="" value="">
                    <input type="hidden" name="sendbacktopage" value="/">
                    <div class="signin-rit">
						<span class="checkbox1">
							 <label class="checkbox"><input type="checkbox" name="checkbox" >Remember me</label>
						</span>
                        <a class="forgot play-icon popup-with-zoom-anim" href="#" id="button3">Forgot Password?</a>
                        <div class="clear"> </div>
                    </div>
                    <button type="button" class="btn" id="Login_btn" >Login</button>
                </form>

                <p>New in this blog? <span id="button1" class="play-icon popup-with-zoom-anim" >Create Account</span></p>


            </div>
        </div>
    </div>
</div>

<div class="modal"  id="openModal">
    <div class="container reg">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('openModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <h3>Sign Up form</h3></div>
            <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12" id="noti">           
                        </div>
                    </div>
                    <?php

                        echo form_open('#', array('id'=>'myForm'));
                    ?>

                    <input type="text" id="fname" name="first_name" placeholder="First Name">
                    <span id="fnameError" style="color:red;"></span>

                    <input type="text" id="lname" name="last_name" placeholder="Last Name">
                    <span id="lnameError" style="color:red;"></span>

                     <input type="text" id="dob" name="dob" placeholder="<?='01-01-'.date('Y')?>">
                    <span id="dobnameError" style="color:red;"></span>

                    <input type="email" id="email" class="user" name="email" placeholder="e.g. mail@example.com" title="Please enter a valid email" >
                    <span id="emailError" style="color:red;"></span>

                    <input type="tel" id="tel"   class="mbl" name="tel" pattern="\d{11}" placeholder="Please enter a 11 digit phone number">
                    <span id="phoneError" style="color:red;"></span>
                    <input type="password" class="lock" id="Userpassword" name="Userpassword" placeholder="Enter password"  value="" >
                    <span id="passwordError" style="color:red;"></span>
                    <input type="password" class="lock" id="confirmPassword" name="confirmPassord" placeholder="Confirm password"  value="" >
                    <span id="confirmPasswordError" style="color:red;"></span>

                    <input type="hidden" name="sendbacktopage" value="/">
                    <div class="signin-rit">

                      <span class="checkbox1">
                        <label class="checkbox"><input type="checkbox" name="checkbox" id="terms">I agree to T&C

                            <a class="pp" target="_blank" href="#"> Privacy Policy</a></label>
                      </span>
                        <div class="clear"> </div>
                    </div>
                    <button type="button" class="btn" name="btn" id="btn_signup" >Sign up</button>
                </form>
                <p>Please  <span id="button2" class="play-icon popup-with-zoom-anim" >Login</span></p>



            </div>
        </div>
    </div>
</div>
<div class="modal"  id="forgetPass">
    <div class="container reg">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('forgetPass').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <h3>ForgetPass form</h3></div>
            <div class="card-body">
                    <p>Forgot password?No worry. please enter your email</p>
                    <div class="row">
                        <div class="col-sm-12" id="pass_notice">           
                        </div>
                    </div>
                    <?php

                        echo form_open('#', array('id'=>'forget_pass'));
                    ?>

                    

                    <input type="email" id="email" class="user" name="email" placeholder="e.g. mail@example.com" title="Please enter a valid email" >
                    <span id="emailError" style="color:red;"></span>
                    
                    <button type="button" class="btn" name="btn" id="btn_forgetpass" >Send</button>
                </form>
                <div class="row">
                    <div class="col-sm-6 text-left">
                         <p><span id="button1" class="play-icon popup-with-zoom-anim" >Register Account</span></p>
                    </div>
                    <div class="col-sm-6 text-right">
                        
                        <p><span id="button2" class="play-icon popup-with-zoom-anim" >Let me Login</span></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
	<script src="<?= base_url()?>assets/js/moment.js"></script>
<script src="<?=base_url()?>assets/js/jquery-3.3.1.js" ></script>
<script src="<?= base_url()?>vendor/fullcalendar/fullcalendar.min.js"></script>
<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/fileinput.js"></script>
<script src="<?=base_url()?>assets/js/script.js" ></script>
<script src="<?=base_url()?>assets/js/main.js"></script>
 <!-- fullCalendar -->

	
	
	<!-- MinimalPro Admin for calendar -->
	<!--<script src="<?= base_url()?>assets/js/calendar.js"></script>-->


<script type="text/javascript">
    var modal = document.getElementById('id01');


    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };




  $(document).on( 'click', '#Login_btn', function(){
    var data =  $('#myFormLogin').serialize();
    $.ajax({
        url:'<?=base_url()?>welcome/login_check',
        type:'post',
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

    $(document).on( 'click', '#btn_signup', function(){
    var data =  $('#myForm').serialize();
    // $('#noti').html('<i class="fa fa-spinner"></i>');
    $('#noti').html('<h4><center>Loading....</center></h4>');
    $.ajax({
        url:'<?=base_url()?>welcome/save_new_info',
        type:'post',
        data: data,
        success: function(response){
            console.log(response);
         if(response.rs == 1){
             $('#noti').html('<div class="alert alert-success">'+response.msg+'</div>');
            $('#myForm')[0].reset();
             
         }else{
              $('#noti').html('<div class="alert alert-warning">'+response.msg+'</div>');
         }
        }
    });
    });
     $(document).on( 'click', '#btn_forgetpass', function(){
    var data =  $('#forget_pass').serialize();
    // $('#noti').html('<i class="fa fa-spinner"></i>');
    $('#pass_notice').html('<h4><center>Loading....</center></h4>');
    $.ajax({
        url:'<?=base_url()?>welcome/passwordReset',
        type:'post',
        data: data,
        success: function(response){
            console.log(response);
         if(response.validator.success == 1){
             $('#pass_notice').html('<div class="alert alert-success">'+response.validator.messages+'</div>');
            $('#forget_pass')[0].reset();
             
         }else{
              $('#forget_pass').html('<div class="alert alert-warning">'+response.validator.messages+'</div>');
         }
        }
    });
    });


    $(document).ready(function () {
         $('#calendar').fullCalendar({
            header: {
                left: 'today prev,next',
                center: 'title',
                right: 'timelineDay,timelineThreeDays,agendaWeek,month,listWeek'
              },
            eventSources: [
                 {
                     events: function(start, end, timezone, callback) {
                         $.ajax({
                         url: '<?=base_url()?>welcome/get_events',
                         dataType: 'json',
                         data: {
                         // our hypothetical feed requires UNIX timestamps
                         start: start.unix(),
                         end: end.unix()
                         },
                         success: function(msg) {
                             var events = msg.events;
                             callback(events);
                         }
                         });
                     }
                 },
             ]
         });

        $('#button1').on('click', function() {
             $('#id01').hide();
             $('#forgetPass').hide();
            $('#openModal').show();
            
        });

        $('#button2').on('click', function() {
            $('#openModal').hide();
            $('#forgetPass').hide();
            $('#id01').show();
        });
         $('#button3').on('click', function() {
            $('#openModal').hide();
            $('#forgetPass').show();
            $('#id01').hide();
        });
        $(document).on('click', '#button1', function(){
             $('#id01').hide();
             $('#forgetPass').hide();
            $('#openModal').show();
        })
        $(document).on('click', '#button2', function(){
             $('#openModal').hide();
            $('#forgetPass').hide();
            $('#id01').show();
        })

//        $(".close").click(function(){
//            $(".modal").hide();
//        });

    });





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
</script>
  <script>

            $("#file-3").fileinput({
                showUpload: false,
                showCaption: false,
                browseClass: "btn btn-primary btn-lg"

            });

            $(function () {
                var inputFile = $('input[name=userfile]');
                var uploadURI = $('#form-upload').attr('action');
                var progressBar = $('#progress-bar');
                var url = "<?=base_url()?>";
                $("form#form-upload").submit(function (event) {
                    event.preventDefault();
                    var fileToUpload = inputFile[0].files[0];
                    // make sure there is file to upload
                    if (fileToUpload != 'undefined') {
                        // provide the form data
                        // that would be sent to sever through ajax
                        var formData = new FormData($(this)[0]);
                        // now upload the file using $.ajax
                        $.ajax({
                            url: uploadURI,
                            type: 'post',
                            data: formData,
                            processData: false,
                            contentType: false,
                            xhr: function () {
                                var xhr = new window.XMLHttpRequest();
                                xhr.upload.addEventListener("progress", function (evt) {
                                    if (evt.lengthComputable) {
                                        var percentComplete = evt.loaded / evt.total;
                                        percentComplete = parseInt(percentComplete * 100);
                                        $('.myprogress').text(percentComplete + '%');
                                        $('.myprogress').css('width', percentComplete + '%');
                                    }
                                }, false);
                                return xhr;
                            },
                            success: function (obj) {
                                console.log(obj);
                                var html='';
                                if (obj.result == '1') {
                                    console.log();
                                    $('.error').html(obj.msg);
                                    html = '<div class="w3-container w3-card w3-white w3-round w3-margin" id="msg_body"><br><img src="<?=base_url()?>'+obj.user_img+'" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">'+
                                    '<span class="w3-right w3-opacity"></span>'+
                                    '<h4>'+obj.user_name+'</h4>'+
                                  
                                    '<p>Just Now</p>'+
                    
                                    '<hr class="w3-clear">'+
                                    '<div class="w3-row-padding" style="margin:0 -16px">'+
                                            '<div class="w3-half">'+
                                                '<img src="'+url+'uploads/'+obj.msg+'"/>'+
                                            '</div>'+
                                        '</div>'+
                                        '<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>'+
                                        '<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>'+
                                '</div>';
                                $("#parents_div .new_div").prepend(html);
                
                                $('#form-upload')[0].reset();
                                    
                                }else{
                                    $('.msg').text('');
                                    $('.error').html(obj.msg);
                                }
                            }
                        });
                    }
                });
                // $('body').on('change.bs.fileinput', function (e) {
                //     $('.progress').hide();
                //     progressBar.text("0%");
                //     progressBar.css({width: "0%"});
                // });
            });
            $("#form_1").on('submit',function(){
                var form_data = new FormData();    
                $.each($(this).serializeArray(), function(i, field) {
                    
                    
                    form_data.append(field.name, field.value);
                    
                    
                });
                
                
           //form_data.append('description',tinyMCE.activeEditor.getContent({format : 'raw'}));;
           ajax_post('welcome/update_post',form_data,"#form_1");
           
           return false;   
        });  
        function ajax_post(url,frm,id){
            console.log(frm);
            var request = $.ajax({
                url: "<?=base_url();?>"+url,
                method: "post",
                data: frm,
                processData: false,
                contentType: false,
                beforeSend:function(){
                    $("#submit").html('<img src="<?=base_url();?>assets/img/ajax-loader.gif" style="width:18px;height:18px;" />');
                    
                }
            });
            request.done(function( response ) {
                var obj=jQuery.parseJSON(response);
                var html='';
                console.log(obj);
                
                if(obj.rs==1){
                    html = '<div class="w3-container w3-card w3-white w3-round w3-margin" id="msg_body"><br><img src="<?=base_url()?>'+obj.user_img+'" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">'+
                    '<span class="w3-right w3-opacity"></span>'+
                    '<h4>'+obj.user_name+'</h4>'+
                  
                    '<p>Just Now</p>'+
    
                    '<hr class="w3-clear">'+
                    '<div class="w3-row-padding" style="margin:0 -16px">'+
                            '<div class="w3-half">'+
                                '<p>'+obj.msg+'</p>'+
                            '</div>'+
                        '</div>'+
                        '<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>'+
                        '<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>'+
                '</div>';
                }
                $("#parents_div .new_div").prepend(html);
                
                $('#form_1')[0].reset();
                $("#submit").html('Submit');
                setTimeout(function(){
                  window.location.href = window.location.href;
              },10000);
        });
            
            request.fail(function( jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
            }); 
        }
        
        function addLikes(id,action,u_id) {
            
            $.ajax({
            url: "<?=base_url()?>welcome/add_likes",
            data:'id='+id+'&action='+action+'&user_id='+u_id,
            type: "POST",
            beforeSend: function(){
                $('#post_id_'+id+' .btn_likes').html("<img src='<?=base_url('assets/img/loaderIcon.gif')?>' />");
            },
            success: function(data){
            var likes = parseInt($('#likes-'+id).val());
            switch(action) {
                case "like":
                    $('#post_id_'+id+' .btn_likes').html('<button type="button" title="Unlike" class="w3-button w3-theme-d1 w3-margin-bottom" onClick="addLikes('+id+',\'unlike\','+u_id+')"><i class="fa fa-thumbs-o-down"></i> &nbsp;Unlike</button>');
                likes = likes+1;
                break;
                case "unlike":
                    $('#post_id_'+id+' .btn_likes').html('<button type="button" title="Like" class="w3-button w3-theme-d1 w3-margin-bottom"  onClick="addLikes('+id+',\'like\','+u_id+')"><i class="fa fa-thumbs-o-up"></i> &nbsp;Like</button>');
                likes = likes-1;
                break;
            }
            $('#likes-'+id).val(likes);
            if(likes>0) {
                $('#post_id_'+id+' .label-likes').html(likes+" Like(s)");
            } else {
                $('#post_id_'+id+' .label-likes').html('');
            }
            }
            });
        }

        </script>
</body>
</html>