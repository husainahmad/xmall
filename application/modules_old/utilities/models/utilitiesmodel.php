<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

Class Utilitiesmodel extends CI_Model
{

function Utilitiesmodel(){
	parent::__construct();
}
function get_user_acount($username){
	$result = $this->db->query("select * from users where YuserName = '$username'")->row_array();
	return $result;
}


}
/* End of file utilitiesmodel.php */
/* Location: ./application/modules/utilities/models/utilitiesmodel.php */