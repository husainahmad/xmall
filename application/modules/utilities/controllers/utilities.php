<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilities extends CI_Controller {

function __construct(){ 
    parent::__construct();
	$this->load->library('fungsi');
	$this->load->model('utilitiesmodel','data_model');
}

function ubah_password(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='utilities/ubah_password';
	$this->load->view('layout/template',$data);
}


/*-----------------------------------------------------------------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------------------------------------------------------------------*/

function acount_profile(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='utilities/acount_profile';
	$this->load->view('layout/template',$data);
}



}

/* End of file utilities.php */
/* Location: ./application/modules/utilities/controllers/utilities.php */