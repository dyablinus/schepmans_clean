<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="<?= base_url ("assets/css/navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("node_modules/font-awesome/css/font-awesome.min.css") ?>">
    <title>Appland - One Page Parallax</title>

    <!-- Favicon -->
 
 <!-- Latest compiled and minified CSS & JS -->
 <link rel="stylesheet" media="screen" href="<?= base_url ("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">

<link rel="stylesheet" href="<?= base_url("/assets/twitter.css")?>">
 <link rel="stylesheet" href="<?= base_url ("assets/css/navbar.css") ?>">
  <link rel="stylesheet" type="text/css" media="all" href="<?= ("/vendor/carousel/style.css")?>"/>

  <link rel='stylesheet' id='css_flexslider-css' href='http://politic.webtemplatemasters.com/wp-content/themes/politician__/sliders/flexslider/flexslider.css?ver=4.3.10'
        type='text/css' media='all' />

    <!-- HTML5 Shiv -->
</head>
<body

<div class="container">
<?php  $this->load->view('template/base/nav'); ?> 
<?php $this->load->view('template/base/navdroit');?>


</div>
<div class="container">  
<?= $view_content ?> 
</div>
    






    <script type="text/javascript" src="http://politic.webtemplatemasters.com/wp-content/themes/politician__/js/modernizr.custom.js"></script>
    <script>
        window.jQuery || document.write('<script src="http://politic.webtemplatemasters.com/wp-content/themes/politician__/js/jquery-1.7.1.min.js"><\/script>')
    </script>

 <script src="<?= base_url ("/node_modules/jquery/dist/jquery.js") ?>"></script>
 <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script type='text/javascript' src='http://politic.webtemplatemasters.com/wp-includes/js/comment-reply.min.js?ver=4.3.10'></script>
    <script type='text/javascript' src='http://politic.webtemplatemasters.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.40.0-2013.08.13'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpcf7 = { "loaderUrl": "http:\/\/politic.webtemplatemasters.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif", "sending": "Sending ..." };
/* ]]> */

    </script>
    <script type='text/javascript' src='http://politic.webtemplatemasters.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.5.2'></script>
    <script type='text/javascript' src='http://politic.webtemplatemasters.com/wp-content/themes/politician__/sliders/flexslider/jquery.flexslider-min.js?ver=4.3.10'></script>
    <script type='text/javascript' src='http://politic.webtemplatemasters.com/wp-content/themes/politician__/js/custom.js?ver=1.0.0'></script>



    <script type="text/javascript">
        if (jQuery('.single-image').length) { }
        jQuery('body').addClass('style-1');

    </script>
</body>
</html>
        <!-- Page Content Slider -->
           