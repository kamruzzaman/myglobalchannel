<?php $this->load->view('inc/header'); ?>

<div class="container_body">
    
    <?php  $users= get_user_by_id($post['user_id']);$category = get_category_by_id($post['category_id']); ?>
    <div class="row" style="padding:15px;">
        
        <div class="leftcolumn">
            
            <div class="card">
                <h2><?= ucfirst($post['post_title']) ?></h2>
                <h5>Posted On, <?=  $your_format = date("M j , Y", strtotime($post['post_date']));?> In <strong><?= $users['first_name'] ?></strong></h5>
               
                <div class="fakeimg">
                    <img src="<?= base_url('blogimage/'.$post['post_img'])?>" />
                </div>
                <p><?= $post['post_subtitle'] ?></p>
                <p><?= $post['post_desc']; ?></p>
                <p><strong>Category: </strong> <?= $category['category_name']; ?></p>
            </div>
            <h3>Comments</h3>
            <?php if($comments) : ?>
            	<?php foreach($comments as $comment) : ?>
            		<div class="well">
            			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
            		</div>
            	<?php endforeach; ?>
            <?php else : ?>
            	<p>No Comments To Display</p>
            <?php endif; ?>
            <hr>
            <h3>Add Comment</h3>
            <?php  
            $user_data = $this->session->userdata('user_info');
            $get_email = get_user_email($user_data['user_id']);
            
            ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('comment/create');?>
            	<div class="form-group">
            		<label>Name</label>
            		<input type="text" name="name" class="form-control">
            	</div>
            	<div class="form-group">
            		<label>Email</label>
            		<input type="text" name="email" class="form-control">
            	</div>
            	<div class="form-group">
            		<label>Body</label>
            		<textarea name="body" class="form-control"></textarea>
            	</div>
            	<input type="hidden" name="post_id" value="<?= $post['id']; ?>" />
            	<button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
       
    </div>

    <footer class="w3-container  ">
        <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
    </footer>

<?php $this->load->view('inc/footer'); ?>
