<?php

	class Mahasiswa extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Mahasiswa_model');
			$this->load->library('form_validation');
			
		}

		public function index()
		{
			$data['title'] = ('Daftar Mahasiswa');
			$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
			if ($this->input->post('cari')) {
				$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
			}

			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/index');
			$this->load->view('templates/footer');
		}

		public function tambah()
		{
			$data['title'] = ('Form Tambah Daftar Mahasiswa');
			$data['jurusan'] = ['Teknik Informatika', 'Teknik Sipil', 'Sistem Informatika', 'Teknik Mesin'];

			$this->form_validation->set_rules('nama', 'Name', 'required');
			$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/tambah', $data);
				$this->load->view('templates/footer');
			}
			else {
				$this->Mahasiswa_model->tambahDataMahasiswa();
				$this->session->set_flashdata('flash', 'ditambahkan');
				redirect('mahasiswa');
			}
		}

		public function hapus($id)
		{
			$this->Mahasiswa_model->hapusDataMahasiswa($id);
			$this->session->set_flashdata('flash', 'dihapus');
			redirect('mahasiswa');
		}

		public function detail($id)
		{
			$data['title'] = ('Detail Data Mahasiswa');
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/detail', $data);
			$this->load->view('templates/footer');
		}

		public function ubah($id)
		{
			$data['title'] = ('Form Ubah Daftar Mahasiswa');
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
			$data['jurusan'] = ['Teknik Informatika', 'Teknik Sipil', 'Sistem Informatika', 'Teknik Mesin'];

			$this->form_validation->set_rules('nama', 'Name', 'required');
			$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/ubah', $data);
				$this->load->view('templates/footer');
			}
			else {
				$this->Mahasiswa_model->ubahDataMahasiswa();
				$this->session->set_flashdata('flash', 'diubah');
				redirect('mahasiswa');
			}
		}
	}
