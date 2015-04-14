<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

Class Entrymodel extends CI_Model
{

function Entrymodel(){
	parent::__construct();
}

function get_user_acount($username){
	$result = $this->db->query("select * from users where YuserName = '$username'")->row_array();
	return $result;
}

function get_daftar_member() {
	$result = $this->db->query("select * from member")->result_array();
	return $result;
}

function save_member() {
	$IdCard = $this->input->post('IdCard');
	$noid = $this->input->post('noid');
	$Sapaan = $this->input->post('Sapaan');
	$NamaSingkat = $this->input->post('NamaSingkat');
	$NamaLengkap = $this->input->post('NamaLengkap');
	$JenisKelamin = $this->input->post('Sapaan');
	$TempatLahir = $this->input->post('TempatLahir');
	$TanggalLahir = $this->input->post('TanggalLahir');
	$Alamat = $this->input->post('Alamat');
	$Kelurahan = $this->input->post('Kelurahan');
	$Kecamatan = $this->input->post('Kecamatan');
	$Kabupaten = $this->input->post('Kabupaten');
	$Provinsi = $this->input->post('Provinsi');
	$Email = $this->input->post('Email');
	$Handphone = $this->input->post('Handphone');
	$LastUpdate = date('Y-m-d h:i:s');
	$UsersId = $this->session->userdata('sesUserName');

	$this->db->trans_start();
	$sql =  "insert into member (IdCard, noid, Sapaan, NamaSingkat, NamaLengkap, JenisKelamin, TempatLahir, TanggalLahir, Alamat, Kelurahan, Kecamatan, Kabupaten, Provinsi, Email, Handphone, LastUpdate, UsersId) values ('$IdCard', '$noid', '$Sapaan', '$NamaSingkat', '$NamaLengkap', '$JenisKelamin', '$TempatLahir', '$TanggalLahir', '$Alamat', '$Kelurahan', '$Kecamatan', '$Kabupaten', '$Provinsi', '$Email', '$Handphone', '$LastUpdate', '$UsersId');";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}

function get_member_by_id($MemberId){
	$result = $this->db->query("select *, case Sapaan when 1 then 'Tn.' when 2 then 'Ny.' end as Sapa from member where MemberId = '$MemberId' ")->row_array();
	return $result;
}

function update_member() {
	$MemberId = $this->input->post('MemberId');
	$IdCard = $this->input->post('IdCard');
	$noid = $this->input->post('noid');
	$Sapaan = $this->input->post('Sapaan');
	$NamaSingkat = $this->input->post('NamaSingkat');
	$NamaLengkap = $this->input->post('NamaLengkap');
	$JenisKelamin = $this->input->post('Sapaan');
	$TempatLahir = $this->input->post('TempatLahir');
	$TanggalLahir = $this->input->post('TanggalLahir');
	$Alamat = $this->input->post('Alamat');
	$Kelurahan = $this->input->post('Kelurahan');
	$Kecamatan = $this->input->post('Kecamatan');
	$Kabupaten = $this->input->post('Kabupaten');
	$Provinsi = $this->input->post('Provinsi');
	$Email = $this->input->post('Email');
	$Handphone = $this->input->post('Handphone');
	$LastUpdate = date('Y-m-d h:i:s');
	$UsersId = $this->session->userdata('sesUserName');

	$this->db->trans_start();
	$sql =  " update member set IdCard='$IdCard', noid='$noid', Sapaan='$Sapaan', NamaSingkat='$NamaSingkat', NamaLengkap='$NamaLengkap', JenisKelamin='$JenisKelamin', TempatLahir='$TempatLahir', TanggalLahir='$TanggalLahir', Alamat='$Alamat', Email='$Email', Handphone='$Handphone', LastUpdate='$LastUpdate', UsersId='$UsersId' where MemberId = '$MemberId';";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}

function delete_member($MemberId) {
	$this->db->trans_start();
	$sql1 =  " delete from kupon where MemberId = '$MemberId';";
	$sql2 =  " delete from member where MemberId = '$MemberId';";
	$this->db->query($sql1);
	$this->db->query($sql2);
	$this->db->trans_complete();
	return;
}

/*======================================================================================================*/

function get_header_member($IdCard){
	$result = $this->db->query("select * from member where IdCard = '$IdCard' ")->row_array();
	return $result;
}

function get_max_id_kupon(){
	$Kupon = $this->db->query("select max(KuponId) as KuponId from kupon ");
	return $Kupon->row_array();
	}

function get_select_tenant() {
	$data = $this->db->query("select * from tenant");
	$activity='';
	foreach ($data->result() as $row): 	
	$activity .= "<option value=$row->TenantId>$row->NamaTenant</option>";
	endforeach;		
	return $activity;
}

function save_kupon() {
	$MemberId = $this->input->post('MemberId');
	$JumlahKupon = $this->input->post('JumlahKupon');
	//$TanggalBelanja = $this->input->post('TanggalBelanja');
	$TanggalBelanja = date('Y-m-d');
	$Tenant = $this->input->post('Tenant');
	$LastUpdate = date('Y-m-d h:i:s');
	$UsersId = $this->session->userdata('sesUserName');

		for($i=0;$i<=$JumlahKupon;$i++){
			$NomorKupon = $this->input->post('NomorKupon'.$i);
			$this->db->trans_start();
			$sql =  "insert into kupon (MemberId, NomorKupon, TanggalBelanja, Tenant, LastUpdate, UsersId) values ('$MemberId', '$NomorKupon', '$TanggalBelanja', '$Tenant', '$LastUpdate', '$UsersId');";
			$this->db->query($sql);
		}
	$this->db->trans_complete();
	return;
}

/*======================================================================================================*/
function get_select_hadiah() {
	$data = $this->db->query("select * from hadiah");
	$activity='';
	foreach ($data->result() as $row): 	
	$activity .= "<option value=$row->KodeHadiah>$row->NamaHadiah</option>";
	endforeach;		
	return $activity;
}

function get_gambar_hadiah($KodeHadiah){
	$result = $this->db->query("select Gambar from hadiah where KodeHadiah = '$KodeHadiah' ")->row_array();
	return $result;
}




/*======================================================================================================*/
function get_kupon(){
	$result = $this->db->query("select * from kupon ")->result_array();
	return $result;
}

function get_member_pemenang($MemberId){
	$result = $this->db->query("select * from member where MemberId = '$MemberId' ")->row_array();
	return $result;
}


}
/* End of file entrymodel.php */
/* Location: ./application/modules/entry/models/entrymodel.php */