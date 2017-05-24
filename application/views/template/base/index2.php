<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" media="screen" href="<?= base_url ("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("node_modules/font-awesome/css/font-awesome.min.css") ?>">

  
    <link rel="stylesheet" href="<?= base_url("/assets/css/actualite.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/contact.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css")?>">
    <link rel='stylesheet' href="<?= base_url("/node_modules/fullcalendar/dist/fullcalendar.css") ?>">

    <title>Schepmans</title>

</head>
<body style="background-image: linear-gradient(rgba(156, 156, 255, 0.19), white);">

<div style="background-color: white; box-shadow: -1em 0 125px black, 1em 0 125px black;" class="container">
<?php  $this->load->view('template/base/nav'); ?> 



<?= $view_content ?> 
</div>
 


<?php  $this->load->view('template/base/footer'); ?> 

 <script src="<?= base_url ("/node_modules/jquery/dist/jquery.min.js") ?>"></script>
 <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<script src="<?= base_url ("/node_modules/fullcalendar/dist/moment.min.js")?>"></script>
<script src="<?= base_url("/node_modules/fullcalendar/dist/fullcalendar.js")?>"></script>
<script>
$(document).ready(function(){

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>
</body>
</html>
        <!-- Page Content Slider -->
           