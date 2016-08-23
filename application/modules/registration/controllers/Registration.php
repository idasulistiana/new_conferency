<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registration_m');
		$this->load->library('upload');
		$this->load->helper(array('form','file'));
      	error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

	public function index(){
		/*$data['content_view']='registration_presenter';
		$this->load->view('layout',$data);
	}
	public function participant(){*/
		$data['content_view']='registration_participant';
		$this->load->view('layout',$data);
	}
	public function regis($x){
		//$this->Registration_m->setUsername($this->input->post('user'));
			$this->Registration_m->setTitle($this->input->post('title'));
			$this->Registration_m->setFName($this->input->post('fName'));
			$this->Registration_m->setLName($this->input->post('lName'));
			$this->Registration_m->setCompany($this->input->post('company'));
			$this->Registration_m->setCity($this->input->post('city'));
			$this->Registration_m->setState($this->input->post('state'));
			$this->Registration_m->setCountry($this->input->post('country'));
			$this->Registration_m->setEmail($this->input->post('email'));
			$this->Registration_m->setPhone($this->input->post('phone'));
			$this->Registration_m->setAddress($this->input->post('address'));
			//$this->Registration_m->setPass($this->input->post('pass'));
			if($x == 'speaker'){
				$this->Registration_m->setAbstractCat($this->input->post('category'));
				$this->Registration_m->setTSpeech($this->input->post('ctitle'));
				$con['upload_path'] = './assets/uploads/pdf/';
				$con['allowed_types'] = 'pdf';
				$this->upload->initialize($con);
				$this->load->library('upload', $con);
				if (!($this->upload->do_upload('userfile'))) {
					$this->session->set_flashdata('error',$this->upload->display_errors());
					$this->session->set_flashdata('title', $this->input->post('title'));
					$this->session->set_flashdata('fName', $this->input->post('fName'));
					$this->session->set_flashdata('lName', $this->input->post('lName'));
					$this->session->set_flashdata('company', $this->input->post('company'));
					$this->session->set_flashdata('city', $this->input->post('city'));
					$this->session->set_flashdata('state', $this->input->post('state'));
					$this->session->set_flashdata('country', $this->input->post('country'));
					$this->session->set_flashdata('email', $this->input->post('email'));
					$this->session->set_flashdata('phone', $this->input->post('phone'));
					$this->session->set_flashdata('address', $this->input->post('address'));
					redirect(site_url('Registration/'));
				}else{
					$data = array(
						'nm_pdf' => $this->upload->data('file_name'),
						'tipe_pdf' => $this->upload->data('file_type')
					);
					$this->Registration_m->setAbstractFile($data['nm_pdf']);
					$this->Registration_m->regis_sp();
					$rg = '';
					$this->session->set_flashdata('sukses', 'Thankyou for Submit Your Abstract!');
					redirect(site_url('Abstract_web/'));
				}
			}else{
				$rg = 'participant';
				$this->Registration_m->regis_pt();
				$this->session->set_flashdata('sukses', 'Thankyou for Registration!');
				redirect(site_url('Registration/'));
			}
	}
}
?>