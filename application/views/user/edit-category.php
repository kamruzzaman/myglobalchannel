<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
        <small>Category panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Notice</li>
      </ol>
    </section>
<section class="content">
    <div class="row">
        <div class="col-6 col-lg-6">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit New category</h3>
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
                $attributes = array('class' => 'formelement','method'=>'post');
                echo form_open('user/update_category', $attributes);
                
            ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="">Category title</label>
                  <input class="form-control" name="category_title" id="category_title"  value="<?php echo $category[0]['category_name']; ?>" />
                </div>
                <div class="form-group">
                  <label for="">Category Description</label>
                  <textarea class="form-control" rows="3" name="category_desc"><?php echo $category[0]['category_details'] ?></textarea>
                </div>
                 <input type="hidden" name="cat_id" id="cat_id"  value="<?php echo $category[0]['id']; ?>" />
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?= base_url('user/category')?>" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success">Submit</button>
                
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
  