
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
        
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="<?= base_url("#")?>">&laquo;</a></li>
                  <li><a href="<?= base_url("#")?>">1</a></li>
                  <li><a href="<?= base_url("#")?>">2</a></li>
                  <li><a href="<?= base_url("#")?>">3</a></li>
                  <li><a href="<?= base_url("#")?>">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->

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
