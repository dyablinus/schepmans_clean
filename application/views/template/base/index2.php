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

    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css")?>">
<<<<<<< HEAD
    <link rel='stylesheet' href="<?= base_url("/node_modules/fullcalendar/dist/fullcalendar.css") ?>">
=======
    <title>Françoise Schepmans siteweb, contact et informations.</title>
>>>>>>> 4724b18f3c01af40ae630be3ad246ee2a4e140ff

    <title>Schepmans</title>

</head>
<body>

<div class="container">
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
           