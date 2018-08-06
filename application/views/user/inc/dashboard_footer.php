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
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="<?=base_url()?>assets/js/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>	

	
	 <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>


	<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<!--		  <script src="--><?//=base_url()?><!--assets/js/sweetalert.min.js"></script>-->
<!--    <script src="--><?//=base_url()?><!--assets/js/jquery.sweet-alert.custom.js"></script>-->
<!--    <script src="--><?//=base_url()?><!--assets/js/sweetalert-dev.js"></script>-->
	<!-- FastClick -->
<!--	<script src="--><?//=base_url()?><!--assets/js/fastclick.js"></script>-->


    <!-- fullCalendar -->
	<script src="<?= base_url()?>assets/js/moment.js"></script>
	<script src="<?= base_url()?>vendor/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?= base_url()?>assets/datepicker/js/bootstrap-datetimepicker.js"></script>
	<script src="<?= base_url()?>assets/datepicker/js/locales/bootstrap-datetimepicker.ua.js"></script>
	
	<!-- MinimalPro Admin for calendar -->
	<!--<script src="<?= base_url()?>assets/js/calendar.js"></script>-->
	<!-- MinimalPro Admin App -->
	<script src="<?=base_url()?>assets/js/template.js"></script>
	<script>
	var notice_tbl = '';
	var slider_tbl = '';
	var rotor_tbl = '';
	var category_tbl = '';
	var post_tbl = '';
	var album_tbl = '';
	var date_last_clicked = null;

	    $(document).ready(function(){
	        notice_tbl = $('#notice_tbl').DataTable({
                'ajax' : base_url+'user/get_all_notice',
        		'order': [[ 3, 'desc' ]]
            });
            slider_tbl = $('#slider_tbl').DataTable({
                'ajax' : base_url+'user/get_all_slider',
        		'order': [[ 3, 'desc' ]]
            });
            rotor_tbl = $('#rotor_tbl').DataTable({
                'ajax' : base_url+'user/get_all_rotor',
        		'order': [[ 3, 'desc' ]]
            });
            category_tbl = $('#category_tbl').DataTable({
                'ajax' : base_url+'user/get_all_category',
        		'order': [[ 3, 'desc' ]]
            });
            post_tbl = $('#post_tbl').DataTable({
                'ajax' : base_url+'user/get_all_post',
        		'order': [[ 3, 'desc' ]]
            });
            album_tbl = $('#album_tbl').DataTable({
                'ajax' : base_url+'user/get_album_list',
                'order':[[3, 'desc']]
            });
            $('#calendar').fullCalendar({
                 header: {
                    left: 'prev,next today',
                    center: 'Event Calendar',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                  },
                eventSources: [
                     {
                         events: function(start, end, timezone, callback) {
                             $.ajax({
                             url: '<?=base_url()?>user/get_events',
                             dataType: 'json',
                             data: {
                             // our hypothetical feed requires UNIX timestamps
                             start: start.unix(),
                             end: end.unix()
                             },
                             success: function(msg) {
                                 var events = msg.events;
                                 callback(events);
                             }
                             });
                         }
                     },
                 ],
                 dayClick: function(date, jsEvent, view) {
                    date_last_clicked = $(this);
                    $(this).css('background-color', '#bed7f3');
                    $('#my-event').modal();
                },
                eventClick: function(event, jsEvent, view) {
                    console.log(event.start);
                    $('#name').val(event.title);
                    $('#description').val(event.description);
                    $('#st_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                    $('#ed_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
                    $('#event_id').val(event.id);
                    $('#edit-event').modal();
        },
             });
             $('#edit_events').on('submit', function(e){
                    var postingData = $( this ).serializeArray();
                    e.preventDefault();
                
                    $.ajax({
                    url: '<?=base_url()?>user/edit_event',
                        type: "POST",
                        data: postingData,
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $('#edit_events')[0].reset();
                            $('#edit-event').modal('hide');
                            window.location.reload()
                        }
                    });
             });
             $('.form_date').datetimepicker({
               weekStart: 1,
                todayBtn:  1,
        		autoclose: 1,
        		todayHighlight: 1,
        		startView: 2,
        		forceParse: 0,
                showMeridian: 1
            });
	    });
	    function deleteNotice(evt){
        	var id = $(evt).data('id');
        	$.ajax({
        		url: base_url+"user/delete_Notice/"+id,
        		success:function(response){
        			
        			notice_tbl.ajax.reload();
        		}
        	});
        
        }
        function deleteSlider(evt){
        	var id = $(evt).data('id');
        	$.ajax({
        		url: base_url+"user/delete_Slider/"+id,
        		success:function(response){
        			console.log(response);
        			slider_tbl.ajax.reload();
        		}
        	});
        
        }
        function deleteRotor(evt){
        	var id = $(evt).data('id');
        	$.ajax({
        		url: base_url+"user/delete_rotor/"+id,
        		success:function(response){
        			console.log(response);
        			rotor_tbl.ajax.reload();
        		}
        	});
        
        }
        function deleteCategory(evt){
            var id = $(evt).data('id');
            $.ajax({
        		url: base_url+"user/delete_category/"+id,
        		success:function(response){
        			console.log(response);
        			category_tbl.ajax.reload();
        		}
        	});
        }
        function deletePost(evt){
            var id = $(evt).data('id');
            $.ajax({
        		url: base_url+"user/delete_post/"+id,
        		success:function(response){
        			console.log(response);
        			post_tbl.ajax.reload();
        		}
        	});
        }
        function deleteAlbum(evt){
            var id = $(evt).data('id');
            $.ajax({
        		url: base_url+"user/delete_album/"+id,
        		success:function(response){
        			console.log(response);
        			album_tbl.ajax.reload();
        		}
        	});
        }
        function changeStatus(evt){

        	var status = $(evt).val();
        	var id = $(evt).data('id');
        	
        	$.ajax({
        		url: base_url+"user/editPostStatus",
        		data: {id: id, status: status},
        		success: function(response){
        			console.log(response);
        			post_tbl.ajax.reload();
        		}
        	});


        }
	</script>
	
</body>
</html>
