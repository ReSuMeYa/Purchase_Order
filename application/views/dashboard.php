<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $this->lang->line('titlev'); echo ' '.$this->lang->line('numberv'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/Ionicons/css/ionicons.min.css'; ?>">
    <!-- Morris charts -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/morris.js/morris.css';?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/AdminLTE.min.css'; ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/skins/_all-skins.min.css'; ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
    <!-- Css Modifly -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css_modifly/css_show_all.css'; ?>">    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        <?php echo $this->lang->line('Dashboard'); ?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('index.php/Dashboard/Dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo $this->lang->line('Dashboard'); ?></a></li>
        </ol>
      </section>
      <!-- Main content -->
<!--       <section class="content">
      <div class="row">
      <div class="col-md-12">  
      <div class="box box-success">
          <div class="box-header with-border">
          <h3 class="box-title">PR IN <?php echo date('Y m d '."l"); ?> </h3>
      </div>
        <div class="box-body">
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">ALL</span>
        <div class="info-box-content">
          <span class="info-box-text">ALL PR</span>
          <span class="info-box-number"><?php echo $alltoday; ?> PR</span>
        </div>
      </div>      
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">HOD</span>
        <div class="info-box-content">
          <span class="info-box-text">HOD APV</span>
          <span class="info-box-number"><?php echo $hodtoday; ?> PR</span>
        </div>
      </div>       
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">AC</span>
        <div class="info-box-content">
          <span class="info-box-text">AC APV</span>
          <span class="info-box-number"><?php echo $actoday; ?> PR</span>
          <span class="info-box-number"><?php echo $actodayno; ?> wait approve</span> 
        </div>
      </div>       
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">GM</span>
        <div class="info-box-content">
          <span class="info-box-text">GM APV</span>
          <span class="info-box-number"><?php echo $gmtoday; ?> PR</span>
          <span class="info-box-number"><?php echo $gmtodayno; ?> wait approve</span> 
        </div>
      </div>       
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">EFC</span>
        <div class="info-box-content">
          <span class="info-box-text">EFC</span>
          <span class="info-box-number"><?php echo $efctoday; ?> PR</span>
          <span class="info-box-number"><?php echo $efctodayno; ?> wait approve</span>
        </div>
      </div>       
      </div>
      </div>
        </div>
      </div>
      </div>
      </div>
      </section>

      <section class="content">
      <div class="row">
      <div class="col-md-12">  
      <div class="box box-success">
          <div class="box-header with-border">
          <h3 class="box-title">PR Mouth  <?php echo date('M Y'); ?></h3>
      </div>
        <div class="box-body">
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">ALL</span>
        <div class="info-box-content">
          <span class="info-box-text">ALL PR</span>
          <span class="info-box-number"><?php echo $allmouth; ?> PR</span>
        </div>
      </div>      
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">HOD</span>
        <div class="info-box-content">
          <span class="info-box-text">HOD APV</span>
          <span class="info-box-number"><?php echo $hodmouth; ?> PR</span>
        </div>
      </div>       
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">AC</span>
        <div class="info-box-content">
          <span class="info-box-text">AC APV</span>
          <span class="info-box-number"><?php echo $acmouth; ?> PR</span>
          <span class="info-box-number"><?php echo $acmouthno; ?> wait approve</span>

        </div>
      </div>       
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">GM</span>
        <div class="info-box-content">
          <span class="info-box-text">GM APV</span>
          <span class="info-box-number"><?php echo $gmmouth; ?> PR</span>
          <span class="info-box-number"><?php echo $gmmouthno; ?> wait approve </span>
        </div>
      </div>       
      </div>
      <div class="col-md-2">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">EFC</span>
        <div class="info-box-content">
          <span class="info-box-text">EFC</span>
          <span class="info-box-number"><?php echo $efcmouth; ?> PR</span>
          <span class="info-box-number"><?php echo $efcmouthno; ?> wait approve </span>
        </div>
      </div>       
      </div>
      </div>
        </div>
      </div>
      </div>
      </div>
      </section> -->


      <section class="content">
      <div class="row">
      <div class="col-md-12">  
      <div class="box box-success">
          <div class="box-header with-border">
          <h3 class="box-title">PR Wait Apporve </h3>
      </div>
        <div class="box-body">
      <div class="row">  
      <div class="col-md-4">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">AC</span>
        <div class="info-box-content">
          <span class="info-box-text">AC APV</span>
          <span class="info-box-number"><?php echo $acnoapp; ?> wait approve
          </span>
        </div>
      </div>       
      </div>
      <div class="col-md-4">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">GM</span>
        <div class="info-box-content">
          <span class="info-box-text">GM APV</span>
          <span class="info-box-number"><?php echo $gmnoapp; ?> wait approve</span>
        </div>
      </div>       
      </div>
      <div class="col-md-4">
      <div class="info-box">
        <span class="info-box-icon bg-aqua">EFC</span>
        <div class="info-box-content">
          <span class="info-box-text">EFC</span>
          <span class="info-box-number"><?php echo $efcnoapp; ?> wait approve</span>
   
        </div>
      </div>       
      </div>
      </div>
        </div>
      </div>
      </div>
      </div>
      </section>

      <!-- /.content-wrapper -->
    </div>



    <!-- DataTables -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" ></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
    <!-- charts -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/Chart.js/Chart.js';?>"></script>
    <!-- Dashboard Modifiy -->
    <script type="text/javascript" src="<?php echo base_url().'/assets/js_modifly/dashdoard.js'; ?>"></script>
  </body>
</html>