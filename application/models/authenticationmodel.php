<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

Class Authenticationmodel extends CI_Model
{

function Authenticationmodel(){
		parent::__construct();
}

function check_user($username, $password){
		$query=$this->db->get_where('users', array('YuserName'=>$username)); 
		if ($query->num_rows() > 0){
			$result = $query->row_array();
			if(trim($result["Passwort"]) == "" and $password == ""){
				return TRUE;
			}else if ($result["Passwort"] == md5($password)){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}

function get_attributes($username){
		$this->db->select('*');
		$this->db->where('YuserName', $username);
		$Attributes = $this->db->get('users');
		return $Attributes->row_array();
	}

function get_nama_groups($KodeGroups){
		$this->db->select('NamaGroups');
		$this->db->where('KodeGroups', $KodeGroups);
		$NamaGroups = $this->db->get('groups');
		return $NamaGroups->row_array();
	}

/*function get_nama_unit($KodeGroups, $KodeUnit){
	
	if ($KodeGroups == '1')	{
		$this->db->select('NamaDirektorat as NamaUnit');
		$this->db->where('KodeDirektorat', $KodeUnit);
		$NamaUnit = $this->db->get('ref_direktorat_bappenas');

	} else if ($KodeGroups == '2') {
		$this->db->select('NamaDirektorat as NamaUnit');
		$this->db->where('KodeDirektorat', $KodeUnit);
		$NamaUnit = $this->db->get('ref_direktorat_bappenas');

	} else if ($KodeGroups == '3') {
		$this->db->select('NamaKementerian as NamaUnit');
		$this->db->where('KodeKementerian', $KodeUnit);
		$NamaUnit = $this->db->get('ref_kementerian');
		
	} else if ($KodeGroups == '4') {
		$this->db->select('NamaUnitOrganisasi as NamaUnit');
		$this->db->where('KodeUnitOrganisasi', $KodeUnit);
		$NamaUnit = $this->db->get('ref_unit_organisasi');

	} else if ($KodeGroups == '5') {
		$this->db->select('NamaKementerian as NamaUnit');
		$this->db->where('KodeKementerian', $KodeUnit);
		$NamaUnit = $this->db->get('ref_kementerian');

	} else if ($KodeGroups == '6') {
		$this->db->select('NamaBappedaProvinsi as NamaUnit');
		$this->db->where('KodeBappedaProvinsi', $KodeUnit);
		$NamaUnit = $this->db->get('ref_bappeda_provinsi');

	} else if ($KodeGroups == '7') {
		$this->db->select('NamaBappedaKabupaten as NamaUnit');
		$this->db->where('KodeBappedaKabupaten', $KodeUnit);
		$NamaUnit = $this->db->get('ref_bappeda_kabupaten');

	} else if ($KodeGroups == '8') {
		$this->db->select('NamaSkpd as NamaUnit');
		$this->db->where('KodeSkpd', $KodeUnit);
		$NamaUnit = $this->db->get('ref_skpd');

	} else if ($KodeGroups == '9') {	
		$this->db->select('NamaSatker as NamaUnit');
		$this->db->where('KodeSatker', $KodeUnit);
		$NamaUnit = $this->db->get('ref_satker');
	}

		return $NamaUnit->row_array();
	}
	*/
}

/* End of file authenticationmodel.php */
/* Location: ./application/modules/authentication/models/authenticationmodel.php */