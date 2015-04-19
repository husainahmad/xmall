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
	<li><a href="<?php echo base_url();?>master/tenant" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tenant</a></li>
</ul>
</li>

<li class="treeview active"><a href="#"><i class="fa fa-edit"></i><span>Report</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
	<li><a href="<?php echo base_url();?>reports/member" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Pengunjung</a></li>
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
	
							<div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Laporan Data Pengunjung</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Date masks:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask" name="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask2" name="datemask2" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="form-group">
                                    	<button id="btnCari" name="btnCari"
												class="btn btn-primary btn" onclick="getReport()"><i class="fa fa-search"></i>  Cari</button>
                                    </div>
                               </div>
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

<script type="text/javascript">
	function getReport() {
		 var datemask = $('#datemask').val(); 
         var datemask2 = $('#datemask2').val(); 

         window.open("<?php echo base_url()?>reports/rmember/?f="+datemask+"&t="+datemask2, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=300, left=500, width=700, height=500");
	}
</script>
<!--

//-->
</script>
		
