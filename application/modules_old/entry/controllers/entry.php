<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entry extends CI_Controller {

function __construct(){ 
    parent::__construct();
	$this->load->library('fungsi');
	$this->load->model('entrymodel','data_model');
}

function member(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['member']=$this->data_model->get_daftar_member();
	$data['main_content']='entry/member';
	$this->load->view('layout/template',$data);
}

function add_member(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['IdCard'] = $this->random_number(3).'-'.$this->random_string(3).'-'.$this->random_number(3);

	$data['main_content']='entry/member_add';
	$this->load->view('layout/template',$data);
}

function random_number($length) {
		$len = $length;
		$base='1234567890';
		$max=strlen($base)-1;
		$activatecode ='';
		mt_srand((double)microtime()*1000000);
		while (strlen($activatecode)<$len+1)
			$activatecode.=$base{mt_rand(0,$max)};		
		return $activatecode;
	} 

function random_string($length) {
		$len = $length;
		$base='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$max=strlen($base)-1;
		$activatecode ='';
		mt_srand((double)microtime()*1000000);
		while (strlen($activatecode)<$len+1)
			$activatecode.=$base{mt_rand(0,$max)};		
		return $activatecode;
	} 

function save_member(){	
	$this->data_model->save_member();
	redirect('entry/member','refresh');
}

function detail_member(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$MemberId = $this->uri->segment(3);
	$data['member']=$this->data_model->get_member_by_id($MemberId);
	$data['main_content']='entry/member_detail';
	$this->load->view('layout/template',$data);
}

function show_barcode($kode) {
	$height = isset($_GET['height']) ? mysql_real_escape_string($_GET['height']) : '50';   $width = isset($_GET['width']) ? mysql_real_escape_string($_GET['width']) : '1'; //1,2,3,dst
	$this->load->library('zend');
	$this->zend->load('Zend/Barcode');
	$barcodeOPT = array(
		'text' => $kode,
		'barHeight'=> $height,
		'factor'=>$width,
		);
	
	$renderOPT = array();
	$render = Zend_Barcode::factory('code39', 'image', $barcodeOPT, $renderOPT)->render();
	}


function edit_member(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$MemberId = $this->uri->segment(3);
	$data['member']=$this->data_model->get_member_by_id($MemberId);
	$data['main_content']='entry/member_edit';
	$this->load->view('layout/template',$data);
}

function update_member(){	
	$this->data_model->update_member();
	redirect('entry/member','refresh');
}

function delete_member(){	
	$MemberId = $this->uri->segment(3);
	$this->data_model->delete_member($MemberId);
	redirect('entry/member','refresh');
}

/*==========================================================================================================================*/
function kupon(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='entry/kupon';
	$this->load->view('layout/template',$data);
}

function show_member(){
	$IdCard = $this->uri->segment(3);
	$data['IdCard']=$IdCard;
	$data['header_member']=$this->data_model->get_header_member($IdCard);
	$this->load->view('entry/show_member',$data);	
}

function show_kupon(){
	$Nominal = $this->uri->segment(3);
	$JumlahKupon = $Nominal / 100000;
	$Kupon = $this->data_model->get_max_id_kupon();
	$data['JumlahKupon']=$JumlahKupon;
	$data['Nominal']=$Nominal;
	$data['KuponId']=$Kupon['KuponId'];
	$this->load->view('entry/show_kupon',$data);	
}

function save_kupon(){	
	$this->data_model->save_kupon();
	redirect('entry/kupon','refresh');
}


/*==========================================================================================================================*/
function undian(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['main_content']='entry/undian';
	$this->load->view('layout/template',$data);
}

function show_hadiah(){
	$KodeHadiah = $this->uri->segment(3);
	$data['gambar']=$this->data_model->get_gambar_hadiah($KodeHadiah);
	$this->load->view('entry/show_hadiah',$data);	
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