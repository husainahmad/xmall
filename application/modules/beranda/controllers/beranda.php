<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

function __construct(){ 
    parent::__construct();
	$this->load->library('fungsi');
	$this->load->model('berandamodel','data_model');
}
	
function index(){
	$KodeGroups = $this->session->userdata('sesKodeGroups');
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	
	if ($KodeGroups == '1') {
		$data['main_content']='beranda/beranda1';
		
	} else  if ($KodeGroups == '2') {
		$data['main_content']='beranda/beranda2';
					
	} else  if ($KodeGroups == '3') { 
		$data['main_content']='beranda/beranda3';
					
	} else  if ($KodeGroups == '4') { 
		$data['main_content']='beranda/beranda4';
				
	} else  if ($KodeGroups == '5') { 
		$data['main_content']='beranda/beranda5';	
	} 
	$this->load->view('layout/template',$data);
}


/* ============================================================================= */
/* ========================== BERANDA ADMINISTRATOR ============================ */	
/* ============================================================================= */

function beranda1(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='beranda/beranda1';
	$this->load->view('layout/template',$data);
}

/* ============================================================================= */
/* ==================== BERANDA MANAJEMEN MALL ================================= */	
/* ============================================================================= */

function beranda2(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='beranda/beranda2';
	$this->load->view('layout/template',$data);
}


/* ============================================================================= */
/* ==================== BERANDA CUSTOMER SERVICE =============================== */	
/* ============================================================================= */

function beranda3(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='beranda/beranda3';
	$this->load->view('layout/template',$data);
}


/* ============================================================================= */
/* ========================= BERANDA TOKO/TENANT =============================== */	
/* ============================================================================= */

function beranda4(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='beranda/beranda4';
	$this->load->view('layout/template',$data);
}

/* ============================================================================= */
/* ========================= BERANDA PENGUNJUNG ================================ */	
/* ============================================================================= */

function beranda5(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='beranda/beranda5';
	$this->load->view('layout/template',$data);
}

}
/* End of file beranda.php */
/* Location: ./application/modules/beranda/controllers/beranda.php */