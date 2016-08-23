<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Speaker_m');
		$this->load->library('upload');
		$this->load->helper(array('form','file'));
      	error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

	public function index(){
		if($this->session->userdata('status') == 2){
			$data['content_view']='home_speaker';
			$this->load->view('layout',$data);
		}else
			redirect(site_url());
	}
	public function speaker_abstract(){
		if($this->session->userdata('status') == 2){
			$data['content_view']='abstract_speaker';
			$data['abstract'] = $this->Speaker_m->checkAbstract();
			$this->load->view('layout',$data);
		}else
			redirect(site_url());
	}
	public function change(){
		if($this->session->userdata('status') == 2){
			$data['content_view']='cabs_speaker';
			$this->load->view('layout',$data);
		}else
			redirect(site_url());
	}
	public function pupload(){
		if($this->session->userdata('status') == 2){
			$con['upload_path'] = './assets/uploads/pdf/';
			$con['allowed_types'] = 'pdf';
			$this->upload->initialize($con);
			$this->load->library('upload', $con);
			if (!($this->upload->do_upload('userfile'))) {
				$this->session->set_flashdata('error',$this->upload->display_errors());
				redirect(site_url('Speaker/speaker_abstract'));
			}else{
				$data = array(
					'nm_pdf' => $this->upload->data('file_name'),
					'tipe_pdf' => $this->upload->data('file_type')
				);
				$this->Speaker_m->setAbstractFile($data['nm_pdf']);
				$this->Speaker_m->addAbstract();
				redirect(site_url('Speaker/speaker_abstract'));
			}
		}else
			redirect(site_url());
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url());
	}
}
?>