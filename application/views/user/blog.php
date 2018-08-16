<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Blog panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('user')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </section>
    <?php
        $user_data = $this->session->userdata('user_info');
        $category = get_all_category();
    ?>
    <style>
          .img-thumbnail{
            min-width: 200px;
        }
    </style>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blog Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<!-- Nav tabs -->
				<ul class="nav nav-pills margin-bottom margin-top-10">
					<li class=" nav-item"> <a href="#all_blog" class="<?php echo ($page == "all_blog" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">All Blog</a> </li>
					<li class="nav-item"> <a href="#create_blog" class="<?php echo ($page == "create_blog" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">Create new Blog</a> </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="all_blog" class="tab-pane <?php echo ($page == "all_blog" ? "active" : "")?>" aria-expanded="false">
						<table class="table table-bordered" id="post_tbl">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Blog title</th>
                                    <th style="width:25%">Blog Description</th>
                                    <th>Blog Image</th>
                                    <th>Blog Category</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
					</div>
					<div id="create_blog" class="tab-pane <?php echo ($page == "create_blog" ? "active" : "")?>" aria-expanded="false">
						<div class="box">
                            <!-- /.box-header -->
                             <?php
                               if(isset($error) && $error !=''){
                                    echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$error.'</div>';
                                   
                                }
                                $alert = $this->session->flashdata('alert');    
                                if($alert !=''){
                                     echo '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$alert.'</div>';
                                }
                                $errorr = $this->session->flashdata('error');    
                                if($errorr !=''){
                                     echo '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$errorr.'</div>';
                                }
                                $attributes = array('class' => 'formelement','method'=>'post');
                                echo form_open_multipart('user/add_posts', $attributes);
                                
                            ?>  
                              <div class="box-body">
                                <div class="form-group">
                                  <label for="">Blog  title</label>
                                  <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter blog Title" value="<?php echo set_value('post_title'); ?>" />
                                </div>
                                <div class="form-group">
                                  <label for="">Blog  subtitle</label>
                                  <input type="text" class="form-control" name="post_subtitle" id="post_subtitle" placeholder="Enter blog Subtitle" value="<?php echo set_value('post_subtitle'); ?>" />
                                </div>
                                <div class="form-group">
                                  <label for="">Blog Description</label>
                                  <textarea class="form-control" rows="3" placeholder="Enter blog Description" name="post_desc" id="post_desc" type="text"><?php echo set_value('post_desc'); ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="">Upload Image</label>
                                  <input type="file" name="post_img" id="post_img" />
                                  <p>* Allowed file type are : jpg,gif,png,jpeg </p>
                                  <p> * Maximum size: 2mb</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                          <label for="">Select Category</label>
                                          <select class="form-control" name="category_id" id="category_id">
                                             <option>Select Category</option>
                                          <?php foreach($category as $cat){ ?>
                                            <option value="<?= $cat['id'] ?>"><?= $cat['category_name'] ?></option>
                                          <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"><p>Or </p></div>
                                    <div class="col-sm-6">
                                        <label for="">Create Category</label>
                                        <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name" value="<?php echo set_value('post_subtitle'); ?>" />
                                    </div>
                                </div>
                                        
                                <input type="hidden" name="user_id" value="<?=  $user_data['user_id']?>" />
                                
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
  