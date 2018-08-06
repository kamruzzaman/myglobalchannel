<?php $this->load->view('inc/admin_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
		
<style>
    .modal-header{
        display: inline-block;
    }
</style>



<section class="content">
    <div class="row">
        <div class="col-6 col-lg-4">
            <!-- Profile Image -->
          <div class="box">
            <div class="box-body box-profile">
                <?php if($users['profile_image']){ ?>
                    <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?=base_url().$users['profile_image']?>" alt="User profile picture">
                <?php } else{ ?>
              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?=base_url('assets/img/default_avatar_male.jpg')?>" alt="User profile picture">
              <?php } ?>

              <h3 class="profile-username text-center"><?=$users['first_name'].' '.$users['last_name']  ?></h3>

             
				
              <div class="row social-states">
				  <div class="col-12 text-center"><?=$users['role']?></div>
			  </div>
            
              <div class="row">
              	<div class="col-12">
              		<div class="profile-user-info">
						<p>Email address </p>
						<h6 class="margin-bottom"><?= $users['email']?></h6>
						<p>Phone</p>
						<h6 class="margin-bottom"><?= $users['tel']?></h6> 
						<p>Address</p>
						<h6 class="margin-bottom"><?= $users['address']?></h6>
						<div class="map-box">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<p class="margin-bottom">Social Profile</p>
						<div class="user-social-acount">
							<button class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
							<button class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
							<button class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
						</div>
					</div>
             	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-lg-8 col-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                 <li><a class="active" href="#timeline" data-toggle="tab">Update Information</a></li>
                </ul>
                            
                <div class="tab-content">
                 
                 <div class="active tab-pane" id="timeline">
                  
                   <?php
                   if(isset($error) && $error !=''){
                                                        echo '<div class="alert alert-warning">'.$error.'</div>';
                                                    }
                                            
                                                    $alert = $this->session->flashdata('alert');    
                                                    if($alert !=''){
                                                         echo '<div class="alert alert-info">'.$alert.'</div>';
                                                    }
                                                    $errorr = $this->session->flashdata('error');    
                                                    if($errorr !=''){
                                                         echo '<div class="alert alert-info">'.$errorr.'</div>';
                                                    }
                        
                   
                    echo form_open_multipart('admin/profile_update', array('class'=>'form-horizontal form-element col-12'));
                            
                    ?>    
                        
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 control-label">Address</label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="" name="address" value="">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="inputPhone" class="col-sm-2 control-label">New Password</label>
    
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPhone" placeholder="" name="password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 control-label">Confirm New Password</label>
    
                        <div class="col-sm-10">
                         <input type="password" class="form-control" id="inputPhone" placeholder="" name="confirm_password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 control-label">Profile Picture </label>
    
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="inputSkills" placeholder="Add New profile Picture" name="profile_image">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="ml-auto col-sm-10">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>    
                  <!-- /.tab-pane -->
                  
                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
        </div>
    </div>
</section>
    
    
    

    <?php $this->load->view('inc/admin_footer'); ?>
  