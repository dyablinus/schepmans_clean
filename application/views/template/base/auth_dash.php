<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" media="screen" href="<?= base_url("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url("/assets/timepicker/dist/jquery-ui-timepicker-addon.css")?>">
  <link rel="stylesheet" href="<?= base_url("/assets/fullcalendar/fullcalendar.css")?>">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("/assets/dist/css/AdminLTE.min.css")?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url("/assets/dist/css/skins/_all-skins.min.css")?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url("/assets/plugins/morris/morris.css")?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url("/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css")?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url("/assets/plugins/datepicker/datepicker3.css")?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url("/assets/plugins/daterangepicker/daterangepicker.css")?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url("/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")?>">


      <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>




  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?= base_url("#")?>" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?= base_url("/auth")?>" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                <p>
                   Er Mustafa - Administrateur 
                  <small>Responsable communication commune de Molenbeek-Saint-Jean</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="pull-left">
                  <!--<a href="<?= base_url("#")?>" class="btn btn-default btn-flat">Profile</a>-->
                </div>
                <div class="pull-right">
                  <a href="<?= base_url("/auth/logout")?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li style="font-size:20px">
          <a href="<?= base_url("/auth/index")?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/calendrier")?>">
            <i class="fa fa-calendar"></i> <span>Calendrier</span>

          </a>
        </li>
        
        <li style="font-size:20px">
          <a href="<?= base_url("/newsletter")?>">
            <i class="fa fa-envelope"></i> <span>Newsletter</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/edit/show_all")?>">
            <i class="fa fa-pencil-square-o"></i> <span>Modifier articles</span>
          </a>
        </li>

        <li style="font-size:20px">
          <a href="<?= base_url("/edit")?>">
            <i class="fa fa-files-o"></i> <span>Ajouter un article</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $this->db->count_all('pb_user');?></h3>

              <p>Inscrits à la newsletter</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    <!-- Main row -->
  <div class="row">

     <?= $view_content ?> 

  </div>
  <!-- /.content-wrapper -->





  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Design by </b>
    </div>
    <strong>Copyright &copy; 2017<a href="https://molengeek.com/">Molengeek</a>.</strong> All rights
    reserved.
  </footer>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
 <script src="<?= base_url("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?= base_url("/assets/plugins/morris/morris.min.js") ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url("/assets/plugins/sparkline/jquery.sparkline.min.js")?>"></script>
<!-- jvectormap -->
<script src="<?= base_url("/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")?>"></script>
<script src="<?= base_url("/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url("/assets/plugins/knob/jquery.knob.js")?>"></script>


<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url("/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")?>"></script>
<!-- Slimscroll -->
<script src="<?= base_url("/assets/plugins/slimScroll/jquery.slimscroll.min.js")?>"></script>
<!-- FastClick -->
<script src="<?= base_url("/assets/plugins/fastclick/fastclick.js")?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url ("/assets/dist/js/adminlte.min.js")?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url ("/assets/dist/js/pages/dashboard.js")?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url ("/assets/dist/js/demo.js")?>"></script>


<script src='<?php echo base_url();?>assets/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>assets/fullcalendar/fullcalendar.min.js'></script>
<script src='<?php echo base_url();?>assets/fullcalendar/locale/fr.js'></script>
<script src='<?php echo base_url();?>assets/timepicker/dist/jquery-ui-timepicker-addon.js'></script>
<script src='<?php echo base_url();?>assets/timepicker/dist/i18n/jquery-ui-timepicker-addon-i18n.min.js'></script>
<script src='<?php echo base_url();?>assets/timepicker/dist/jquery-ui-sliderAccess.js'></script>
</body>
</html>
