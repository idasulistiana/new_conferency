<?php

class Home extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
	function index()
	{	
		$data['content_view']='home';
		$this->load->view('layout',$data);
	}
}
?>