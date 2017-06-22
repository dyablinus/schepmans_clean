
<!-- Left col -->
<section class="col-lg-10 col-lg-offset-1 connectedSortable">


    <div id="calendar">

    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendrier/add_event"), array("class" => "form-horizontal")) ?>
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
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="datepicker">
              
                   <script>
                   $( function() {
                   $( "#datepicker" ).datetimepicker();
                    } );
                 </script>
                
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="datepicker2">

                   <script>
                   $( function() {
                   $( "#datepicker2" ).datetimepicker();
                    } );
                 </script>

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

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendrier/edit_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date">

                   <script>
                   $( function() {
                   $( "#start_date" ).datetimepicker();
                    } );
                 </script>

                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date">

                   <script>
                   $( function() {
                   $( "#end_date" ).datetimepicker();
                    } );
                 </script>
                    
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
    
<script type="text/javascript">
$(document).ready(function() {
var data;
    var date_last_clicked = null;

    $('#calendar').fullCalendar({
				header: {
				left: 'prev,next today',
				center: 'title',					
                right: 'month,basicWeek,basicDay'
					},
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					businessHours: true,
					eventLimit: true, // allow "more" link when too many events
					editable: true,
       	            selectable: true,
		            selectHelper: true,               
        eventSources: [
           {
           events: function(start, end, timezone, callback) {
                $.ajax({
                    url: '<?php echo base_url() ?>calendrier/get_events',
                    dataType: 'json',
                    data: {
                        // our hypothetical feed requires UNIX timestamps
                        start: start.unix(),
                        end: end.unix()
                    },
                    success: function(msg) {
                       
                        data = msg.events;
                        
                        callback(data);
                    }
                });
              }
            },
        ],
        dayClick: function(date, jsEvent, view) {
            date_last_clicked = $(this);
            $(this).css('background-color', '#bed7f3');
            $('#addModal').modal();
        },
       eventClick: function(event, jsEvent, view) {
          $('#name').val(event.title);
          $('#description').val(event.description);
          $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          if(event.end) {
            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
          } else {
            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();
       },


    });
});
</script>


 </section>
 <!-- /.content -->
