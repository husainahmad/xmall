<ul class="sidebar-menu">
<li><a href="<?php echo base_url()?>beranda/beranda3"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

<li class="treeview active"><a href="#"><i class="fa fa-bar-chart-o"></i><span>Entry Data</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>entry/member" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Pengunjung</a></li>
	<li><a href="<?php echo base_url();?>entry/kupon" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Kupon Undian</a></li>
	<li><a href="<?php echo base_url();?>entry/undian" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Undian</a></li>
</ul>
</li>

<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Data Master</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>master/kategori_tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Kategori Tenant</a></li>
	<li><a href="<?php echo base_url();?>master/tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tenant</a></li>
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
<div class="col-md-12">

<!-- Custom Tabs -->
<div class="nav-tabs-custom">	
<div class="tab-content">
<div class="tab-pane active" id="tab_1">							

<div class="row">
<div class="col-md-12">

	<table width="100%" border="0">
	<tr><td colspan="2"><span class="judul">Daftar Member </span></td></tr>
	<tr>
	<td width="50%">
	<!--
		<form class="form-inline" style="margin-bottom:3px !important">
		-->
		<input type="hidden" name="KodeSkpd" id="KodeSkpd">
		<input type="text" name="NamaSkpd" id="NamaSkpd" onKeyUp="cariMemberEnter(this);" style="height:30px !important;width:350px;"> &nbsp;
		<button class="btn btn-primary" type="button" onclick="cariMember();">cari</button>
	<!--	
		</form>
	-->	
	</td>
	<td width="50%" align="right"><button style="align:right;" class="btn btn-primary" type="button" onclick='addMember()'>Tambah</button></td>
	</tr>
	</table>

	<table class="ojitable"> 
	<tr>
	<th class="header">No.</th>
	<th class="header">Id Member</th>
	<th class="header">Nama Member</th>
	<th class="header">Handphone</th>
	<th class="header">Email</th>
	<th class="header">Jumlah Kupon</th>
	<th class="header" colspan="3">Action</th>
	</tr>

			
	<tr class="header_nomor">
	<th width="5%">1</th>
	<th width="15%">2</th>
	<th width="31%">3</th>
	<th width="10%">4</th>
	<th width="10%">5</th>
	<th width="10%">6</th>
	<th width="6%">7</th>
	<th width="6%">8</th>
	<th width="7%">9</th>
	</tr>

	<?php
	$No=1;
	foreach($member as $row):
	$tr = ($No % 2) ? "tr1" : "tr2";
	?>
	<tr class="<?php echo $tr;?>">
	<td align="center"><?php echo $No;?>.</td>
	<td align="center"><?php echo $row['IdCard'];?></td>
	<td align="left"><?php echo $row['NamaLengkap'];?></td>
	<td align="center"><?php echo $row['Handphone'];?></td>
	<td align="center"><?php echo $row['Email'];?></td>
	<td align="center"><?php echo $row['JumlahKupon'];?></td>
	<td align="center"><a href="<?php echo base_url()?>entry/detail_member/<?php echo $row['MemberId'];?>">detail</a></td>
	<td align="center"><a href="<?php echo base_url()?>entry/edit_member/<?php echo $row['MemberId'];?>">ubah</a></td>
	<td align="center"><a href="#" onClick="deleteMember(<?php echo $row['MemberId'];?>);">hapus</a></td>
	</tr>
	<?php 
	$No++; 
	endforeach;
	?>
	</table>

</div>
</div>
</div>						

</div><!-- /.tab-content -->
</div><!-- nav-tabs-custom -->
			
</div><!-- /.col -->
</div> <!-- /.row -->
<!-- END CUSTOM TABS -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<script language="javascript">
function addMember(){
	window.location ='<?php echo base_url();?>entry/add_member';
}

function cariMemberEnter(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode==13) {
		window.location ='<?php echo base_url();?>entry/cari_member/'+ document.getElementById('NamaSkpd').value;
	}	
}


function cariMember(){
	window.location ='<?php echo base_url();?>entry/cari_member/'+ document.getElementById('NamaSkpd').value;
}

function deleteMember(MemberId) {
	if (confirm('Anda yakin untuk menghapus data ini?')){
		location.href='<?php echo base_url();?>entry/delete_member/'+MemberId;
		}
}
</script>