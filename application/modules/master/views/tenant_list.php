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
	<td width="70%" style="border-bottom:1px solid #BBBBBB;"><?php echo $kat_tenant['KategoriTenant']?>
	<input type="hidden" name="IdKategoriTenant" id="IdKategoriTenant" value="<?php echo $kat_tenant['IdKategoriTenant']?>">	
	</td>
	</tr>
	</tbody>
	</table>	
	</div>

	<div class="box-body table-responsive">

	<table width="100%" border="0">
	<tr>
	<td width="50%"><span class="judul">Tabel Tenant</span></td>
	<td width="50%" align="right">
	<button style="align:right;" class="btn btn-primary" type="button" onclick='addTenant()'>Tambah</button>
	<button class="btn btn-primary" type="button" onClick="goBack()">Kembali</button>
	
	</td>
	</tr>
	</table>

	<table class="ojitable"> 
	<tr>
	<th class="header">No.</th>
	<th class="header">Tenant</th>
	<th class="header">Lantai</th>
	<th class="header">Keterangan</th>
	<th class="header" colspan="2">Action</th>
	</tr>
			
	<tr class="header_nomor">
	<th width="10%">1</th>
	<th width="40%">2</th>
	<th width="10%">3</th>	
	<th width="20%">4</th>
	<th width="10%">5</th>
	<th width="10%">6</th>
	</tr>
	<?php 
	$No=1;
	foreach($tenant_list as $row):
	$tr = ($No % 2) ? "tr1" : "tr2";
	?>
	<tr class="<?php echo $tr;?>">
	<td align="center"><?php echo $No;?>.</td>
	<td align="left"><?php echo $row['NamaTenant'];?></td>
	<td align="left"><?php echo $row['Lantai'];?></td>
	<td align="left"><?php echo $row['Keterangan'];?></td>
	<td align="center"><a href="#" onclick="editTenant(<?php echo $row['IdTenant'];?>)">ubah</a></td>
	<td align="center"><a href="#" onclick="deleteTenant(<?php echo $row['IdTenant'];?>)">hapus</a></td>
	</tr>
	<?php 
	$No++; 
	endforeach;
	?>
	</table>

</div><!-- /.box -->
</div>
</div>

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script language="javascript">
function addTenant(){
	IdKategoriTenant = $('#IdKategoriTenant').val();
	window.location ='<?php echo base_url();?>master/add_tenant/'+IdKategoriTenant;
}

function editTenant(IdTenant){
	window.location ='<?php echo base_url();?>master/edit_tenant/'+IdTenant;
}

function deleteTenant(IdTenant) {
	IdKategoriTenant = $('#IdKategoriTenant').val();
	if (confirm('Anda yakin untuk menghapus data ini?')){
		location.href='<?php echo base_url();?>master/delete_tenant/'+IdTenant+'/'+IdKategoriTenant;
		}
}

function goBack(){
	window.location ='<?php echo base_url();?>master/kat_tenant';
  }

</script>