<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
$beta = $this->load->database('bo', TRUE);
$query = $beta->select('vencode, venname1');
$query = $beta->order_by('vencode', 'DESC');
$query = $beta->get('APFA0010');
$result = $query->result_array();
?>
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
    <link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/Ionicons/css/ionicons.min.css'; ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/plugins/iCheck/all.css'; ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'; ?>">
    <!-- Morris charts -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/morris.js/morris.css';?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/select2/dist/css/select2.min.css';?>">
    <!-- Alertify -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/alertify/css/alertify.min.css'; ?>" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/AdminLTE.min.css'; ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/skins/_all-skins.min.css'; ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
    .overlay{
    display: none;
    }
    #loginicon{
    display: none;
    }
    #updataitem{
    display: none;
    }
    #colseupdate{
    display: none;
    }
    .card {
    transition: 0.3s;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 6px rgba(0,0,0,0.23);
    }
    .cardnew {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 6px rgba(0,0,0,0.23);
    }
    .divitemcolor
	 {
    background-color: #5CBB3A;
	 }
   h5{
    font-size: 15px;
   }
   input{
    font-size: 17px;
   }
   input:-moz-read-only { background: #ffffff !important;}
   input:read-only { background: #ffffff !important;}
  .select2-selection{
  background-color:#b3d1ff !important;
  color:red !important;
  } 
  </style>
  </head>
  <body>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        <?php echo $this->lang->line('edit'); echo '  #'.$getdata[0]['prno']; ?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('index.php/Dashboard/Dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo $this->lang->line('Dashboard'); ?></a></li>
          <li><a href="<?php echo site_url('index.php/Add_Pr/'); ?>"><i class="fa fa-plus"></i> <?php echo $this->lang->line('edit'); ?></a></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table cellspacing="0" width="100%" class="table table-bordered table-hover responsive">
                        <form id="formpr" name="formpr">
                        <tr>
                          <td align="center"><h5><b><?php echo $this->lang->line('p/rno'); ?></b></h5></td>
                          <td ><input type="text" id="prno" class="form-control input-sm" value="<?php echo $getdata[0]['prno']; ?>" readonly></td>
                          <td align="center"><h5><b><?php echo $this->lang->line('p/r_date'); ?></b></h5></td>
                          <td ><input type="text" class="form-control input-sm" value="<?php $Newdate = nice_date($getdata[0]['prdate'], 'd/m/Y'); echo $Newdate; ?>" readonly></td>
                          <td align="center"><h5><b><?php echo $this->lang->line('refno'); ?></b></h5></td>
                          <td><input type="text" class="form-control input-sm" value="<?php echo $getdata[0]['refno']; ?>" readonly></td>
                          <td align="center"><h5><b><?php echo $this->lang->line('p/r_date'); ?></b></h5></td>
                          <td ><input type="text" class="form-control input-sm" value="<?php $Newdate = nice_date($getdata[0]['prdate'], 'd/m/Y'); echo $Newdate; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td width="10%" align="center"><h5><b><?php echo $this->lang->line('vendor'); ?></b></h5></td>
                          <td width="10%"><input type="text" id="vendor" class="form-control input-sm" value="<?php echo $getdata[0]['Vendor']; ?>" readonly></td>
                          <td width="10%" align="center"><input type="text" id="vendorname" class="form-control input-sm" value="<?php echo $getdata[0]['Vendor_name']; ?>" readonly></td>
                          <td width="15%"><select class="form-control input-sm" id="getvender" width="100%" onchange="setvender(this.value)"></select></td>
                          <td align="center"><h5><b><?php echo $this->lang->line('dep'); ?></b></h5></td>
                          <td width="10%"><input type="text" id="depcode" class="form-control input-sm" value="<?php echo $getdata[0]['dep']; ?>" readonly></td>
                          <td align="center"><input type="text" id="depname" class="form-control input-sm" readonly></td>
                          <td width="15%"><select class="form-control input-sm col-md-2" id="getdepartment" width="100%" onchange="setdepartment(this.value)" disabled></select></td>
                        </tr>
                        <tr>
                          <td align="center"><h5><b><?php echo $this->lang->line('warehouse'); ?></b></h5></td>
                          <td ><input type="text" id="warecode" class="form-control input-sm" value="<?php echo $getdata[0]['warecode']; ?>" readonly></td>
                          <td align="center"><input type="text" id="waredesc" class="form-control input-sm" readonly></td>
                          <td ><select class="form-control input-sm" id="getwarehouse" width="100%" onchange="setwarehouse(this.value)"></select></td>
                          <td align="center"><h5><b><?php echo $this->lang->line('division'); ?></b></h5></td>
                          <td><input type="text" id="divisioncode" class="form-control input-sm" value="<?php echo $getdata[0]['div']; ?>" readonly></td>
                          <td align="center"><input type="text" id="divisionname" class="form-control input-sm" readonly></td>
                          <td><select class="form-control input-sm col-md-2" id="getdivision" width="100%" onchange="setdivision(this.value)"></select></td>
                        </tr>
                        <tr>
                          <td align="center"><b><?php echo $this->lang->line('remark'); ?></b></td>
                          <td colspan="7"><textarea class="form-control input-sm" rows="2" id="remark"><?php echo $getdata[0]['remark']; ?></textarea></td>
                        </tr>
                      </form>
                      </table>
                      <div class="box box-success card panel panel-default divitemcolor">
                        <!--
                        <div class="box-header">
                          <h4 class="box-title">ไอเท็ม</h4>
                        </div>-->
                        <div class="box-body">
                          <div class="table-responsive">
                            <div id="showtabledataitem"></div>
                          </div>
                          <div class="table-responsive">
                            <table cellspacing="0" width="100%" class="table table-bordered table-condensed responsive">
                              <tr class="trinfo">
                                <td width="5%" align="center"><h5>Item</h5></td>
                                <td width="5%" align="center"><input type="text" id="itemprno" class="form-control input-sm" readonly></td>
                                <form id="formadditem" name="formadditem">
                                  <td width="8%" align="center"><h5>Product Code</h5></td>
                                  <td width="10%"><input type="text" id="productcode" class="form-control input-sm" readonly></td>
                                  <td width="5%"><button type="button" class="btn btn-primary btn-sm input-sm" onclick="ajaxopenproduct(this)">ค้นหาสินค้า</button><input type="hidden" data-toggle="modal" data-target="#productmodel" id="openproduct"></td>
                                  <td width="25%" colspan="2"><input type="text" id="itemstname1" class="form-control input-sm" readonly></td>
                                  <td width="5%"><input type="text" id="itemmdesc1" class="form-control input-sm" readonly></td>
                                </tr>
                                <tr class="trinfo">
                                  <td width="10%" align="center"><h5>Last Unit Price</h5></td>
                                  <td><input type="text" class="form-control input-sm" id="itemprpriceold"></td>
                                  <td width="10%" align="center"><h5>Unit Price</h5></td>
                                  <td colspan="2"><input type="text" class="form-control input-sm" id="itemprprice" onchange="checkNumberunitprice();"></td>
                                  <td width="10%" align="center"><h5>Quantity</h5></td>
                                  <td width="5%"><input type="text" id="itemprqty" class="form-control input-sm" onchange="checkNumberprqty();"></td>
                                  <td align="center"><h4><b><p id="Newitem" class="text-danger"></p></b></h4></td>                                  
                                </tr>
                                <tr class="trinfo">
                                  <td width="10%" align="center"><h5>Last Purchase date</h5></td>
                                  <td colspan="2">
                                    <div align="center">
                                    <div class="form-group">
                                      <div class="input-group date">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker input-sm" id="itemlastpurdate">
                                      </div>
                                    </div>
                                    </div>
                                  </td>  
                                  <td width="10%" align="center"><h5>Delivery date</h5></td>
                                  <td colspan="2">
                                    <div align="center">
                                    <div class="form-group">
                                      <div class="input-group date">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker input-sm" id="itemusedate">
                                      </div>
                                    </div>
                                  </div>
                                  </td>                                                                  
                                  <td width="10%" align="center"><h5>Attach file</h5></td>
                                  <td><h5><input type="file" id="itemifileupd" name="itemifileupd"></h5></td>
                                </tr>  
                                <tr class="trinfo">
                                  <td width="10%" align="center"><h5>Remark</h5></td>
                                  <td colspan="8"><input type="text" id="itemiremark" class="form-control input-sm"></td>
                                </tr>
                                </form>
                            </table>
                          </div>
                          <div align="center">
                            <button type="button" class="btn btn-success" id="additem">เพิ่มไอเท็ม</button>
                            <button type="button" class="btn btn-warning" id="updataitem" onclick="updataitem(this);">อัพเดต</button>
                            <button type="button" class="btn btn-danger" id="colseupdate">ยกเลิก</button>
                          </div>
                        </div>
                      </div>
                    <?php  
                    if ($this->session->username == 'Somkhit') {
               echo '<div class="box box-info card">
                        <div class="box-header">
                          <div class="box-body">
                          <div class="table-responsive">
                          <table cellspacing="0" width="100%" class="table table-bordered responsive table-condensed">
                          <tr>
                          <td width="10%" align="center">GM Remark</td>
                          <td width="90%"><textarea id="gmremark" name="gmremark" class="form-control" rows="1"></textarea></td>
                          </tr>
                          </table>
                          </div>
                      	  </div>
                    	</div>
                  	</div>';
                    }
                    ?>  
                    <?php  
                    if ($this->session->username == 'Nalinee') {
               echo '<div class="box box-info card">
                        <div class="box-header">
                          <div class="box-body">
                          <div class="table-responsive">
                          <table cellspacing="0" width="100%" class="table table-bordered responsive table-condensed">
                          <tr>
                          <td width="10%" align="center">EFC Remark</td>
                          <td width="90%"><textarea id="efcremark" name="efcremark" class="form-control" rows="1"></textarea></td>
                          </tr>
                          </table>
                          </div>
                      	  </div>
                    	</div>
                  	</div>';
                    }
                    ?>                     
                  <div class="table-responsive">
                  <table cellspacing="0" width="100%" class="table table-bordered table-hover responsive table-condensed">
                    <tr>
                      <td width="10%" align="center"><h5>Vat 7%</h5></td>
                      <td>
                        <div class="form-group" align="center">
                          <label>
                            <input type="radio" name="r2" class="flat-red" value="Y" <?php  if ($getdata[0]['Vat'] == 'Y') {
                            echo 'checked';
                            } ?>>
                            Yes
                          </label>
                          <label>
                            <input type="radio" name="r2" class="flat-red" value="N" <?php if ($getdata[0]['Vat'] == 'N' OR $getdata[0]['Vat'] == '') {
                            echo 'checked';
                            } ?>>
                            No
                          </label>
                        </div>
                      </td>
                      <td width="10%" align="center"><h5>Discount(%)</h5></td>
                      <td><input type="text" class="form-control input-sm" value="<?php if($getdata[0]['DC'] == ''){echo '0';}else{ echo $getdata[0]['DC'];} ?>" id="dc" onchange="checkNumberdc();">
                      <span style="color: red;"><b>*กรณีใช้เป็น Discount(%) กรุณาใส่ Discount เป็น 0</b></span>
                    </td>
                    <td width="10%" align="center"><h5>Discount</h5></td>
                    <td><input type="text" class="form-control input-sm" value="<?php if($getdata[0]['DC_A'] == ''){echo '0';}else{ echo $getdata[0]['DC_A'];} ?>" id="dc_a" onchange="checkNumberdc_a();">
                    <span style="color: red;"><b>*กรณีใช้เป็นตัวเลข Discount กรุณาใส่ Discount(%) เป็น 0</b></span>
                  </td>
                </tr>
              </table>
              </div>

              <div align="center"><button type="button" class="btn btn-success" id="savepr">
              <?php 
              $type = $this->session->type;
              if ($type=='accounting' OR $type=='accounting0' OR $type=='hod' OR $type=='approval') {
              	echo 'อนุมัติPR';
              }else{
              	echo 'บันทึก';
              } ?></button>
              <?php  
              $type = $this->session->type;
              if ($type=='accounting' OR $type=='accounting0' OR $type=='hod' OR $type=='approval') {
                echo '<button class="btn btn-danger" id="saveprx">ไม่อนุมัติPR</button>';
              }
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content-wrapper -->
<!-- Modal -->
<div id="productmodel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ค้นหาสินค้า</h4>
      </div>
      <div class="modal-body" id="showlistitem">
      </div>
      <div class="modal-footer">
        <div align="center">
          <button type="button" class="btn btn-danger" id="closeshowlistitem" data-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- DataTables -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" ></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'; ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url().'assets/adminlte/plugins/iCheck/icheck.min.js';?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/raphael/raphael.min.js';?>"></script>
<script src="<?php echo base_url().'/assets/adminlte/bower_components/morris.js/morris.min.js'; ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/select2/dist/js/select2.full.min.js';?>"></script>
<!-- Alertify -->
<script src="<?php echo base_url().'assets/alertify/alertify.min.js'; ?>"></script>
<!-- Add Pr Modifiy -->
<script type="text/javascript" src="<?php echo base_url().'/assets/js_modifly/editpr.js'; ?>"></script>
<script type="text/javascript">
$(function () {
$('input[type="radio"].flat-red').iCheck({
radioClass   : 'iradio_flat-blue'
})
$('.datepicker').datepicker({
autoclose: true,
todayHighlight: true,
format: 'mm/dd/yyyy',
clearBtn: true
})
})
</script>
</body>
</html>