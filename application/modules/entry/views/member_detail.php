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
	<tr><td width="100%" align="center"><span class="judul">DETAIL INFORMASI MEMBER/ANGGOTA</span></td></tr>
	</table>	

	<div class="col-xs-12 table-responsive">
	<table class="table table-striped" style="width:100% !important;">
	<tbody>
	<tr>
	<th width="30%">ID Card</th>
	<td width="70%"><img src="<?php echo base_url();?>entry/show_barcode/<?php echo $member['IdCard'];?>"></td>
	</tr>

	<tr>
	<th>Nomor Identitas (KTP/SIM)</th>
	<td><?php echo $member['NomorIdentitas'];?></td>
	</tr>

	<tr>
	<th>Nama Lengkap</th>
	<td><?php echo $member['NamaLengkap'];?></td>
	</tr>

	<tr>
	<th>Tempat Tanggal Lahir</th>
	<td><?php echo $member['TempatLahir'];?>&nbsp;<?php echo $this->fungsi->formatTanggal($member['TanggalLahir']);?></td>
	</tr>

	<tr>
	<th>Alamat</th>
	<td><?php echo $member['Alamat'];?>&nbsp;&nbsp;<?php //echo $member['Kota'];?></td>
	</tr>

	<tr>
	<th>Member Since</th>
	<td><?php echo $this->fungsi->formatTanggal($member['MemberSince']);?></td>
	</tr>

	<tr>
	<th>Valid Thru</th>
	<td><?php echo $this->fungsi->formatTanggal($member['ValidThru']);?></td>
	</tr>

	<tr>
	<th>Email</th>
	<td><?php echo $member['Email'];?></td>
	</tr>
	
	<tr>
	<th style="border-bottom:1px solid #BBBBBB;">Handphone</th>
	<td style="border-bottom:1px solid #BBBBBB;"><?php echo $member['Handphone'];?></td>
	</tr>
	</tbody>
	</table>		

	
	
	<table class="ojitable"> 
	<tr>
	<th class="header">No.</th>
	<th class="header">Tanggal Transaksi</th>
	<th class="header">Tenant</th>
	<th class="header">Nilai Transaksi</th>
	<th class="header">Jumlah Kupon</th>
	</tr>
			
	<?php
	$No=1;
	$JumlahBelanja = 0;
	$JumlahKupon = 0;
	foreach($transaksi as $row):
	$tr = ($No % 2) ? "tr1" : "tr2";
	?>
	
	<tr class="<?php echo $tr;?>">
	<td align="center"><?php echo $No;?>.</td>
	<td align="left"><?php echo $this->fungsi->formatTanggal($row['TanggalBelanja']);?></td>
	<td align="left"><?php echo $row['NamaTenant'];?></td>
	<td align="right"><?php echo $row['Nominal'];?></td>			
	<td align="right"><?php echo $row['JumlahKupon'];?></td>
	</tr>
	
	<?php 
	$No++; 
	$JumlahBelanja = $JumlahBelanja + $row['Nominal'];
	$JumlahKupon = $JumlahKupon + $row['JumlahKupon'];	
	endforeach;
	?>
	<tr class="total">
	<td align="center" colspan="3">T O T A L</td>
	<td align="right"><?php echo $JumlahBelanja;?></td>
	<td align="right"><?php echo $JumlahKupon;?></td>
	</tr>
	</table>

	
	
	
	
	
	
	</div>

	<div class="col-xs-12 table-responsive" style="margin-top:20px;">
	<table width="100%" border="0">
	<tr>
	<td align="right">
		<button style="align:right;" class="btn btn-primary" type="button" onClick="kembali()">Kembali</button>
	</td>
	</tr>
	</table>
	</div>

	
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

function kembali() {
	location.href='<?php echo base_url();?>entry/member';
}
</script>