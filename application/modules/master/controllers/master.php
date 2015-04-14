<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

function __construct(){ 
    parent::__construct();
	$this->load->library('fungsi');
	$this->load->model('mastermodel','data_model');
}

/*-----------------------------------------------------------------------------------------------------------------------------------------------*/

function kategori_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['kategori_tenant_list'] = $this->data_model->get_kategori_tenant_list();
	$data['main_content']='master/kategori_tenant';
	$this->load->view('layout/template',$data);
}

function add_kategori_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));

	$data['main_content']='master/kategori_tenant_add';
	$this->load->view('layout/template',$data);
}

function save_kategori_tenant(){	
	$this->data_model->save_kategori_tenant();
	redirect('master/kategori_tenant','refresh');
}

function edit_kategori_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$IdKategoriTenant = $this->uri->segment(3);
	$data['kategori_tenant']=$this->data_model->get_kategori_tenant_by_id($IdKategoriTenant);
	$data['main_content']='master/kategori_tenant_edit';
	$this->load->view('layout/template',$data);
}

function update_kategori_tenant(){	
	$this->data_model->update_kategori_tenant();
	redirect('master/kategori_tenant','refresh');
}

function delete_kategori_tenant(){	
	$IdKategoriTenant = $this->uri->segment(3);
	$this->data_model->delete_kategori_tenant($IdKategoriTenant);
	redirect('master/kategori_tenant','refresh');
}

/*-----------------------------------------------------------------------------------------------------------------------------------------------*/

function kat_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$data['kat_tenant_list'] = $this->data_model->get_kat_tenant_list();
	$data['main_content']='master/kat_tenant';
	$this->load->view('layout/template',$data);
}

function list_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$IdKategoriTenant = $this->uri->segment(3);
	$data['kat_tenant'] = $this->data_model->get_kat_tenant($IdKategoriTenant);
	$data['tenant_list'] = $this->data_model->get_tenant_list($IdKategoriTenant);
	$data['main_content']='master/tenant_list';
	$this->load->view('layout/template',$data);
}

function add_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$IdKategoriTenant = $this->uri->segment(3);
	$data['kat_tenant'] = $this->data_model->get_kat_tenant($IdKategoriTenant);
	$data['main_content']='master/tenant_add';
	$this->load->view('layout/template',$data);
}

function save_tenant(){	
	$IdKategoriTenant = $this->input->post('IdKategoriTenant');
	$this->data_model->save_tenant();
	redirect('master/list_tenant/'.$IdKategoriTenant.'','refresh');
}

function edit_tenant(){
	$data['user_acount']=$this->data_model->get_user_acount($this->session->userdata('sesUserName'));
	$IdTenant = $this->uri->segment(3);
	$data['tenant']=$this->data_model->get_tenant_by_id($IdTenant);
	$data['main_content']='master/tenant_edit';
	$this->load->view('layout/template',$data);
}

function update_tenant(){	
	$IdKategoriTenant = $this->input->post('IdKategoriTenant');
	$this->data_model->update_tenant();
	redirect('master/list_tenant/'.$IdKategoriTenant.'','refresh');
}

function delete_tenant(){	
	$IdTenant = $this->uri->segment(3);
	$IdKategoriTenant = $this->uri->segment(4);
	$this->data_model->delete_tenant($IdTenant);
	redirect('master/list_tenant/'.$IdKategoriTenant.'','refresh');
}

}

/* End of file master.php */
/* Location: ./application/modules/master/controllers/master.php */