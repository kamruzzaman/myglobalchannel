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
        <div class="col-12">
            <h4>Image gallery</h4>
            <select name="album_id" id="album_id" class="form-control" onchange="showImage(this.value)">
                <option value="">Select album</option>
                <?php 
                 $user_data = $this->session->userdata('user_info');
               
                $query = $this->db->query("SELECT * FROM `album_tbl` WHERE `album_type` = 'image' and `user_id` = ".$user_data['user_id']);
                
                 foreach ($query->result() as $row){ ?>
                 
                  <option value="<?= $row->id ?>"><?= $row->album_name ?></option>
               <?php } ?>
                

              </select>
              
              
              <div class="box">
                  <div class="box-body">
                       <table class="table table-bordered" id="imglit_tbl">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image List</th>
                                </tr>
                            </thead>
                        </table>
                  </div>
              </div>
            <?php
                $tab_menu = '';
                $tab_content = '';
                $i = 0;
                 $user_data = $this->session->userdata('user_info');
               
                $query = $this->db->query("SELECT * FROM `album_tbl` WHERE `album_type` = 'image' and `user_id` = ".$user_data['user_id']);
                
                 foreach ($query->result() as $row){
                     
                     
                     
                     if($i == 0){
                        
                         $tab_menu .= '<li class="nav-item"><a href="#'.$row->id.'" class="nav-link active" data-toggle="tab">'.$row->album_name.'</a></li>';
                          $tab_content .= '<div id="'.$row->id.'" class="tab-pane fade in active show">';
                     }else{
                          $tab_menu .= '<li class="nav-item"><a href="#'.$row->id.'" data-toggle="tab" class="nav-link">'.$row->album_name.'</a></li>';
                          $tab_content .= '<div id="'.$row->id.'" class="tab-pane fade">>';
                     } 
                    $cat_id = $row->id;
                     $gallery_query = $this->db->query("SELECT * FROM imggallery_tbl WHERE album_id = '".$cat_id."'");
                    
                     foreach ($gallery_query->result() as $img_row){
                         $tab_content .= '<div class="col-md-3" style="margin-bottom:36px;"><img src="'.base_url('uploads/img_Gallery/').$img_row->image_list.'" class="img-responsive img-thumbnail" /></div>';
                         
                     }
                     $tab_content .= '<div style="clear:both"></div></div>';
                      $i++;
                 }
                 
                ?>
        </div>
    </div>


</section>
    <!-- /.content -->
     <style>
        .star-cb-group label{ padding-right: 19px; }
    </style>
    
    

    <?php $this->load->view('user/inc/dashboard_footer'); ?>
  