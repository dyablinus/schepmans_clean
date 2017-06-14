
<script>

	$(document).ready(function() {
		
		$.post('<?php echo base_url();?>calendrier/getEvent',
			function(data){
				//alert(data);

				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,basicWeek,basicDay'
					},
					defaultDate: new Date(),
       			   selectable: true,
			       selectHelper: true,
			       select: function(start, end) {
				       var title = prompt('Event Title:');
				       var eventData;
					   if (title) {
						   eventData = {
							   title: title,
							   start: start,
						       end: end
							};
							$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
						}
						$('#calendar').fullCalendar('unselect');
					},					
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					businessHours: true,
					eventLimit: true, // allow "more" link when too many events
					editable: true,
					// events: $.parseJSON(data),
								events: [
				{
					title: 'Business Lunch',
					start: '2017-06-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2017-06-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2017-06-18',
					end: '2017-06-20'
				},
				{
					title: 'Party',
					start: '2017-06-29T20:00:00'
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2017-06-11T10:00:00',
					end: '2017-06-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2017-06-13T10:00:00',
					end: '2017-06-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2017-06-24',
					end: '2017-06-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2017-06-06',
					end: '2017-06-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			],
					eventDrop: function(event, delta, revertFunc){
						var id = event.id;
						var fi = event.start.format();
						var ff = event.end.format();

						if (!confirm("Esta seguro??")) {
							revertFunc();
						}else{
							$.post("<?php echo base_url();?>calendrier/updEvent",
							{
								id:id,
								fecini:fi,
								fecfin:ff
							},
							function(data){
								if (data == 1) {
									alert('Se actualizo correctamente');
								}else{
									alert('ERROR.');
								}
							});
						}
					},
					eventResize: function(event, delta, revertFunc) {
				        var id = event.id;
						var fi = event.start.format();
						var ff = event.end.format();

						if (!confirm("Esta seguro de cambiar la fecha?")) {
							revertFunc();
						}else{
							$.post("<?php echo base_url();?>calendrier/updEvent",
							{
								id:id,
								fecini:fi,
								fecfin:ff
							},
							function(data){
								if (data == 1) {
									alert('Se cambio correctamente');
								}else{
									alert('ERROR.');
								}
							});
						}
				    },
				    eventClick: function(event, jsEvent, view) {

				    	// alert(event.title);
				    	$('#mhdnIdEvento').val(event.id);
				    	$('#mtitulo').html(event.title);
				    	$('#txtBandaRP').val(event.title);
				    	$('#modalEvento').modal();

				    	if (event.url) {
				    		window.open(event.url);
				    		return false;
				    	}

				    },
				    eventRender: function(event, element) {
				        var el = element.html();
				        element.html("<div style='width:90%;float:left;'>" + el + "</div>" + 
						        	"<div style='color:red;text-align:right;' class='closeE'>" +
						        		"<i class='fa fa-trash'></i>" +
						        	"</div>");

				        element.find('.closeE').click(function(){
				        	if (!confirm("Voulez-vous supprimer cet évènement?")) {
								return false;
							}else{
								var id = event.id;
								$.post("<?php echo base_url();?>calendrier/deleteEvent",
								{
									id:id
								},
								function(data){
									alert(data);
									if (data == 1) {
										$('#calendar').fullCalendar( 'removeEvents', event.id);
										alert('Évènement supprimé');
									}else{
										alert('ERROR.');
									}
								});
					        	
					        }

				        });
				    }
					
				});
			});

		
		
	});

</script>

<script type="text/javascript">
	$('#btnUpdEvent').click(function(){
		var nome = $('#txtBandaRP').val();
		var web = $('#txtWeb').val();
		var ide = $('#mhdnIdEvento').val();

		$.post("<?php echo base_url();?>calendrier/updEvent2",
		{
			nom: nome,
			web: web,
			id: ide
		},
		function(data){
			if (data == 1) {
				$('#btnCerrarModal').click();
			}
		})
	})
</script>

	<div id='calendar'></div>


