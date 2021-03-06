<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($this->session->username)) {
  redirect('', 'refresh');
}
if ($this->session->lang == 'english') {
  $this->lang->load('message','english');
}else{
  $this->lang->load('message','thai');
}
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
    <!-- Alertify -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/alertify/css/alertify.min.css'; ?>" />
    <!-- Morris charts -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/morris.js/morris.css';?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/AdminLTE.min.css'; ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/skins/_all-skins.min.css'; ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/responsive1.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/responsive2.css'; ?>">
    <!-- Css Modifly -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css_modifly/css_show_all.css'; ?>">    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        <?php echo $this->lang->line('settinguser'); ?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('index.php/Usersetting/Settinguser'); ?>"><i class="fa fa-dashboard"></i> <?php echo $this->lang->line('settinguser'); ?></a></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12 col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
            <div class="table-responsive">  
              <table id="tableusersetting" cellspacing="0" width="100%" class="table table-bordered table-striped table-hover responsive table-condensed table-stripedstyle">
              <thead>  
                <tr align="center">
                  <th>Username</th>
                  <th>Fname</th>
                  <th>Lname</th>
                  <th>Type</th>
                  <th>Email</th>
                  <th>Department</th>
                  <th>Lang</th>
                  <th>Hod Img</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($user as $row) {

                ?>
                <tr align="center">
                  <td><?php echo  $row->username; ?></td>
                  <td><?php echo  $row->fname; ?></td>
                  <td><?php echo  $row->lname; ?></td>
                  <td><?php echo  $row->type; ?></td>
                  <td><?php echo  $row->email; ?></td>
                  <td><?php echo  $row->dep; ?></td>
                  <td><?php echo  $row->lang; ?></td>
                  <td>
                  <?php  
                  if ($row->type=='user') {
                  	echo '<span class="label label-warning">User</span>';
                  }elseif ($row->type=='accounting0' OR $row->type=='accounting') {
                  	echo '<span class="label label-warning">AC</span>';
                  }elseif ($row->type=='approval' AND $row->username=='Nalinee') {
                  	echo '<span class="label label-primary">EFC</span>';
                  }elseif ($row->type=='approval' AND $row->username=='Somkhit') {
                  	echo '<span class="label label-primary">GM</span>';
                  }elseif ($row->type=='hod' AND $row->signature_img=='') {
                  	echo '<span class="label label-danger">ไม่มีลายเซ็น</span>';
                  }elseif ($row->type=='hod' AND $row->signature_img!='') {
                  	echo '<span class="label label-success">มีลายเซ็น</span>';
                  }elseif ($row->type=='admin') {
                  	echo '<span class="label label-warning">Admin</span>';
                  }
                  ?>	
                  </td>
                  <td>
                    <button class="btn btn-sm btn-warning" primary="<?php echo  $row->username; ?>" onclick="editdata(this);">แก้ไข</button>
                    <?php  
                    if ($row->type =='hod' AND $row->signature_img=='') {
                    	echo '<input type="hidden" id="saveimgin" data-toggle="modal" data-target="#saveimg">';
                    	echo '<button class="btn btn-sm btn-success" primary="'.$row->username.'" onclick="saveimg(this);">รูป</button>';
                    }if ($row->type =='hod' AND $row->signature_img!='') {
                      echo '<button class="btn btn-sm btn-primary" primary="'.$row->username.'" onclick="deleteimg(this);">เปลี่ยน</button>';
                    }
                    ?>
                    <input type="hidden" id="showeditdatauser" data-toggle="modal" data-target="#editdatauser">
                    <button class="btn btn-sm btn-danger" disabled>ลบ</button>
                  </td>
                </tr>
                <?php } ?>
              </tbody>  
              </table>
            </div>  
            </div>
            </div>
            </div>
            </div>
        </div>
      </section>

      <!-- Modal -->
      <div id="editdatauser" class="modal fade" role="dialog">
        <div class="modal-dialog ">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">แก้ไขข้อมูล</h4>
            </div>
            <div class="modal-body" id="showcallblackedit">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div id="saveimg" class="modal fade" role="dialog">
        <div class="modal-dialog ">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">เพิ่มลายเซ็น HOD</h4>
            </div>
            <div class="modal-body" align="center">
            	<input type="file" id="hodimg" name="hodimg" accept="image/*"><hr>
            	<button class="btn btn-success" id="uploadbtn">อัพโหลด</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- DataTables -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/responsive1.js'; ?>" type="text/javascript" charset="utf-8" ></script>
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/responsive2.js'; ?>" type="text/javascript" charset="utf-8" ></script>
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/responsive3.js'; ?>" type="text/javascript" charset="utf-8" ></script>
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/responsive4.js'; ?>" type="text/javascript" charset="utf-8" ></script>
    <script type="text/javascript" src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.dateFormat.js'; ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
    <!-- Alertify -->
    <script src="<?php echo base_url().'assets/alertify/alertify.min.js'; ?>"></script>    
    <!-- FastClick -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
    <!-- charts -->
    <script src="<?php echo base_url().'/assets/adminlte/bower_components/Chart.js/Chart.js';?>"></script>
    <!-- Js Usersetting -->
    <script src="<?php echo base_url().'/assets/js_modifly/uersetting.js'; ?>"></script>
  </body>
</html>