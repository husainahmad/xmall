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

	<!--
	<form action="<?php echo base_url();?>entry/save_kupon" method="post" name="frm" id="frm">
	-->
	<center>
	<table>
	<tr><td align="center" colspan="2"><b>ID Card</b></td></tr>
	<tr>
	<td><input type="text"  onkeypress="showMember('show_member/'+IdCard.value, IdCard.value)" class="form-control" id="IdCard" name="IdCard" style="width:500px;text-align:center;" onKeyUp="enterID(this);"></td>
	<td><button style="margin-top:-1px;margin-left:5px;height:33px;" class="btn btn-primary" type="button" onClick="showMember('show_member/'+IdCard.value, IdCard.value)">....</button></td>
	</tr>
	</table>
	</center>
	<form action="<?php echo base_url();?>entry/save_kupon" method="post" name="frm" id="frm">	
	<div id="Member"></div>
	</form>
	<!--
	</form>
	-->

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
function enterID(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode==13) {
		showMember('show_member/'+IdCard.value, IdCard.value);
	}
}
function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 46 || charCode > 57))
    return false;
    return true;
}

function goCetak() {
	//var printContents = document.getElementById(divName).innerHTML;
    //var originalContents = document.body.innerHTML;
     //document.body.innerHTML = printContents;
     window.print();
     //document.body.innerHTML = originalContents;	 
}
function goSubmit() {

	if (frm.MemberId.value == ''){
		alert("Member harus diisi !"); 
		document.getElementById("IdCard").focus(); 
		return; 
	}

	if (frm.Tenant.value == ''){
		alert("Toko harus diisi !"); 
		document.getElementById("Tenant").focus(); 
		return; 
	}

frm.submit();
}
</script>