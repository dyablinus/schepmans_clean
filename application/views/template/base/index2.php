<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de Françoise Schepmans retrouvez toute ses actualités et informations.
Ses evenements, Les membres de son équipes, ses actions de député et bourgmestre.">
    <meta name="author" content="Coddingschool">
    <meta name="robot" content="index, follow">
    <link rel="stylesheet" media="screen" href="<?= base_url ("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("node_modules/font-awesome/css/font-awesome.min.css") ?>">
  
    <link rel="stylesheet" href="<?= base_url("/assets/css/actualite.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/contact.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/equipe.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/fullcalendar/fullcalendar.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css")?>">

 <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

    <title>Françoise Schepmans femme politique belge, retrouvez toutes ses informations et contact</title>

</head>
<body style="background-image: linear-gradient(rgba(156, 156, 255, 0.19), white);">

<div style="background-color: white; box-shadow: -1em 0 125px black, 1em 0 125px black;" class="container">

<?php  $this->load->view('template/base/nav'); ?> 



<?= $view_content ?> 
</div>
 


<?php  $this->load->view('template/base/footer'); ?> 



<script>
$(document).ready(function(){

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>
<script>
    (function($){
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
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					editable: true,
					events: $.parseJSON(data),
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
				        	if (!confirm("Esta seguro de eliminar el evento?")) {
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
										alert('Se elimino correctamente');
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
})(jQuery);
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
 <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<script src='<?php echo base_url();?>assets/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>assets/fullcalendar/fullcalendar.min.js'></script>
<script src='<?php echo base_url();?>assets/fullcalendar/locale/fr.js'></script>

</body>
</html>
        <!-- Page Content Slider -->
           