<?php

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
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        if ($this->input->post('keyword')) {
            $data['siswa'] = $this->Siswa_model->cariDataSiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Siswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            //$this->session->set_Flash('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function hapus($id)
    {
        $this->Siswa_model->hapusDataSiswa($id);
        redirect('siswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Edit Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $data['jurusan'] = ['tehnik mesin', 'rekayasa perangkat lunak', 'tehnik komputer', 'alat berat'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->editDataSiswa();
            //$this->session->set_Flash('flash', 'Diedit');
            redirect('siswa');
        }
    }
}
