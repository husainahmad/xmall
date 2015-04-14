<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

Class Mastermodel extends CI_Model
{

function Mastermodel(){
	parent::__construct();
}

function get_user_acount($username){
	$result = $this->db->query("select * from users where YuserName = '$username'")->row_array();
	return $result;
}


/* ==================================================================================================================================================== */

function get_kategori_tenant_list() {
	$result = $this->db->query("select * from ref_kategori_tenant where IdKategoriTenant is not null ")->result_array();
	return $result;
}

function save_kategori_tenant() {
	$KategoriTenant = $this->input->post('KategoriTenant');

	$this->db->trans_start();
	$sql =  " insert into ref_kategori_tenant (KategoriTenant) values ('$KategoriTenant');";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}

function get_kategori_tenant_by_id($IdKategoriTenant){
	$result = $this->db->query("select * from ref_kategori_tenant where IdKategoriTenant = '$IdKategoriTenant' ")->row_array();
	return $result;
}

function update_kategori_tenant() {
	$IdKategoriTenant = $this->input->post('IdKategoriTenant');
	$KategoriTenant = $this->input->post('KategoriTenant');		

	$this->db->trans_start();
	$sql =  " update ref_kategori_tenant set KategoriTenant = '$KategoriTenant' where IdKategoriTenant = '$IdKategoriTenant';";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}

function delete_kategori_tenant($IdKategoriTenant) {
	$this->db->trans_start();
	$sqla =  " delete from ref_tenant where IdKategoriTenant = '$IdKategoriTenant';";
	$this->db->query($sqla);
	$sqlb =  " delete from ref_kategori_tenant where IdKategoriTenant = '$IdKategoriTenant';";
	$this->db->query($sqlb);

	$this->db->trans_complete();
	return;
}


/* ==================================================================================================================================================== */

function get_kat_tenant_list() {
	$result = $this->db->query("select rkt.IdKategoriTenant, rkt.KategoriTenant, count(rt.IdTenant) as JumlahTenant from ref_kategori_tenant rkt left join ref_tenant rt on rt.IdKategoriTenant = rkt.IdKategoriTenant group by rkt.IdKategoriTenant order by rkt.IdKategoriTenant asc ")->result_array();
	return $result;
}

function get_kat_tenant($IdKategoriTenant){
	$result = $this->db->query("select * from ref_kategori_tenant where IdKategoriTenant = '$IdKategoriTenant' ")->row_array();
	return $result;
}

function get_tenant_list($IdKategoriTenant) {
	$result = $this->db->query("select * from ref_tenant where IdKategoriTenant = '$IdKategoriTenant' order by IdTenant asc")->result_array();
	return $result;
}

function save_tenant() {
	$IdKategoriTenant = $this->input->post('IdKategoriTenant');
	$Lantai = $this->input->post('Lantai');
	$NamaTenant = $this->input->post('NamaTenant');
	$Keterangan = $this->input->post('Keterangan');

	$this->db->trans_start();
	$sql =  " insert into ref_tenant (IdKategoriTenant, Lantai, NamaTenant, Keterangan) values ('$IdKategoriTenant','$Lantai','$NamaTenant','$Keterangan');";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}

function get_tenant_by_id($IdTenant){
	$result = $this->db->query("select rt.*, rkt.KategoriTenant from ref_tenant rt join ref_kategori_tenant rkt on rkt.IdKategoriTenant = rt.IdKategoriTenant where IdTenant = '$IdTenant' ")->row_array();
	return $result;
}

function update_tenant() {
	$IdTenant = $this->input->post('IdTenant');
	$IdKategoriTenant = $this->input->post('IdKategoriTenant');
	$Lantai = $this->input->post('Lantai');
	$NamaTenant = $this->input->post('NamaTenant');
	$Keterangan = $this->input->post('Keterangan');

	$this->db->trans_start();
	$sql =  " update ref_tenant set IdKategoriTenant = '$IdKategoriTenant', Lantai = '$Lantai', NamaTenant = '$NamaTenant', Keterangan = '$Keterangan'  where IdTenant = '$IdTenant';";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}


function delete_tenant($IdTenant) {
	$this->db->trans_start();
	$sql =  " delete from ref_tenant where IdTenant = '$IdTenant';";
	$this->db->query($sql);

	$this->db->trans_complete();
	return;
}

}
/* End of file mastermodel.php */
/* Location: ./application/modules/master/models/mastermodel.php */