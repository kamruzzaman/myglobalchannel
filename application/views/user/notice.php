<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notice
        <small>Notice panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Notice</li>
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
              <h3 class="box-title">Create New Notice</h3>
            </div>
            <!-- /.box-header -->
             <?php 

               $alert =  $this->session->flashdata('alert');
                   if($alert){
                   echo $alert;
                 }
    
              ?>
            <!-- form start -->
             <?php
                $attributes = array('class' => 'form-element','method'=>'post');
                echo form_open('user/add_data', $attributes);
            ?>
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="">Notice Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="notice_description"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Created at</label>
                  <input class="form-control" name="created_date" id="example-date-input" type="date">
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
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-responsive" id="notice_tbl">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Notice Description</th>
                            <th>Created At</th>
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
  