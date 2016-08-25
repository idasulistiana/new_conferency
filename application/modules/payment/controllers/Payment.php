<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_m');
      	error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

	public function index(){
		$data['content_view']='confirm';
		$this->load->view('layout',$data);
	}
	public function confirm(){
		$this->Payment_m->setFName($this->input->post('fName'));
		$this->Payment_m->setLName($this->input->post('lName'));
		$this->Payment_m->setCompany($this->input->post('company'));
		$this->Payment_m->setEmail($this->input->post('email'));
		$this->Payment_m->setJml($this->input->post('amount'));
		$this->Payment_m->setBank($this->input->post('bank'));
		$this->Payment_m->setAName($this->input->post('aname'));
		$this->Payment_m->setANumber($this->input->post('anum'));
		$this->Payment_m->setMessage($this->input->post('message'));
		$this->Payment_m->setIdStatus($this->input->post('category'));
		$this->Payment_m->setSatuan($this->input->post('satuan'));
		
		$regis = $this->Payment_m->cek_idregis();
		if($regis){
			$this->Payment_m->setIdRegis($regis);
			if($this->input->post('category') == 2){
				$this->payment_m->setPaper($this->input->post('paperid'));
			}
			$this->Payment_m->tambah();
			$this->session->set_flashdata('sukses', 'Thank you. For more information please contact us at icbbogor2016@gmail.com');
		}else{
			$this->session->set_flashdata('error', 'Incorrect full name or email address. Please registration.');
			$this->session->set_flashdata('fName', $this->input->post('fName'));
			$this->session->set_flashdata('lName',$this->input->post('lName'));
			$this->session->set_flashdata('company',$this->input->post('company'));
			$this->session->set_flashdata('email',$this->input->post('email'));
			$this->session->set_flashdata('amount',$this->input->post('amount'));
			$this->session->set_flashdata('bank',$this->input->post('bank'));
			$this->session->set_flashdata('aname',$this->input->post('aname'));
			$this->session->set_flashdata('anum',$this->input->post('anum'));
			$this->session->set_flashdata('message',$this->input->post('message'));
			$this->session->set_flashdata('category',$this->input->post('category'));
			$this->session->set_flashdata('satuan',$this->input->post('satuan'));
			$this->session->set_flashdata('paperid',$this->input->post('paperid'));
		}
		redirect(site_url('payment'));
	}
}
?>