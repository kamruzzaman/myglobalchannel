<?php $this->load->view('user/inc/dashboard_header'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event
        <small>Event panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('user') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Event</li>
      </ol>
    </section>

    <!-- Main content -->
		
<style>
    .modal-header{
        display: inline-block;
    }
</style>



<section class="content">
    <div class="row">
        <div class="col-lg-3 col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events" >
                <div class="external-event text-green dot-outline" data-class="bg-green"><i class="fa fa-hand-o-right"></i>Lunch</div>
                <div class="external-event text-yellow dot-outline" data-class="bg-yellow"><i class="fa fa-hand-o-right"></i>Go home</div>
                <div class="external-event text-aqua dot-outline" data-class="bg-aqua"><i class="fa fa-hand-o-right"></i>Do homework</div>
                <div class="external-event text-purple dot-outline" data-class="bg-purple"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
                <div class="external-event text-red dot-outline" data-class="bg-red"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
              </div>
              <div class="event-fc-bt">
                <!-- checkbox -->
				<div class="checkbox margin-top-20">
					<input id="drop-remove" type="checkbox">
					<label for="drop-remove">
						Remove after drop
					</label>
				</div>
             	<a href="#" data-toggle="modal" data-target="#add-new-events" class="btn btn-lg btn-success btn-block margin-top-10">
					<i class="ti-plus"></i> Add New Event
				</a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-md-12">
          <div class="box">
            <div class="box-body">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- BEGIN MODAL -->
		<div class="modal none-border" id="my-event">
			<div class="modal-dialog">
				 <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open(base_url("user/add_event"), array("class" => "form-horizontal")) ?>
                        <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                            <div class="col-md-8 ui-front">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Description</label>
                            <div class="col-md-8 ui-front">
                                <input type="text" class="form-control" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 label-heading">Start Date</label>
                            <div class="col-md-8 ui-front">
                                <div class="controls input-append date form_date" data-date="" data-date-format="yyyy/mm/dd H:i p" data-link-field="start_date">
                                    
                                    <input type="text" class="form-control" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
    					            <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                				<input type="hidden" id="start_date" name="start_date" value="" />
                            </div>
                                
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 label-heading">End Date</label>
                            <div class="col-md-8 ui-front">
                                <div class="controls input-append date form_date" data-date="" data-date-format="yyyy/mm/dd H:i p" data-link-field="end_date">
                                    
                                    <input type="text" class="form-control" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
    					            <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                				<input type="hidden" id="end_date" name="end_date" value="" />
                            </div>
                                
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add Event">
                        <?php echo form_close() ?>
                    </div>
                </div>
			</div>
		</div>
		<!-- Modal Add Category -->
		<div class="modal fade none-border" id="add-new-events">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>Add</strong> a category</h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Category Name</label>
									<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
								</div>
								<div class="col-md-6">
									<label class="control-label">Choose Category Color</label>
									<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
										<option value="success">Success</option>
										<option value="danger">Danger</option>
										<option value="info">Info</option>
										<option value="primary">Primary</option>
										<option value="warning">Warning</option>
										<option value="inverse">Inverse</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
						<button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
			<div class="modal none-border" id="edit-event">
			<div class="modal-dialog">
				 <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Calendar Event</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open(base_url("#"), array("class" => "form-horizontal", 'id' => 'edit_events')) ?>
                        <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                            <div class="col-md-8 ui-front">
                                 <input type="text" class="form-control" name="name" value="" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Description</label>
                            <div class="col-md-8 ui-front">
                                <input type="text" class="form-control" name="description" value="" id="description">
                            </div> 
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 label-heading">Start Date</label>
                            <div class="col-md-8 ui-front">
                                <div class="controls input-append date form_date" data-date="" data-date-format="yyyy/mm/dd H:i p" data-link-field="start_dates">
                                    
                                    <input type="text" class="form-control" id="st_date" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
    					            <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                				<input type="hidden" id="start_dates" name="start_dates" value="" />
                            </div>
                                
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 label-heading">End Date</label>
                            <div class="col-md-8 ui-front">
                                <div class="controls input-append date form_date" data-date="" data-date-format="yyyy/mm/dd H:i p" data-link-field="end_dates">
                                    
                                    <input type="text" class="form-control" id="ed_date" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
    					            <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                				<input type="hidden" id="end_dates" name="end_dates" value="" />
                            </div>
                                
                        </div>
                        <input type="hidden" name="eventid" id="event_id" value="0" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Edit Event">
                        <?php echo form_close() ?>
                    </div>
                </div>
			</div>
		</div>
    </div>
</section>
    
    
    

    <?php $this->load->view('user/inc/dashboard_footer'); ?>
  