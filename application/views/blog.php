<?php $this->load->view('inc/header'); ?>

<div class="container_body">
    <div class="header">
        <h2>Blog Name</h2>
    </div>

    <div class="row" style="padding:15px;">
        
        <div class="leftcolumn">
            <?php foreach($posts as $post){
                $users= get_user_by_id($post['user_id']);
               
        ?>
            <div class="card">
                <h2><?= ucfirst($post['post_title']) ?></h2>
                <h5>Posted On, <?=  $your_format = date("M j , Y", strtotime($post['post_date']));?> In <strong><?= $users['first_name'] ?></strong></h5>
               
                <div class="fakeimg">
                    <img src="<?= base_url('blogimage/'.$post['post_img'])?>" />
                </div>
                <p><?= $post['post_subtitle'] ?></p>
                <p><?php echo word_limiter($post['post_desc'], 60); ?></p>
                <p><a class="btn btn-default" href="<?php echo base_url('welcome/view_post/'.$post['id']); ?>">Read More</a></p>
            </div>
             <?php } ?>
        </div>
       
        <div class="rightcolumn">
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>
        </div>
        <div class="pagination-links">
        	<?php echo $this->pagination->create_links(); ?>
        </div>
    </div>

    <footer class="w3-container  ">
        <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
    </footer>

<?php $this->load->view('inc/footer'); ?>
