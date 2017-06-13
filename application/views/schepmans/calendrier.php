	<script>
    
    $(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2017-06-12',
			navLinks: true, // can click day/week names to navigate views
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
		    businessHours: true, // display business hours
			editable: true,
			eventLimit: true, // allow "more" link when too many events
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
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}


</style>
</head>
<body>

	<div id='calendar'></div>



