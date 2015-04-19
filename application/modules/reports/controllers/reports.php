<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

function __construct(){ 
    parent::__construct();
	$this->load->library('fungsi');
	$this->load->model('reportmodel','data_model');
}

function member(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['member']=$this->data_model->get_daftar_member();
	$data['main_content']='reports/member';
	$this->load->view('layout/template',$data);
}


function rmember(){
	$this->load->helper('pdf_helper');
	$data['f'] = $this->input->get('f');
	$data['t'] = $this->input->get('t');
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['user_members']=$this->data_model->get_daftar_member2();
	
	$this->load->view('reports/cetak_members',$data);
}






















/*==========================================================================================================================*/
function data_kupon(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['kupon']=$this->data_model->get_kupon();
	$this->load->view('entry/data_kupon',$data);
}




}












/*
function get_new_kupon() {
	$IdKupon = $this->data_model->get_max_id_kupon();
	$getMemberCounter = $this->config->item('api_database')."/member/membercounter";
	$dataMemberCounter = json_decode(file_get_contents($getMemberCounter));
	$satu="00000000";
	$dua = $dataMemberCounter->membercounter;
	$tiga = $today.''.substr_replace($satu, $dua, (strlen($satu) - strlen($dua)));
	return $tiga;
}
*/
/* End of file entry.php */
/* Location: ./application/modules/entry/controllers/entry.php */