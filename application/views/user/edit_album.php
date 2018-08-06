<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
        <small>Category panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Category</li>
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
                echo form_open('user/update_album', $attributes);
                
            ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="">Album Name</label>
                  <input class="form-control" name="album_name" id="album_name" value="<?= $album['album_name']?>"/>
                </div>
                <div class="form-group">
                  <label for="">Album Type</label>
                  <select class="form-control" name="file_type" id="file_type">
                      
                      <option value="image"<?php echo ($album['album_type'] ==  'image') ? ' selected="selected"' : '';?>>Image</option>
                      <option value="audio"<?php echo ($album['album_type'] ==  'audio') ? ' selected="selected"' : '';?>>Audio</option>
                      <option value="video"<?php echo ($album['album_type'] ==  'video') ? ' selected="selected"' : '';?>>Video</option>
                  </select>
                </div>
                <input type="hidden" name="aid" value="<?=$album['id']?>" />
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



</section>
    <!-- /.content -->
     <style>
        .star-cb-group label{ padding-right: 19px; }
    </style>
    
    

    <?php $this->load->view('user/inc/dashboard_footer'); ?>
  