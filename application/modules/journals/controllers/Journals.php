<?php

class Journals extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='journals';
		$this->load->view('layout',$data);
	}
}
?>