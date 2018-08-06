<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post
        <small>Post panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Post</li>
      </ol>
    </section>
    <?php
        $user_data = $this->session->userdata('user_info');

    ?>
<section class="content">
    
    <div class="row">
        <div class="col-12 col-lg-12">
            <a href="<?= base_url('user/create_blog')?>" class="pull-right btn btn-primary">Create new Blog</a>
            <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Post Table</h3>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered" id="post_tbl">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Post title</th>
                                <th>Post Description</th>
                                <th>Post Image</th>
                                <th>Post Category</th>
                                <th>Created By</th>
                                <th>Status</th>
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
  