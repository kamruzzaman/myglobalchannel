<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Blog panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
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
              <h3 class="box-title">Create New Blog</h3>
            </div>
            <!-- /.box-header -->
             <?php
               if(isset($error) && $error !=''){
                    echo '<div class="alert alert-warning">'.$error.'</div>';
                }
                $alert = $this->session->flashdata('alert');    
                if($alert !=''){
                     echo '<div class="alert alert-info">'.$alert.'</div>';
                }
                $errorr = $this->session->flashdata('error');    
                if($errorr !=''){
                     echo '<div class="alert alert-info">'.$errorr.'</div>';
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
          <!-- /.box -->
        
    </div>
    </div>


</section>
    <!-- /.content -->
     <style>
        .star-cb-group label{ padding-right: 19px; }
    </style>
    
    
<?php $this->load->view('user/inc/dashboard_footer'); ?>
  