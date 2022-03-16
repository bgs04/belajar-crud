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
}
