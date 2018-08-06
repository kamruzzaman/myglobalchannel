</div>
  <!-- /.content-wrapper -->
<!--  <footer class="main-footer">-->
<!--    <div class="pull-right d-none d-sm-inline-block">-->
<!--       -->
<!--    </div>-->
<!--	  &copy; --><?php //echo date('Y');?><!-- <a href="#">Yolo Rides London </a>. All Rights Reserved.-->
<!--  </footer>-->
<footer class="w3-container  ">
    <div class=" w3-center w3-padding-24">Powered by <a href="http://brainlabs.com.bd/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Brainlabs</a></div>
</footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->

</div>
<!-- ./wrapper -->
  	
	 <script>
	     var base_url = '<?=base_url()?>';
	      var csrf_name = '<?=$this->security->get_csrf_token_name()?>';
	 </script>
	  
	<!-- jQuery 3 -->
	<script src="<?=base_url()?>assets/js/jquery.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="<?=base_url()?>assets/js/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>	
<!--	<script src="--><?//=base_url()?><!--assets/js/bootstrap-datepicker.js"></script>-->

	
<!--	 <script src="--><?//=base_url()?><!--assets/js/jquery.dataTables.min.js"></script>-->


	<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<!--		  <script src="--><?//=base_url()?><!--assets/js/sweetalert.min.js"></script>-->
<!--    <script src="--><?//=base_url()?><!--assets/js/jquery.sweet-alert.custom.js"></script>-->
<!--    <script src="--><?//=base_url()?><!--assets/js/sweetalert-dev.js"></script>-->
<!--	<!-- FastClick -->
<!--	<script src="--><?//=base_url()?><!--assets/js/fastclick.js"></script>-->



	<!-- MinimalPro Admin App -->
	<script src="<?=base_url()?>assets/js/template.js"></script>
	<script>
	    var post_tbl = '';
	    $(document).ready(function(){
	         post_tbl = $('#post_tbl').DataTable({
                'ajax' : base_url+'user/get_all_post',
        		'order': [[ 3, 'desc' ]]
            });
            
	    });
	    function deleteuserPost(evt){
            var id = $(evt).data('id');
            $.ajax({
        		url: base_url+"user/delete_post/"+id,
        		success:function(response){
        			console.log(response);
        			post_tbl.ajax.reload();
        		}
        	});
        }
	</script>
	
</body>
</html>