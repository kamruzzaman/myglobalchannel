<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Image 
        gallery
        <small>Image panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Image Gallery</li>
      </ol>
    </section>
    <?php
        $user_data = $this->session->userdata('user_info');

    ?>
<section class="content">
    <div class="row">
        <div class="col-6 col-lg-6">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Image Gallery</h3>
            </div>
            <!-- /.box-header -->
             <?php echo $error;?>

               <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
               <?php
                $attributes = array('class' => 'formelement','method'=>'post', 'id' => 'file_up');
                echo form_open_multipart('user/create_photogallery', $attributes);
                
            ?>  
              <div class="box-body">
                  
                <div class="form-group">
                    <label for=""><b>Create Album</b></label>
                    <input type="text" class="form-control" placeholder="Enter album Name" name="album_name">
                  
                </div>
                <p style='margin-top:0'>Or</p>
                <div class="form-group">
                    <label for=""><b>Select Album</b></label>
                    <select class="form-control" name="album_id" id="album_id">
                        <option value="0">Select album</option>
                        <? foreach($get_album as $albm){ ?>
                        
                            <option value="<?= $albm['id'] ?>"><?= $albm['album_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                
                <div class="form-group">
                  <label for="">Upload Photo</label>
                   <input type="file" name="files[]" multiple/>
                   <p>* Allowed file type are : jpg,gif,png,jpeg </p>
                </div>
                <input type="hidden" name="user_id" value="<?=$user_data['user_id']?>" />
                <input type="hidden" name="file_type" value="image"/>
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
    </div>


</section>
    <!-- /.content -->
     <style>
        .star-cb-group label{ padding-right: 19px; }
    </style>
    
    
<?php $this->load->view('user/inc/dashboard_footer'); ?>
  