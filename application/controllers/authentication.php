<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller {

function Authentication() {
	parent::__construct();
	$this->load->model(array('authenticationmodel'));
}
	
function index(){
	$this->load->view('authentication');
}

function process_login(){
	$this->form_validation->set_rules('txtusername','Username', 'required');
	$this->form_validation->set_rules('txtpassword','Password', 'required'); 
	$this->form_validation->set_message('required', 'Form Validation ==> Silahkan isi %s.');
	
if ($this->form_validation->run()==TRUE){
	$username = $this->input->post('txtusername');
	$password = $this->input->post('txtpassword');
	
	if ($this->authenticationmodel->check_user($username, $password)=== TRUE){
		$Attributes = $this->authenticationmodel->get_attributes($username);
		$KodeGroups = $Attributes['KodeGroups'];	
		$NamaGroups = $this->authenticationmodel->get_nama_groups($KodeGroups);

		/*$KodeUnit = $Attributes['KodeUnit'];	
		$NamaUnit = $this->authenticationmodel->get_nama_unit($KodeGroups, $KodeUnit);*/
							
		$data = array('login'         => TRUE, 
					  'sesUserName'   => $username,
					  'sesKodeGroups' => $KodeGroups,
					  'sesNamaGroups'   => $NamaGroups['NamaGroups']
					  //'sesKodeUnit'   => $KodeUnit
					  );
		$this->session->set_userdata($data);
		$respon->sukses = true;
		redirect('beranda');
		}else{
		redirect('authentication');
		}	
}else{
	$respon->gagal = validation_errors();
	echo json_encode($respon);
}

}//end function

function logout(){
	$this->session->sess_destroy();
	redirect('authentication');
}

}

/* End of file authentication.php */
/* Location: ./system/application/modules/authentication/controllers/authentication.php */