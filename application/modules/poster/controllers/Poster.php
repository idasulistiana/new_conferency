<?php

class Poster extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='poster';
		$this->load->view('layout',$data);
	}
}
?>