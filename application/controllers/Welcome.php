<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){
		// $this->session->set_userdata(['login' => true]);
		$this->session->set_userdata([
			'login' => true,
			'level' => 'admin',
		]);
	}

	public function test_session(){
		if($this->session->userdata('login') != true){
			echo $this->session->userdata('login');
		}else{
			echo $this->session->userdata('login');
		}
	}

	public function admin(){
		if($this->session->userdata('login') != true){
			echo $this->session->userdata('login');
			echo $this->session->userdata('level');
		}else{
			if($this->session->userdata('level')==='admin'){
				echo 'saya bukan admin';
			}
		}
	}

	public function logout(){
		$this->session->destroy();
	}
}
