<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notice
        <small>Notice panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Notice</li>
      </ol>
    </section>
<?php
              $user_data = $this->session->userdata('user_info');


    ?>
    <style>
        input::-webkit-calendar-picker-indicator {
    display: none;
}
    </style>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Notice Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<!-- Nav tabs -->
				<ul class="nav nav-tabs margin-bottom margin-top-10">
				    <li class=" nav-item"> <a href="#all_notice" class="<?php echo ($page == "all_notice" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">All Notice</a> </li>
					<li class="nav-item"> <a href="#create_notice" class="<?php echo ($page == "create_notice" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">Create new Notice</a> </li>
			
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="all_notice" class="tab-pane pad <?php echo ($page == "all_notice" ? "active" : "")?>" aria-expanded="false">
						<table class="table table-bordered" id="notice_tbl">
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
					<div id="create_notice" class="tab-pane pad <?php echo ($page == "create_notice" ? "active" : "")?>" aria-expanded="false">
					    
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
                                  <!--<input class="form-control span2" name="created_date" id="created_date" type="text">-->
                                  <input type="text" class="span2" name="created_date" value="" id="created_date">
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
  