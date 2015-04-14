<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda3"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview"><a href="#"><i class="fa fa-bar-chart-o"></i><span>Entry Data</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>entry/member" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Pengunjung</a></li>
	<li><a href="<?php echo base_url();?>entry/kupon" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Kupon Undian</a></li>
	<li><a href="<?php echo base_url();?>entry/undian" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Undian</a></li>
</ul>
</li>

<li class="treeview active"><a href="#"><i class="fa fa-edit"></i><span>Data Master</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>master/kategori_tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Kategori Tenant</a></li>
	<li><a href="<?php echo base_url();?>master/kat_tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tenant</a></li>
</ul>
</li>

<li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Utilities</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>utilities/ubah_password" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Ubah Password</a></li>
	<li><a href="<?php echo base_url();?>utilities/acount_profile" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Acount Profile</a></li>
</ul>
</li>

</ul>

</section>
</aside>

<aside class="right-side">
<section class="content-header"><h4><?php echo $this->session->userdata('sesNamaGroups');?></h4></section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">

	<div class="box-body table-responsive">
	<table class="table table-striped" style="width:100% !important;">
	<tbody>
	<tr>
	<th width="30%" style="border-bottom:1px solid #BBBBBB;">Kategori</th>
	<td width="70%" style="border-bottom:1px solid #BBBBBB;"><?php echo $tenant['KategoriTenant']?>
	</td>
	</tr>
	</tbody>
	</table>	
	</div>

<div class="row">
<div class="col-md-6">
<div class="box box-primary">

<div class="box-header"><h3 class="box-title">Form Update Tenant</h3></div>
<form action="<?php echo base_url();?>master/update_tenant" method="post" name="frm">
	<input type="hidden" name="IdKategoriTenant" id="IdKategoriTenant" value="<?php echo $tenant['IdKategoriTenant']?>">	

	<div class="box-body">

		<div class="form-group">
			<label>Nama Tenant</label>
			<input type="hidden" name="IdTenant" id="IdTenant" value="<?php echo $tenant['IdTenant']?>">	
			<input type="text" class="form-control" id="NamaTenant" name="NamaTenant" value="<?php echo $tenant['NamaTenant']?>">
		</div>	
	
		<div class="form-group">
			<label>Lantai</label>
			<input type="text" class="form-control" id="Lantai" name="Lantai" value="<?php echo $tenant['Lantai']?>">
		</div>	

		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?php echo $tenant['Keterangan']?>">
		</div>	

</div>

	<div class="box-footer">
		<button class="btn btn-primary" type="button" onClick="goSubmit()">Submit</button>
		<button class="btn btn-primary" type="button" onClick="goBack()">Kembali</button>
	</div>
	</form>

</div>
</div>
</div>


</div>
</div>
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<script type="text/javascript">

function goSubmit() {

	if (frm.NamaTenant.value == ''){
		alert("Nama Tenant harus diisi !"); 
		document.getElementById("NamaTenant").focus(); 
		return; 
	}

frm.submit();
}

function goBack(){
	IdKategoriTenant = $('#IdKategoriTenant').val();
	window.location ='<?php echo base_url();?>master/list_tenant/'+IdKategoriTenant;
  }

</script>