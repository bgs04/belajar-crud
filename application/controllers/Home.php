<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
     public function index($nama = '')
     {
          $this->load->model('Siswa_model');
          $this->Siswa_model->keamanan();

          $data['judul'] = "Halaman Home";
          $data['nama'] = $nama;
          $this->load->view('templates/header', $data);
          $this->load->view('home/index', $data);
          $this->load->view('templates/footer');
     }
}
