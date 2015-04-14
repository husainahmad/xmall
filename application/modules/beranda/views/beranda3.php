<ul class="sidebar-menu">
<li class="active"><a href="<?php echo base_url()?>beranda/beranda3"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

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

	<div class="col-md-6">SELAMAT DATANG DI PLAZA</div>

	</div><div class="row"></div>

			<!-- END CUSTOM TABS -->
		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->