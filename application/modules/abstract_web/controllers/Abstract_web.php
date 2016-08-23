<?php

class Abstract_web extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    	}
	function index()
	{	
		$data['content_view']='abstract_web';
		$this->load->view('layout',$data);
	}
}
?>