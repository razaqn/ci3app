<?php

class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        return $query = $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan')
        ];

        $this->db->insert('siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('siswa', ['id' => $id]);
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }

    public function editDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }
    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('siswa')->result_array();
    }
}
