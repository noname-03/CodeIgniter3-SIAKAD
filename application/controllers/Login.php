<?php

class Login extends CI_Controller{
	
	function __construct(){
	parent::__construct();
	$this->load->model('M_Login');
	}

	function index(){
		$this->load->view('login');
	}

	function auth(){
		$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
	
	$cek_admin = $this->M_Login->auth_admin($username,$password);
	$cek_dosen = $this->M_Login->auth_dosen($username,$password);
	$cek_mahasiswa = $this->M_Login->auth_mahasiswa($username,$password);

	if($cek_admin->num_rows() > 0){
		$data = $cek_admin->row_array();
		$this->session->set_userdata('masuk', TRUE);
		if($data['status']=='Administrator'){
			$this->session->set_userdata('akses','Administrator');
			$this->session->set_userdata('ses_id',$data['username']);
			$this->session->set_userdata('ses_nama',$data['nm_user']);
			redirect('Admin/Admin');
		}
		
	}
	else if($cek_dosen->num_rows() > 0){
		$data = $cek_dosen->row_array();
		$this->session->set_userdata('masuk', TRUE);
		$this->session->set_userdata('akses','Dosen');
		$this->session->set_userdata('id',$data['id_dosen']);
		$this->session->set_userdata('ses_id',$data['nidn_dosen']);
		$this->session->set_userdata('ses_nama',$data['nm_dosen']);
		redirect('Dosen/Dosen');
	}
	else if($cek_mahasiswa->num_rows() > 0){
		$data = $cek_mahasiswa->row_array();
		$this->session->set_userdata('masuk', TRUE);
		$this->session->set_userdata('akses','Mahasiswa');
		$this->session->set_userdata('id',$data['id_mahasiswa']);
		$this->session->set_userdata('ses_id',$data['nim_mahasiswa']);
		$this->session->set_userdata('ses_nama',$data['nm_mahasiswa']);
		redirect('Mahasiswa/Mahasiswa');
	}
	else{
			$url=base_url();
			echo $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert"> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> Username & Password Salah </div>');
			redirect($url);
		}

}

	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}


}