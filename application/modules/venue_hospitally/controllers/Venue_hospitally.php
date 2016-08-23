<?php
class Venue_hospitally extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    	}

	function index()
	{	
		$data['content_view']='venue_hospitally';
		$this->load->view('layout',$data);
	}
}
?>