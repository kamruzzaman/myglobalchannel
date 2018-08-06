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
              <h3 class="box-title">Create New category</h3>
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
                echo form_open('user/add_category', $attributes);
            ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="">Category title</label>
                  <input class="form-control" name="category_title" id="category_title" placeholder="Enter category" />
                </div>
                <div class="form-group">
                  <label for="">Category Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="category_desc"></textarea>
                </div>
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
                <table class="table table-bordered" id="category_tbl">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th style="">Category Name</th>
                            <th style="">Description</th>
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
  