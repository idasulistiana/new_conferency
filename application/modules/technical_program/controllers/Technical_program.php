<?php

class Technical_program extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->model('Rundown_m');
   		error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
     
    }
	function index()
	{	
		$data['content_view']='technical_program';
		$this->load->view('layout',$data);
	}
	function call_paper()
	{	
		$data['content_view']='call_paper';
		$this->load->view('layout',$data);
	}
	function speaker_guidelines()
	{	
		$data['content_view']='speaker_guidelines';
		$this->load->view('layout',$data);
	}
	function proceeding()
	{	
		$data['content_view']='proceeding';
		$this->load->view('layout',$data);
	}
	function poster()
	{	
		$data['content_view']='poster';
		$this->load->view('layout',$data);
	}
	function rundown($x = 1)
	{	
		// $data['content_view']='poster';
		$data['content_view']='rundown';
		$data['rundown1'] = $this->Rundown_m->lihat('2016-10-10');
		$data['rundown2'] = $this->Rundown_m->lihat('2016-10-11');
		$this->load->view('layout',$data);
	}
	function abstract_guidelines()
	{	
		$data['content_view']='abstract_guidelines';
		$this->load->view('layout',$data);
	}
}
?>