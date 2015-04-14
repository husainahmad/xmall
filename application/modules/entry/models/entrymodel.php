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
	$result = $this->db->query("select m.MemberId, m.IdCard, m.NamaLengkap, m.Handphone, m.Email, count(k.KuponId) as JumlahKupon from member m left join kupon k on k.MemberId = m.MemberId where m.MemberId is not null group by m.MemberId")->result_array();
	return $result;
}

function get_daftar_member_by_namalengkap($NamaLengkap) {
	$result = $this->db->query("select m.MemberId, m.IdCard, m.NamaLengkap, m.Handphone, m.Email, count(k.KuponId) as JumlahKupon from member m 
				left join kupon k on k.MemberId = m.MemberId where m.MemberId is not null 
				and m.NamaLengkap like '%".$NamaLengkap."%' group by m.MemberId ")->result_array();
	return $result;
}

function get_max_id_member(){
	$MemberId = $this->db->query("select max(MemberId) as MemberId from member ");
	return $MemberId->row_array();
	}


function save_member() {
	$IdCard = $this->input->post('IdCard');
	$Sapaan = $this->input->post('Sapaan');
	$NomorIdentitas = $this->input->post('NomorIdentitas');
	$NamaLengkap = $this->input->post('NamaLengkap');
	$JenisKelamin = $this->input->post('Sapaan');
	$TempatLahir = $this->input->post('TempatLahir');
	$TanggalLahir = $this->input->post('TanggalLahir');
	$Alamat = $this->input->post('Alamat');
	$Kota = $this->input->post('Kota');
	$Email = $this->input->post('Email');
	$Handphone = $this->input->post('Handphone');
	$MemberSince = date('Y-m-d');
	$ValidThru = date('Y-m-d');
	$IsActive = '1';
	$LastUpdate = date('Y-m-d h:i:s');
	$UsersId = $this->session->userdata('sesUserName');

	$this->db->trans_start();
	$sql =  "insert into member (IdCard, Sapaan, NomorIdentitas, NamaLengkap, JenisKelamin, TempatLahir, TanggalLahir, Alamat, Kota, Email, Handphone, MemberSince, ValidThru, IsActive, LastUpdate, UsersId) values ('$IdCard', '$Sapaan', '$NomorIdentitas', '$NamaLengkap', '$JenisKelamin', '$TempatLahir', '$TanggalLahir', '$Alamat', '$Kota', '$Email', '$Handphone', '$MemberSince', '$ValidThru', '$IsActive', '$LastUpdate', '$UsersId');";
	$this->db->query($sql);
	$this->db->trans_complete();
	return;
}

function get_member_by_id($MemberId){
	$result = $this->db->query("select *, case Sapaan when 1 then 'Tn.' when 2 then 'Ny.' end as Sapa from member where MemberId = '$MemberId' ")->row_array();
	return $result;
}

function get_transaksi_by_id($MemberId){
	$result = $this->db->query("select t.*, rt.NamaTenant,  count(k.KuponId) as JumlahKupon from transaksi t left join kupon k on k.TransaksiId = t.TransaksiId left join ref_tenant rt on rt.IdTenant = t.IdTenant  where t.MemberId = '$MemberId' group by t.TransaksiId")->result_array();
	return $result;
}

function update_member() {
	$MemberId = $this->input->post('MemberId');
	$IdCard = $this->input->post('IdCard');
	$Sapaan = $this->input->post('Sapaan');
	$NomorIdentitas = $this->input->post('NomorIdentitas');
	$NamaLengkap = $this->input->post('NamaLengkap');
	$JenisKelamin = $this->input->post('Sapaan');
	$TempatLahir = $this->input->post('TempatLahir');
	$TanggalLahir = $this->input->post('TanggalLahir');
	$Alamat = $this->input->post('Alamat');
	$Kota = $this->input->post('Kota');
	$Email = $this->input->post('Email');
	$Handphone = $this->input->post('Handphone');
	$LastUpdate = date('Y-m-d h:i:s');
	$UsersId = $this->session->userdata('sesUserName');

	$this->db->trans_start();
	$sql =  " update member set IdCard='$IdCard', Sapaan='$Sapaan', NomorIdentitas = '$NomorIdentitas', NamaLengkap='$NamaLengkap', JenisKelamin='$JenisKelamin', TempatLahir='$TempatLahir', TanggalLahir='$TanggalLahir', Alamat='$Alamat', Kota = '$Kota', Email='$Email', Handphone='$Handphone', LastUpdate='$LastUpdate', UsersId='$UsersId' where MemberId = '$MemberId';";
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
	$result = $this->db->query("select m.MemberId, m.NamaLengkap, m.Alamat, count(k.KuponId) as JumlahKupon from member m left join kupon k on k.MemberId = m.MemberId where m.IdCard = '$IdCard' ")->row_array();
	return $result;
}

function get_max_id_kupon(){
	$Kupon = $this->db->query("select max(KuponId) as KuponId from kupon ");
	return $Kupon->row_array();
	}

function get_select_tenant() {
	$data = $this->db->query("select * from ref_tenant");
	$activity='';
	foreach ($data->result() as $row): 	
	$activity .= "<option value=$row->IdTenant>$row->NamaTenant</option>";
	endforeach;		
	return $activity;
}

function save_kupon() {
	$MemberId = $this->input->post('MemberId');
	$TanggalBelanja = date('Y-m-d');
	$Tenant = $this->input->post('Tenant');
	$Nominal = $this->input->post('Nominal');
	$JumlahKupon = $this->input->post('JumlahKupon');
	$LastUpdate = date('Y-m-d h:i:s');
	$UsersId = $this->session->userdata('sesUserName');

	$this->db->query("insert into transaksi (MemberId, TanggalBelanja, IdTenant, Nominal, LastUpdate, UsersId) values ('$MemberId', '$TanggalBelanja', '$Tenant', '$Nominal', '$LastUpdate', '$UsersId');");

	$Transaksi = $this->db->query("select last_insert_id() as TransaksiId")->row_array();
	$TransaksiId = $Transaksi['TransaksiId'];	
		
		for($i=1;$i<=$JumlahKupon;$i++){
			$NomorKupon = $this->input->post('NomorKupon'.$i);
			$this->db->trans_start();
			$sql =  "insert into kupon (TransaksiId, MemberId, NomorKupon, LastUpdate, UsersId) values ('$TransaksiId', '$MemberId', '$NomorKupon', '$LastUpdate', '$UsersId');";
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