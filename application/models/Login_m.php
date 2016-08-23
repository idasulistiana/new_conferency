<?php
	class Login_m extends CI_Model{
		private $username;
		private $pass;
		private $status;
		private $ket;

		public function setUsername($val){ $this->username = $val; }
		public function setPass($val){ $this->pass = $val; }
		public function setStatus($val){ $this->status = $val; }
		public function setKet($val){ $this->ket = $val; }

		public function getUsername(){ return $this->username; }
		public function getPass(){ return $this->pass; }
		public function getStatus(){ return $this->status; }
		public function getKet(){ return $this->ket; }

		public function login(){
			$this->db->select('*')->from('tbl_user')->where('username', $this->getUsername());
			$this->db->where('password', md5($this->getPass()));
			return $this->db->get()->row();
		}
	}
?>