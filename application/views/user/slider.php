<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner
        <small>Banner panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Banner</li>
      </ol>
    </section>
<?php
              $user_data = $this->session->userdata('user_info');


    ?>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Banner Table</h3>
                </div> 
                <div class="box-body">
                    <ul class="nav nav-tabs margin-bottom margin-top-10">
    				    <li class=" nav-item"> <a href="#all_banner" class="<?php echo ($page == "all_banner" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">All Banner</a> </li>
    					<li class="nav-item"> <a href="#create_banner" class="<?php echo ($page == "create_banner" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">Create new Banner</a> </li>
    			
    				</ul>
    				<div class="tab-content">
    				    <div id="all_banner" class="tab-pane pad <?php echo ($page == "all_banner" ? "active" : "")?>" aria-expanded="false">
    						 <table class="table table-bordered" id="slider_tbl">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Banner title</th>
                                        <th width="25%">Banner Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                           
                           
                            </table>
    					</div>
    					<div id="create_banner" class="tab-pane pad <?php echo ($page == "create_banner" ? "active" : "")?>" aria-expanded="false">
					        <div class="box">
                                <!-- /.box-header -->
                                 <?php 
                        
                                   $alert =  $this->session->flashdata('alert');
                                       if($alert){
                                        echo '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$alert.'</div>';
                                     }
                        
                                  ?>
                                <!-- form start -->
                                 <?php
                                    $attributes = array('class' => 'form-element','method'=>'post');
                                    echo form_open_multipart('user/add_slider', $attributes);
                                ?>
                                  <div class="box-body">
                                      
                                    <div class="form-group">
                                      <label for="">Banner Title</label>
                                      <input class="form-control" name="slider_title"  type="text" placeholder="Banner title">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Upload Image</label>
                                      <input name="slider_img"  type="file">
                                    </div>
                                    <input type="hidden" name="created_by" value="<?=$user_data['user_name']?>" />
                                    
                                  </div>
                                  <!-- /.box-body -->
                        
                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                  </div>
                                </form>
                              </div>
    					</div>
    				</di>
                </div>
            </div>
        </div>
    </div>
    </div>


</section>
    <!-- /.content -->
     <style>
        .star-cb-group label{ padding-right: 19px; }
    </style>
    
    

   <?php $this->load->view('user/inc/dashboard_footer'); ?>
  