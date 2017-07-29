
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
        
          <!-- TO DO List -->


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">

          <!-- Calendar -->

        <div id="calendrier">

       </div>

          <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="eventModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="eventModal">Update Calendar Event</h4>
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
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date">
                </div>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
var data;
    var date_last_clicked = null;

    $('#calendrier').fullCalendar({
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
                    url: '<?php echo base_url() ?>evenement/get_events',
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
          $('#viewModal').modal();
       },


    });
});
</script>



    </section>
    <!-- /.content -->
