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
<script src="<?php echo base_url()?>assets/js/ayakpemantauan.js" type="text/javascript" ></script>

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


<form action="<?php echo base_url();?>entry/save_kupon" method="post" name="frm" id="frm">
<center>

<table width="98%" border="0">
<tr><td colspan="3" align="center" style="border-bottom:1px solid #BBBBBB;"><font size="10"><b>KBM-00000001</b></font></td></tr>
<tr><td colspan="3">&nbsp;</td></tr>

<tr>
<td valign="top" width="30%" align="center">
	<select class="form-control" style="width:200px;" name="HadiahKu" id="HadiahKu" onChange="showHadiah('show_hadiah/'+this.value)">
	<option value="">[Pilih Hadiah]</option>
	<?php echo $this->data_model->get_select_hadiah();?> 
	</select>

	<div class="box-footer" style="margin-top:10px;">
		<button class="btn btn-primary" type="button" id="simpan" onClick="#">Mulai</button>
		<button class="btn btn-primary" type="button" onClick="#">Berhenti</button>
	</div>
</td>

<td width="40%" align="center">
<div id="Hadiah"><img src="<?php echo base_url();?>assets/images/hadiah/hadiah.jpeg" style="border:1px;" height="170" width="200"></div>
</td>

<td valign="top" width="30%">
	<table class="table table-striped" style="width:100% !important;">
	<tbody>
	<tr>
	<td style="border-bottom:1px solid #BBBBBB;" align="center"><b>
	[ 8745-UHRE-8745 ]<br>
	Aries Syahputra<br>
	Jl. Daan Mogot No 12 Rt 002 Rw 02 Kel Kacang Tanah Kec Kebon Kacang Jakarta<br>
	0812 0987 7689
	</b></td>
	</tr>
	</tbody>
	</table>
</td>
</tr>
</table>



	</center>
	<div id="Member"></div>
	</form>


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


<script type="text/javascript">
function goSubmit() {
frm.submit();
}

function kembali() {
	location.href='<?php echo base_url();?>entry/member';
}
</script>