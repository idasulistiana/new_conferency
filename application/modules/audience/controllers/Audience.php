<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audience extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Audience_m');
      	error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

	public function index(){
		if($this->session->userdata('status') == 3){
			$data['content_view']='home_audience';
			$this->load->view('layout',$data);
		}else
			redirect(site_url());
	}
}
?>