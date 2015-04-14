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
<div class="box box-primary">

	<div class="box-header"><h3 class="box-title">Form Input Member Baru</h3></div>
	
	<form action="<?php echo base_url();?>entry/save_member" method="post" name="frm" id="frm">
	<center>
	<table class="table table-bordered" style="width:98%;">
	<tbody>

	<tr>
	<td align="right"><b>ID Card</b></td>
	<td><input type="text" class="form-control" name="IdCard" id="IdCard" style="width:200px;" value="<?php echo $IdCard;?>"></td>
	</tr>

	<tr>
	<td width="25%" align="right"><b>Sapaan</b></td>
	<td width="75%">
	<label><input type="radio" name="Sapaan" id="Sapaan" value="1">&nbsp;Tn.</label>&nbsp;&nbsp;
    <label><input type="radio" name="Sapaan" id="Sapaan" value="2">&nbsp;Ny.</label>
    </td></tr>

	<tr>
	<td align="right"><b>Nomor Identitas (KTP/SIM)</b></td>
	<td><input type="text" class="form-control" name="NomorIdentitas" id="NomorIdentitas" style="width:200px;"></td>
	</tr>
			
	<tr>
	<td align="right"><b>Nama Lengkap</b></td>
	<td><input type="text" class="form-control" name="NamaLengkap" id="NamaLengkap" style="width:500px;"></td>
	</tr>

	<tr>
	<td align="right"><b>Tempat Lahir</b></td>
	<td><input type="text" class="form-control" name="TempatLahir" id="TempatLahir" style="width:200px;"></td>
	</tr>

	<tr>
	<td align="right"><b>Tanggal Lahir [YYYY MM DD]</b></td>
	<td><input type="text" class="form-control" name="TanggalLahir" id="TanggalLahir" style="width:200px;"></td>
	</tr>

	<tr>
	<td align="right"><b>Alamat</b></td>
	<th><textarea class="form-control" name="Alamat" id="Alamat" rows="2" style="width:500px;"></textarea>
	</div>
	</th>

	<tr>
	<td align="right"><b>Kota</b></td>
	<td>
	<select class="form-control" style="width:200px;" name="Kota" id="Kota">
	<option value="">[Pilih Kota]</option>
	<option value="1">Jakarta Pusat</option>
	<option value="2">Jakarta Barat</option>
	<option value="3">Jakarta Timur</option>
	<option value="4">Jakarta Selatan</option>
	<option value="5">Jakarta Utara</option>
	<option value="6">Kota Lainnya</option>
	</select>
	</td>
	</tr>

	<tr>
	<td align="right"><b>Email</b></td>
	<td><input type="text" class="form-control" name="Email" id="Email" style="width:300px;"></td>
	</tr>

	<tr>
	<td align="right"><b>Handphone</b></td>
	<td><input type="text" class="form-control" name="Handphone" id="Handphone" style="width:300px;"></td>
	</tr>

	</tbody>
	</table>
	</center>

	<div class="box-footer">
		<button class="btn btn-primary" type="button" id="simpan" onClick="goSubmit();">Simpan</button>
		<button class="btn btn-primary" type="button" onClick="kembali()">Kembali</button>
	</div>

	</form>

</div>
</div>
</div>

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script type="text/javascript">
function goSubmit() {
	NamaLengkap = $('#NamaLengkap').val();
	Handphone = $('#Handphone').val();

	if (NamaLengkap == ''){
		alert("Nama Lengkap Harus diisi !"); 
		document.getElementById("NamaLengkap").focus(); 
		return; 
	}

	if (Handphone == ''){
		alert("Nomor Handphone Harus diisi !"); 
		document.getElementById("Handphone").focus(); 
		return; 
	}
frm.submit();
}

function kembali() {
	location.href='<?php echo base_url();?>entry/member';
}
</script>