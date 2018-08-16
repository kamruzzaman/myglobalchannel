<?php $this->load->view('user/inc/dashboard_header'); ?>
<style>
    .list-group-item{background-color: #fff;
    border-color: transparent;
    }
    .blogimgs{
        margin-bottom:30px;
    }
</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Blog panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </section>
    <?php
        $user_data = $this->session->userdata('user_info');

    ?>
<section class="content">
    <div class="row">
        <div class="col-6 col-lg-10">
          <!-- general form elements -->
          <div class="box">
              <div class="box-body">
                   <?php foreach($categories as $cat){
                  ?>
                  
                    <?php  if($cat['id'] ==  $post['category_id']){ $cat_name =  $cat['category_name']; }?></option>
                  <?php } ?>
                 <img src="<?= base_url('blogimage/').$post['post_img']?>" class="img-fluid"/>
                 <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Blog  title: </strong><?php echo $post['post_title']; ?> </li>
                  <li class="list-group-item"><strong>Blog  subtitle: </strong><?php echo $post['post_subtitle']; ?></li>
                  <li class="list-group-item"><strong>Blog Description: </strong> <?php echo $post['post_desc']; ?></li>
                  <li class="list-group-item"><strong>Blog category: </strong><?= $cat_name ?></li>
                  <li class="list-group-item"><strong>Blog Status: </strong><?php echo $post['status']; ?></li>
                </ul>
                
              </div>
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
  