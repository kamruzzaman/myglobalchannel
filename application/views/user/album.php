<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Albums
        <small>Album panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Album</li>
      </ol>
    </section>
<section class="content">
    <div class="row">
        <div class="col-6 col-lg-6">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create New album</h3>
            </div>
            <!-- /.box-header -->
             <?php 
                $user_data = $this->session->userdata('user_info');
               $alert =  $this->session->flashdata('alert');
                   if($alert){
                   echo $alert;
                 }
    
              ?>
            <!-- form start -->
             <?php
                $attributes = array('class' => 'formelement','method'=>'post');
                echo form_open('user/add_album', $attributes);
            ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="">Album Name</label>
                  <input class="form-control" name="album_name" id="album_name" placeholder="Enter album Name" />
                </div>
                <div class="form-group">
                  <label for="">Album Type</label>
                  <select class="form-control" name="file_type" id="file_type">
                      <option value="image">Image</option>
                      <option value="audio">Audio</option>
                      <option value="video">Video</option>
                  </select>
                </div>
                <input type="hidden" name="user_id" value="<?=$user_data['user_id']?>" />
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        
    </div>
    </div>


    <!-- /.row -->
    <div class="row">
        <div class="col-xs-6 col-lg-12">
             <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Album Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered" id="album_tbl">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th style="">Album Name</th>
                            <th style="">Album Type</th>
                            <th style="">Action</th>
                        </tr>
                    </thead>
               
               
                </table>
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
  