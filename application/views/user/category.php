<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
        <small>Category panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Category</li>
      </ol>
    </section>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Category Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<!-- Nav tabs -->
				<ul class="nav nav-pills margin-bottom margin-top-10">
				    <li class=" nav-item"> <a href="#all_category" class="<?php echo ($page == "all_category" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">All Category</a> </li>
					<li class="nav-item"> <a href="#create_category" class="<?php echo ($page == "create_category" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">Create new Category</a> </li>
			
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="all_category" class="tab-pane <?php echo ($page == "all_category" ? "active" : "")?>" aria-expanded="false">
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
					<div id="create_category" class="tab-pane <?php echo ($page == "create_category" ? "active" : "")?>" aria-expanded="false">
						<!-- general form elements -->
                      <div class="box box-default">
                       
                        <!-- /.box-header -->
                         <?php 
            
                           $alert =  $this->session->flashdata('alert');
                               if($alert){
                               echo '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$alert.'</div>';
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
            </div>
            <!-- /.box-body -->
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
  