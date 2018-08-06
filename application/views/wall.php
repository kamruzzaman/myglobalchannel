<?php $this->load->view('inc/header'); ?>
<style>

    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    ul.nav{
        float:none;
    }
    ul.nav li a{
        text-decoration: none;
        padding: 3px;
        margin: 5px;
        color: #3c5a9a;
        background: #ddd;
        border: 2px solid #ccc;
        min-width: 120px;
        font-size: 15px;
        font-weight: normal;
        text-align: center;
    }
    ul.nav li.active{
        background: none;
        color: #000;
    }
    ul.nav li a.active{
        background: #fff;border-color: #fff;
    }
    .tab-pane.active{
        background: transparent;
        color: #000;
    }
    .btn{width: auto;}
    .progress{
        display: none;
    }
</style>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <div class="w3-row">
        <div class="w3-col m3">
            <div class="w3-card w3-round w3-white">
                <div class="w3-container">
                    <h4 class="w3-center">My Profile</h4>
                    <p class="w3-center"><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> View photos of Me (5)</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Edit My Profile</p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
                </div>
            </div>
            <br>

            <!-- Accordion -->
            <div class="w3-card w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <p>Some text..</p>
                    </div>
                    <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div>
                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div class="w3-row-padding">
                            <br>
                            <div class="w3-half">
                                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class="w3-card w3-round w3-white w3-hide-small">
                <div class="w3-container">
                    <p>Interests</p>
                    <p>
                        <span class="w3-tag w3-small w3-theme-d5">Interests</span>
                        <span class="w3-tag w3-small w3-theme-d4">network</span>
                        <span class="w3-tag w3-small w3-theme-d3">ucla alum</span>
                        <span class="w3-tag w3-small w3-theme-d1">sgu alum</span>
                        <span class="w3-tag w3-small w3-theme-l1">barthday</span>
                        <span class="w3-tag w3-small w3-theme-l2">july 17</span>
                        <span class="w3-tag w3-small w3-theme-l3">Design</span>
                        <span class="w3-tag w3-small w3-theme-l4">Art</span>
                        <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                    </p>


                </div>
            </div>
            <br>

            <!-- Alert Box -->
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small friends">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                <p><strong>Friends</strong></p>
                <p>People are looking at your profile. Find out who.</p>
                <ul>
                    <li><a href=""><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt=""><p> muhammad </p></a></li>
                    <li><a href=""><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt=""><p> muhammad </p></a></li>
                    <li><a href=""><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt=""><p> muhammad </p></a></li>
                    <li><a href=""><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt=""><p> muhammad </p></a></li>
                    <li><a href=""><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt=""><p> muhammad </p></a></li>
                    <li><a href=""><img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt=""><p> muhammad </p></a></li>
                </ul>
            </div>

        </div>
        <?php  $user_data = $this->session->userdata('user_info'); $uid = $user_data['user_id']?>

        <div class="w3-col m7">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <div class="button">

                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#update_status" aria-controls="update_status" role="tab" data-toggle="tab" class="active"><i class="fa fa-user"></i>Update status</a></li>
                                <li role="presentation"><a href="#write_note" aria-controls="write_note" role="tab" data-toggle="tab"><i class="fa fa-address-book"></i>Write Note</a></li>
                                <li role="presentation"><a href="#add_photo" aria-controls="add_photo" role="tab" data-toggle="tab"><i class="fa fa-image"></i>Add Photos/Videos</a></li>
                                <li role="presentation"><a href="#write_post" aria-controls="write_post" role="tab" data-toggle="tab"><i class="fa fa-edit"></i>Write Post</a></li>
                                <li role="presentation"><a href="#write_social" aria-controls="write_social" role="tab" data-toggle="tab"><i class="fa fa-share-square"></i>Write Social</a></li>
                              </ul>
                            
                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="update_status">
                                    <p contenteditable="true" class="w3-border w3-padding">Status: Feeling hehe</p>
                                    <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="write_note">
                                    <form>
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="note_title" name="note_title" placeholder="Enter title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="desc" placeholder="Note Description"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <input type="file" class="" name="upload_pic" />
                                      </div>
                                      <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="add_photo">
                                    
                                   <?php
                                    $attrib = array('id' => 'form-upload');
                                    echo form_open_multipart('welcome/upload_photo', $attrib); ?>
                                    <!--<form method="post" id="form-upload" enctype="multipart/form-data" action='<?php echo base_url(); ?>index.php/ajaxupload/upload'>-->
                                        <div class="form-group">
        
                                            <input id="file-3"  name="userfile" type="file">
                                            <input type="hidden" name="user_id" id="user_id" value="<?=$uid?>" ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%">0%</div>
                                            </div>
            
                                            <div class="msg"></div>
                                        </div>
        
                                    <div class="form-group">
                                        <input  id="upload-btn" type="submit" class="btn btn-success" name = "submit" value="Upload Image" >
                                    </div>
        
                                </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="write_post">
                                    <form>
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="note_title" name="note_title" placeholder="Enter title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="desc" placeholder="Note Description"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <input type="file" class="" name="upload_pic" />
                                      </div>
                                      <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="write_social">
                                    <form>
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="note_title" name="note_title" placeholder="Enter title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="desc" placeholder="Note Description"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <input type="file" class="" name="upload_pic" />
                                      </div>
                                      <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>
                                    </form>
                                </div>
                              </div>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
             <?php foreach ($upload_data as $item):?>
                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
    
                    <span class="w3-right w3-opacity">1 min</span>
                    <h4>John Doe</h4>
                    <ul>
                        <li><a href="#">all posts</a></li>
                        <li><a href="#">Posts by user</a></li>
                        <li><a href="#">Posts by Others</a></li>
                    </ul>
                    <p>Today</p><br>
    
                    <hr class="w3-clear">
                    <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-half">
                            <img src="<?=$item['image'];?>" style="width:100%" alt="" class="w3-margin-bottom">
                        </div>
    
                    </div>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
                </div>
                            
            <?php endforeach; ?>
                            
            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">

                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4>
                <ul>
                    <li><a href="#">all posts</a></li>
                    <li><a href="#">Posts by user</a></li>
                    <li><a href="#">Posts by Others</a></li>
                </ul>
                <p>Today</p><br>

                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                    </div>

                </div>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">16 min</span>
                <h4>Jane Doe</h4>
                <ul>
                    <li><a href="#">all posts</a></li>
                    <li><a href="#">Posts by user</a></li>
                    <li><a href="#">Posts by Others</a></li>
                </ul>
                <p>Yestarday</p><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">32 min</span>
                <h4>Angie Jane</h4>
                <ul>
                    <li><a href="#">all posts</a></li>
                    <li><a href="#">Posts by user</a></li>
                    <li><a href="#">Posts by Others</a></li>
                </ul>
                <p>Previous</p><br>
                <hr class="w3-clear">
                <p>Have you seen this?</p>
                <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" style="width:100%" class="w3-margin-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>
             

        </div>

        <div class="w3-col m2">
            <div class="w3-card w3-round w3-white w3-center">
                <div class="w3-container">
                    <p>Advantage Rent a car</p>
                    <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt="Forest" style="width:100%;">
                    <p>

                        Demo text here. Demo text here.Demo text here.Demo text here.Demo text here.

                        Demo text here. Demo text here.Demo text here.Demo text here.Demo text here.
                    </p>
                    <!--<p>Friday 15:00</p>-->
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-down"></i> &nbsp;Unlike</button>
                </div>
            </div>
            <br>

            <div class="w3-card w3-round w3-white w3-center">
                <div class="w3-container">
                    <p>Advantage Rent a car</p>
                    <img src="<?=base_url()?>assets/img/default_avatar_male.jpg" alt="Forest" style="width:100%;">
                    <p>

                        Demo text here. Demo text here.Demo text here.Demo text here.Demo text here.

                        Demo text here. Demo text here.Demo text here.Demo text here.Demo text here.
                    </p>
                    <div class="w3-row w3-opacity">
                        <div class="w3-half">
                            <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                        </div>
                        <div class="w3-half">
                            <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
           

        </div>

    </div>

</div>
<br>

<footer class="w3-container  ">
    <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
</footer>


<?php $this->load->view('inc/footer'); ?>