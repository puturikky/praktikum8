<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class AnggotaController extends CI_Controller { 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Anggota');
	}
	public function index() { 
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$data['dataAnggota'] = $this->Anggota->getListAnggota();
		$this->template->load('template','anggota/index',$data);
	}
	public function create(){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
		$this->template->load('template','anggota/create');
	}
	public function store(){
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
		$this->template->load('template','anggota/create');
	}
	public function store(){
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$data = array(
			'nama' => $this->input->post('nama'),
			'prodi' => $this->input->post('prodi'),
			'jenjang' => $this->input->post('jenjang'),
			'alamat' => $this->input->post('alamat')
		);
		$result = $this->Anggota->insert($data);
		echo json_encode($result);
	}
	public function delete(){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$result = $this->Anggota->delete($this->input->post('kode_anggota'));
		echo json_encode($result);
	}	  
	public function edit($kode_anggota){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$data['dataAnggota'] = $this->Anggota->getDataAnggota($kode_anggota);
		$this->template->load('template','anggota/edit',$data);
	}
	public function update($kode_anggota){
<<<<<<< HEAD
		if (!$this->session->userdata('isLoggedIn')) redirect(base_url().'login','refresh');
=======
>>>>>>> 22eae7a6fcdc249ff6899600309c4def9e7e6743
		$result = $this->Anggota->update($kode_anggota);
		echo json_encode($result);
	}
}