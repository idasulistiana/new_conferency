<?php
	class Registration_m extends CI_Model{
		private $id;
		private $title;
		private $fname;
		private $lname;
		private $company;
		private $city;
		private $state;
		private $country;
		private $email;
		private $phone;
		private $address;
		private $abstract_category;
		private $title_speech;
		private $abstract_file;
		private $pass;

		public function setID($val){ $this->id = $val; }
		public function setTitle($val){ $this->title = $val; }
		public function setFName($val){ $this->fname = $val; }
		public function setLName($val){ $this->lname = $val; }
		public function setCompany($val){ $this->company = $val; }
		public function setCity($val){ $this->city = $val; }
		public function setState($val){ $this->state = $val; }
		public function setCountry($val){ $this->country = $val; }
		public function setEmail($val){ $this->email = $val; }
		public function setPhone($val){ $this->phone = $val; }
		public function setAddress($val){ $this->address = $val; }
		public function setAbstractCat($val){ $this->abstract_category = $val; }
		public function setTSpeech($val){ $this->title_speech = $val; }
		public function setAbstractFile($val){ $this->abstract_file = $val; }

		public function getID(){ return $this->id; }
		public function getTitle(){ return $this->title; }
		public function getFName(){ return $this->fname; }
		public function getLName(){ return $this->lname; }
		public function getCompany(){ return $this->company; }
		public function getCity(){ return $this->city; }
		public function getState(){ return $this->state; }
		public function getCountry(){ return $this->country; }
		public function getEmail(){ return $this->email; }
		public function getPhone(){ return $this->phone; }
		public function getAddress(){ return $this->address; }
		public function getAbstractCat(){ return $this->abstract_category; }
		public function getTSpeech(){ return $this->title_speech; }
		public function getAbstractFile(){ return $this->abstract_file; }

		public function index(){
			$data['content_view']='registration_presenter';
			$this->load->view('layout',$data);
			// print_r($data_view);

		}
		public function regis_sp(){
			$data_view['content_view']='registration_presenter';
			$this->load->view('layout',$data_view);
			$data = array(
				'title' => $this->getTitle(),
				'fname' => $this->getFName(),
				'lname' => $this->getLName(),
				'company' => $this->getCompany(),
				'city' => $this->getCity(),
				'state' => $this->getState(),
				'country' => $this->getCountry(),
				'email' => $this->getEmail(),
				'phone' => $this->getPhone(),
				'address' => $this->getAddress(),
				'abstract_category' => $this->getAbstractCat(),
				'title_speech' => $this->getTSpeech(),
				'abstract_file' => $this->getAbstractFile()
			);
			//$data1 = array('username' => $this->getUsername(), 'password' => md5($this->getPass()), 'status' => 2, 'ket' => 2);
			//$this->db->insert('tbl_user', $data1);
			return $this->db->insert('tbl_speaker', $data);

		}
		public function regis_pt(){
			$data_view['content_view']='registration_participant';
			$this->load->view('layout',$data_view);

			$data = array(
				'title' => $this->getTitle(),
				'fname' => $this->getFName(),
				'lname' => $this->getLName(),
				'company' => $this->getCompany(),
				'city' => $this->getCity(),
				'state' => $this->getState(),
				'country' => $this->getCountry(),
				'email' => $this->getEmail(),
				'phone' => $this->getPhone(),
				'address' => $this->getAddress()
				//'username' => $this->getUsername()
			);
			//$data1 = array('username' => $this->getUsername(), 'password' => md5($this->getPass()), 'status' => 3, 'ket' => 2);
			//$this->db->insert('tbl_user', $data1);
			return $this->db->insert('tbl_participant', $data);
		
		}
		public function cek(){
			$this->db->select('count(*) as jml')->from('tbl_user')->where('username', $this->getUsername());
			return $this->db->get()->row();
		}
	}
?>