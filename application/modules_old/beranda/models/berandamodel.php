<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

Class Berandamodel extends CI_Model
{

function Berandamodel(){
	parent::__construct();
}

function get_user_acount($username){
	$result = $this->db->query("select * from users where YuserName = '$username'")->row_array();
	return $result;
}

}
/* End of file berandamodel.php */
/* Location: ./application/modules/beranda/models/berandamodel.php */