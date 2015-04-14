<?php 
	if ($this->session->userdata('sesKodeGroups') == '1') { 
?>
<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda1"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview active"><a href="#"><i class="fa fa-laptop"></i><span>Utilities</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>utilities/ubah_password" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
	<li><a href="<?php echo base_url();?>utilities/acount_profile" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Acount Profile</a></li>
</ul>
</li>

</ul>
</section>
</aside>

<?php 
} else  if ($this->session->userdata('sesKodeGroups') == '2') { 
?>

<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda2"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview active"><a href="#"><i class="fa fa-laptop"></i><span>Utilities</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>utilities/ubah_password" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
	<li><a href="<?php echo base_url();?>utilities/acount_profile" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Acount Profile</a></li>
</ul>
</li>

</ul>

</section>
</aside>

<?php 
} else  if ($this->session->userdata('sesKodeGroups') == '3') { 
?>

<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda3"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview"><a href="#"><i class="fa fa-bar-chart-o"></i><span>Entry Data</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>entry/member" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Pengunjung</a></li>
	<li><a href="<?php echo base_url();?>entry/kupon" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Kupon Undian</a></li>
	<li><a href="<?php echo base_url();?>entry/undian" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Undian</a></li>
</ul>
</li>

<li class="treeview active"><a href="#"><i class="fa fa-laptop"></i><span>Utilities</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>utilities/ubah_password" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
	<li><a href="<?php echo base_url();?>utilities/acount_profile" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Acount Profile</a></li>
</ul>
</li>

</ul>

</section>
</aside>

<?php 
} else  if ($this->session->userdata('sesKodeGroups') == '4') { 
?>

<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda4"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview active"><a href="#"><i class="fa fa-laptop"></i><span>Utilities</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>utilities/ubah_password" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
	<li><a href="<?php echo base_url();?>utilities/acount_profile" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Acount Profile</a></li>
</ul>
</li>

</ul>

</section>
</aside>

<?php 
} else  if ($this->session->userdata('sesKodeGroups') == '5') { 
?>

<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda5"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview active"><a href="#"><i class="fa fa-laptop"></i><span>Utilities</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>utilities/ubah_password" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
	<li><a href="<?php echo base_url();?>utilities/acount_profile" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Acount Profile</a></li>
</ul>
</li>

</ul>

</section>
</aside>

<?php 
} 
?>


<!------------------------------------------------------------------------------------------------------------------------------------->
<aside class="right-side">
<section class="content-header"><h4><?php echo $this->session->userdata('sesNamaGroups');?></h4></section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-md-6">
<div class="box box-primary">

	<div class="box-header"><h3 class="box-title">Form Ubah Password</h3></div>
	<!--<form role="form">-->
	<form action="<?php echo base_url();?>utilitiessatker/update_password" method="post" name="frmChangePassword" id="frmChangePassword">

	<div class="box-body">
		<div class="form-group">
			<label>Password Lama</label>
			<input type="password" class="form-control" id="PasswordLama1" name="PasswordLama1" placeholder="Password Lama">
			<input type="hidden" id="PasswordLama2" name="PasswordLama2" value="<?php //echo $old_password['OldPassword'];?>">
		</div>

		<div class="form-group">
			<label>Password Baru</label>
			<input type="password" class="form-control" id="PasswordBaru1" name="PasswordBaru1" placeholder="Password Baru">
		</div>

		<div class="form-group">
			<label>Retype Password Baru</label>
			<input type="password" class="form-control" id="PasswordBaru2" name="PasswordBaru2" placeholder="Retype Password Baru">
		</div>
	</div>

	<div class="box-footer">
		<button class="btn btn-primary" type="button" id="changePassword" onClick="goSubmit();">Submit</button>
		<button type="reset" class="btn btn-primary">Reset</button>
	</div>
	</form>

</div>
</div>
</div>

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<script src="<?php echo base_url();?>assets_satker/js/md5.js"></script>

<script type="text/javascript">
function goSubmit() {
	PasswordLama1 = $('#PasswordLama1').val();
	PasswordLama2 = $('#PasswordLama2').val();
	PasswordBaru1 = $('#PasswordBaru1').val();
	PasswordBaru2 = $('#PasswordBaru2').val();

	PasswordLamaEn1 = CryptoJS.MD5(PasswordLama1);

	if (PasswordLama1 == ''){
		alert("Password Lama Harus diisi !"); 
		document.getElementById("PasswordLama1").focus(); 
		return; 
	}

	if (PasswordBaru1 == ''){
		alert("Password Baru Harus diisi !"); 
		document.getElementById("PasswordBaru1").focus(); 
		return; 
	}

	if (PasswordBaru2 == ''){
		alert("Password Baru Konfirmasi Harus diisi !"); 
		document.getElementById("PasswordBaru2").focus(); 
		return; 
	}

	if (PasswordBaru1 != PasswordBaru2){
		alert("Password Baru harus sama !"); 
		document.getElementById("PasswordBaru1").focus(); 
		return; 
	}

	if (PasswordLamaEn1 != PasswordLama2){
		alert("Password Lama tidak benar !"); 
		document.getElementById("PasswordLama1").focus(); 
		return; 
	}
frmChangePassword.submit();
}
</script>


<!--
<script type="text/javascript">
$('#frmChangePassword').ajaxForm();	
$('#changePassword').click(function(){
	changePassword();
});

function changePassword() {
	var options1 = {
	beforeSubmit: function(arr, $form, options1) {

		if ($('#PasswordLama1').val() == ''){
			$('#message').attr('class', 'kuning');
			showmessage('Password Lama masih kosong !');
			document.getElementById("PasswordLama1").focus(); 
			return false;
		}

		if ($('#PasswordBaru1').val() == ''){
			$('#message').attr('class', 'kuning');
			showmessage('Password Pengganti masih kosong !');
			document.getElementById("PasswordBaru1").focus(); 
			return false;
		}

		if ($('#PasswordBaru2').val() == ''){
			$('#message').attr('class', 'kuning');
			showmessage('Password Confirmasi Pengganti masih kosong !');
			document.getElementById("PasswordBaru2").focus(); 
			return false;
		}

	},
	success: function(resp, stat, data) {
	var msg = $.parseJSON(resp);
	
	if(msg.success){
		showmessage(msg.success);
		$('#message').attr('class', 'hijau');
		location.href='<?php echo base_url();?>authentication/logout';
		}else{
		$('#message').attr('class', 'merah');
		showmessage(msg.error);
		}
}
};
			
$('#frmChangePassword').ajaxSubmit(options1);	
	return false;
}

function showmessage(msg){
	$('#message').html(msg).fadeIn(300).delay(1000).fadeOut(300).removeClass('red');
}
</script>-->