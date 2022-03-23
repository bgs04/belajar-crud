<?php

class Login extends CI_Controller {
     
     public function index(){
          $this->load->view('login/index');
     }
     public function ceklogin(){
          $username =$this->input->post('username');
          $password =$this->input->post('password');
          $this->load->model('Siswa_model');
          $this->Siswa_model->ambilogin($username,$password);

     }
     public function logout(){
          $this->session->set_userdata('username', FALSE);
          $this->session->sess_destroy();
          redirect('login');
     }
}