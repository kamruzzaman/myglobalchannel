<?php $this->load->view('inc/header')?>



<div style="margin: auto; width: 80%" >
    <section class="slider_area">
        <ul class="slider content">
            <?php foreach ($get_slider as $i => $banner) { ?>
            
                <li><img src="<?=base_url($banner['slider_img'])?>" alt=""><title><?= $banner['slider_title']?></title></li>
           <?php }
            ?>
        </ul>
    </section>
    <section class="slider_areaa">
        <ul class="slider content" style="margin-top: 5%">
           <?php foreach ($get_rotor as  $small_banner) { ?>
            
                <li><img src="<?=base_url($small_banner['img_name'])?>" alt=""></li>
           <?php }
            ?>
        </ul>
    </section>
   

    <section class="new content_area clearfix">
        <div class="left_content">
            
            <h3> Notice</h3>
             <?php
             $i= 1;
                foreach($get_notice as $notice){ ?>
                
                    <p><?= $i.' . '.$notice['notice_description'];?></p>
                   
              <?php   $i++; }
              
            ?>
        </div>

        <div class="right_content">
            <div id="calendar"></div>
        </div>
    </section>
    <footer class="w3-container  ">
        <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
    </footer>
</div>

<?php $this->load->view('inc/footer')?>
