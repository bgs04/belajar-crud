<?php

class Siswa_model extends CI_Model
{
     public function getAllSiswa()
     {
          return $this->db->get('siswa')->result_array();
     }
     public function tambahDataSiswa()
     {  
          $data = [
               "nama"    => $this->input->post('nama', true),
               "nis"     => $this->input->post('nis', true),
               "kelas"   => $this->input->post('kelas', true),
     "tanggal-lahir"     => $this->input->post('tanggal-lahir', true),
               "jurusan" => $this->input->post('jurusan', true),
          ];
          $this->db->insert('siswa', $data);
     }

     public function hapusDataSiswa($id)
     {
          // $this->db->where('id', $id);
          $this->db->delete('siswa', ['id' => $id]);
     }
     public function getSiswaById($id)
     {
         return $this->db->get_where('siswa', ['id' => $id])->row_array();
     }

     public function ubahDataSiswa()
     {
          $data = [
               "nama" => $this->input->post('nama', true),
               "nis" => $this->input->post('nis', true),
               "kelas" => $this->input->post('kelas', true),
               "tanggal-lahir" => $this->input->post('tanggal-lahir', true),
               "jurusan" => $this->input->post('jurusan', true),
          ];
          $this->db->where('id', $this->input->post('id'));
          $this->db->update('siswa', $data);
     }

     public function ambilogin($username,$password){
          $this->db->where('username',$username);
          $this->db->where('password',$password);
          $query =$this->db->get('login');
          if($query->num_rows()>0){
               foreach ($query->result() as $row){
                    $sess =array('username'=> $row -> username,'password'=> $row->password);
               }
               $this->session->get_userdata($sess);
               redirect('home');
          }else{
               $this->session->set_flashdata('info','MAAF Username dan Pasword Anda Salah!,Mohon di coba kembali');
               redirect('login');
          }
     }

     public function keamanan(){
          $username = $this->session->sess_destroy('username');
          if(!empty($username)){
               $this->session->sess_destroy();
               redirect('login');
          }
     }
}
