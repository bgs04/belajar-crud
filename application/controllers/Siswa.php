<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('Siswa_model');
          $this->load->library('form_validation');
     }
     public function index()
     {
          $data['judul'] = 'Halaman Daftar Siswa';
          $data['siswa'] = $this->Siswa_model->getAllSiswa();
          $this->load->view('templates/header', $data);
          $this->load->view('siswa/index', $data);
          $this->load->view('templates/footer');
     }
     public function tambah()
     {
          $data['judul'] = 'Form Tambah Data Siswa';

          $this->form_validation->set_rules('nama', 'Username', 'required');
          $this->form_validation->set_rules('nis', 'Nis', 'required|numeric');
          $this->form_validation->set_rules('kelas', 'Kelas', 'required');
          $this->form_validation->set_rules('tanggal-lahir', 'Tanggal-Lahir', 'required');

          if ($this->form_validation->run() == FALSE) {
               $this->load->view('templates/header', $data);
               $this->load->view('siswa/tambah');
               $this->load->view('templates/footer');
          } else {
               $this->Siswa_model->tambahDataSiswa();
               $this->session->set_flashdata('flash','Ditambah');
               redirect('siswa');
          }
     }
     public function hapus($id)
     {
          $this->Siswa_model->hapusDataSiswa($id);
          $this->session->set_flashdata('flash','Dihapus');
          redirect('siswa');
     }
     public function ubah($id)
     {
          $data['judul'] = 'Form Ubah Data Siswa';
          $data['siswa'] = $this->Siswa_model->getSiswaById($id);
          $data['jurusan']=['Rekayasa Perangkat Lunak','Teknik Komputer Dan Jaringan','Teknik Mesin','Multimedia','Arsitek'];
          $this->form_validation->set_rules('nama', 'Username', 'required');
          $this->form_validation->set_rules('nis', 'Nis', 'required|numeric');
          $this->form_validation->set_rules('kelas', 'Kelas', 'required');
          $this->form_validation->set_rules('tanggal-lahir', 'Tanggal-Lahir', 'required');
          if ($this->form_validation->run() == FALSE) {
               $this->load->view('templates/header', $data);
               $this->load->view('siswa/ubah', $data);
               $this->load->view('templates/footer');
          } else {
               $this->Siswa_model->ubahDataSiswa();
          $this->session->set_flashdata('flash','Diubah');
               redirect('siswa');
          }
     }
}
