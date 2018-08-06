<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider
        <small>Slider panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Slider</li>
      </ol>
    </section>
<?php
              $user_data = $this->session->userdata('user_info');


    ?>
<section class="content">
    <div class="row">
        <div class="col-xs-6 col-lg-12">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Slider</h3>
            </div>
            <!-- /.box-header -->
             <?php 

               $alert =  $this->session->flashdata('alert');
                   if($alert){
                   echo $alert;
                 }
                 $alert =  $this->session->flashdata('alert');
    
              ?>
            <!-- form start -->
             <?php
                $attributes = array('class' => 'form-element','method'=>'post');
                echo form_open_multipart('user/add_slider', $attributes);
            ?>
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="">Slider Title</label>
                  <input class="form-control" name="slider_title"  type="text" placeholder="Slider title">
                </div>
                <div class="form-group">
                  <label for="">Upload Image</label>
                  <input class="form-control" name="slider_img"  type="file">
                </div>
                <input type="hidden" name="created_by" value="<?=$user_data['user_name']?>" />
                
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
              <h3 class="box-title">Slider Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-responsive" id="slider_tbl">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Slider title</th>
                            <th>Slider Image</th>
                            <th>Action</th>
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
  