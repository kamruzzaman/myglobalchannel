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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              
              <?php
   echo $tab_menu;
   ?>
            </ul>
            <div class="tab-content" id="myTabContent">
              <?php
               echo $tab_content;
               ?>
            </div>
        </div>
    </div>


</section>
    <!-- /.content -->
     <style>
        .star-cb-group label{ padding-right: 19px; }
    </style>
    
    

    <?php $this->load->view('user/inc/dashboard_footer'); ?>
  