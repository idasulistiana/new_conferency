<?php

class About_us extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='about_us';
		$this->load->view('layout',$data);
	}
	function organization(){
		$data['content_view']='organization';
		$this->load->view('layout',$data);
	}
}
?>