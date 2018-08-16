<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Audio Gallery
        <small>Audio panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Audio Gallery</li>
      </ol>
    </section>
<section class="content">
    <div class="row">
    	<div class="col-sm-12">
    		<div class="box">
    			<div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                	<ul class="nav nav-tabs margin-bottom margin-top-10">
    				    <li class=" nav-item"> <a href="#all_audio" class="<?php echo ($page == "all_audio" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">All Audio</a> </li>
    					<li class="nav-item"> <a href="#create_audio" class="<?php echo ($page == "create_audio" ? "active" : "")?> nav-link" data-toggle="tab" aria-expanded="false">Create new audio gallery</a> </li>
    			
    				</ul>
    				<div class="tab-content">
    					<div id="all_audio" class="tab-pane pad <?php echo ($page == "all_audio" ? "active" : "")?>" aria-expanded="false">
    					    <div class="row">
                              <div class="col-sm-6" style="margin-bottom:30px">
                                  <select name="album_id" id="album_id" class="form-control" onchange="showAudio(this.value)">
                                      <option value="">Select album</option>
                                        <?php 
                                         $user_data = $this->session->userdata('user_info');
                                       
                                        $query = $this->db->query("SELECT * FROM `album_tbl` WHERE `album_type` = 'audio' and `user_id` = ".$user_data['user_id']);
                                        
                                         foreach ($query->result() as $row){ ?>
                                         
                                          <option value="<?= $row->id ?>"><?= $row->album_name ?></option>
                                       <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="box">
                             <div class="box-header with-border">
                                  <h3 class="box-title">Audio Gallery Table</h3>
                             </div>
                              <div class="box-body">
                                   <table class="table table-bordered" id="audio_list">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Audio List</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                              </div>
                          </div>
    					</div>
    					<div id="create_audio" class="tab-pane pad <?php echo ($page == "create_audio" ? "active" : "")?>" aria-expanded="false">
    					    <div class="box">
                                
                                <!-- /.box-header -->
                                 
                                   <p><?php echo $error; ?></p>
                                   <?php
                                   $get_album = get_audio_album($user_data['user_id']);
                                    $attributes = array('class' => 'formelement','method'=>'post', 'id' => 'file_up');
                                    echo form_open_multipart('user/create_audiogallery', $attributes);
                                    
                                ?>  
                                  <div class="box-body">
                                    <div class="form-group">
                                        <label for=""><b>Select Album</b></label>
                                        <select class="form-control" name="album_id" id="album_id">
                                            <option>Select album</option>
                                            <? foreach($get_album as $albm){ ?>
                                            
                                                <option value="<?= $albm['id'] ?>"><?= $albm['album_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Create Album</b></label>
                                        <input type="text" class="form-control" placeholder="Enter album Name" name="album_name">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label for="">Upload Audio</label>
                                       <input type="file" name="files[]" multiple/>
                                        <p>* Allowed file type are : wav,mp3,3gp,ogg,aif,au,wma,aac,ra,gsm,m4a,mp4 </p>
                                        <p>Maximum size: 10mb</p>
                                    </div>
                                    <input type="hidden" name="user_id" value="<?=  $user_data['user_id']?>" />
                                    <input type="hidden" name="file_type" value="audio"/>
                                    
                                  </div>
                                  <!-- /.box-body -->
                    
                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                  </div 
                                </form>
                              </div>
    					</div>
    				</div>
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
  