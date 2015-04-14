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

<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Data Master</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>master/kategori_tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Kategori Tenant</a></li>
	<li><a href="<?php echo base_url();?>master/kat_tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tenant</a></li>
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
<div class="col-xs-12">
<div class="box box-primary">
<br><div class="box-header"><span class="judul" style="margin-left:15px;">Acount Profile</span></div>

<div class="col-xs-12 table-responsive">


	<table class="table table-bordered" style="width:80% !important;">
	<tbody>
	<tr>
	<td align="center" width="30%">
	<img src="<?php echo base_url();?>assets/images/users/users.png" height="270" width="245">
	</td>
		
	<td align="center" width="70%">
	
		<table class="table table-bordered"  style="margin-bottom:1px !important;">
		<tbody>
		<tr><td width="35%" align="right"><b>Nama</b></td><td width="5%" align="center"><b>:</b></td><td width="60%" align="left"><b>-</b></td></tr>
		<tr><td align="right"><b>Telephone</b></td><td align="center"><b>:</b></td><td align="left"><b>-</b></td></tr>
		<tr><td align="right"><b>Handphone</b></td><td align="center"><b>:</b></td><td align="left"><b>-</b></td></tr>
		<tr><td align="right"><b>Faximile</b></td><td align="center"><b>:</b></td><td align="left"><b>-</b></td></tr>
		<tr><td align="right"><b>Email</b></td><td align="center"><b>:</b></td><td align="left"><b>-</b></td></tr>
		</tbody>
		</table>

	</td>
	</tr>

	<tr><td colspan="2">
	<button class="btn btn-primary" type="button" onClick="addPimpinans()">Update Acount Profile</button>
	</td></tr>
	</tbody>
	</table>


</div>
<div class="row"></div>

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

</div>
</div>

</div><!-- ./wrapper -->

<script language="javascript">
 
function addPimpinan(){
	window.location ='<?php echo base_url();?>utilitiessatker/credit_pimpinan/';
}

function editPimpinan(IdProfilePimpinan){
	window.location ='<?php echo base_url();?>utilitiessatker/credit_pimpinan/'+IdProfilePimpinan;
}

function deletePimpinan(IdProfilePimpinan) {
	if ( confirm('Anda yakin untuk menghapus data ini?')) {
		location.href='<?php echo base_url();?>utilitiessatker/delete_pimpinan/'+IdProfilePimpinan;
	}
}
</script>