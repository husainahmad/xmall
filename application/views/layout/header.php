<?php 
if (!$this->session->userdata('login') === TRUE){
	redirect('authentication');
		}
?>

<!DOCTYPE html>
<html style="min-height: 1767px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title><?php echo $this->config->item('site_name');?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- bootstrap 3.0.2 -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- font Awesome -->
<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Ionicons -->
<link href="<?php echo base_url()?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
<!-- jvectormap -->
<link href="<?php echo base_url()?>assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
<!-- Date Picker -->
<link href="<?php echo base_url()?>assets/css/datepicker3.css" rel="stylesheet" type="text/css">
<!-- Daterange picker -->
<link href="<?php echo base_url()?>assets/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url()?>assets/css/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css">
<!-- Theme style -->
<link href="<?php echo base_url()?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css">

<!--<script src="<?php echo base_url()?>assets/fr/fastreport.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/dialog/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/dialog/jquery-ui.js"></script>-->
<!--<script src="<?php echo base_url();?>assets/dialog/jquery-1.10.2.js"></script>-->

<script>
var root='<?php echo base_url()?>';
</script>

<style type="text/css">
	.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
</style>
	
<style type="text/css">
#output{
font-size:14px;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
text-align:center;
margin-top:-15%;
color:#666;
}
</style>

<script type="text/javascript">
window.setTimeout("waktu()",1000);   
function waktu() {    
var tanggal = new Date();   
setTimeout("waktu()",1000);   
document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds(); 
}  
</script>

</head>
<body class="skin-blue wysihtml5-supported  pace-done" style="min-height: 1767px;">

<div id="message" style="display:none;"></div>

<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;"><div class="pace-progress-inner"></div></div>
<div class="pace-activity"></div>
</div>

<!-- header logo: style can be found in header.less -->
<header class="header">

<a href="#" class="logo">Plaza Kalibata </a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<a href="#" class="navbar-btn sidebar-toggle"><span style="font-size:20px;margin-left:5px;color:#FFFFFF;">Aplikasi Undian Pengunjung Plaza Kalibata</span></a>

<div class="navbar-right">
  <ul class="nav navbar-nav">
                        		
		<!-- User Account: style can be found in dropdown.less -->
		<li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="glyphicon glyphicon-user"></i>
				<span><?php echo $this->session->userdata('sesUserName');?> <i class="caret"></i></span>
			</a>
			<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header bg-light-blue">
					<img src="<?php echo base_url();?>assets/images/users/<?php echo $user_acount['Photo'];?>" class="img-circle" alt="User Image">
					<p>
						<?php echo $user_acount['Nama'];?>
						<small><?php echo $user_acount['Email'];?></small>
					</p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="pull-left">
						<a href="#" class="btn btn-default btn-flat">Acount Profile</a>
					</div>
					<div class="pull-right">
						<a href="<?php echo base_url()?>authentication/logout" class="btn btn-default btn-flat">Sign out</a>
					</div>
				</li>
			</ul>
		</li>

	</ul>
</div>
</nav>
</header>
<!------------------------------------------------------- end header ------------------------------------------------>

<div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 627px;">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas" style="min-height: 1767px;">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!--<img src="./AdminLTE   Dashboard_files/avatar3.png" class="img-circle" alt="User Image">-->
                        </div>
                        <div class="pull-left info">
                          <p>
						  <?php
						  $today = date('D');
						  $todate = date('Y-m-d');
						  echo $this->fungsi->formatHari($today),", ". $this->fungsi->formatTanggal($todate);
						  ?>
						  </p>
						  <br>
						  <div id="output"></div>
							<!--<a href="#"><i class="fa fa-circle text-success"></i>&nbsp;&nbsp;</a>-->
                        </div>
                    </div>