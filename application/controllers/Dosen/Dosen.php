<?php
class Dosen extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Dosen/Template/header.php');
		$this->load->view('Dosen/Template/menu.php');
		$this->load->view('Dosen/index.php');
		$this->load->view('Dosen/Template/footer.php');
	}
		//data jadwal perkuliahan
		function data_jadwal(){
			$where = $this->session->userdata('id');
			$this->load->model('M_Jadwal');
			$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_dosen($where);
			$this->load->view('Dosen/Template/header.php');
			$this->load->view('Dosen/Template/menu.php');
			$this->load->view('Dosen/data_jadwal.php',$data);
			$this->load->view('Dosen/Template/footer.php');
		}
		function data_absensi(){
			$where = $this->session->userdata('id');
			$this->load->model('M_Jadwal');
			$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_dosen($where);
			$this->load->view('Dosen/Template/header.php');
			$this->load->view('Dosen/Template/menu.php');
			$this->load->view('Dosen/data_absensi.php',$data);
			$this->load->view('Dosen/Template/footer.php');
		}
		function data_absensi_input($id_jadwal){
			$where = array('id_jadwal' => $id_jadwal);
			$this->load->model('M_Absensi');
			$data['tbl_jadwal'] = $this->M_Absensi->view_data($id_jadwal);
			$data['tbl_mhs'] = $this->M_Absensi->join_data($id_jadwal);
			$this->load->view('Dosen/Template/header.php');
			$this->load->view('Dosen/Template/menu.php');
			$this->load->view('Dosen/data_absensi_input.php',$data);
			$this->load->view('Dosen/Template/footer.php');
		}			
		function data_absensi_input_aksi(){
		$idj = $this->input->POST('id_jadwal');
		$idm = $this->input->POST('id_mahasiswa');
		$pertemuan = $this->input->POST('pertemuan');
		$tgl = $this->input->POST('tgl');
		$absensi = $this->input->POST('absensi');

		for($i=0; $i<count($idm); $i++){

		$data = array(
			'id_jadwal' => $idj,
			'id_mahasiswa' => $idm[$i],
			'pertemuan' => $pertemuan,
			'tgl' => $tgl,
			'absensi' => $absensi[$i]
		);

		$this->load->model('M_Absensi');
		$this->M_Absensi->input_Absensi_mahasiswa($data,'tbl_absensi');
		}
		redirect('Dosen/Dosen/data_absensi');
	}
	function data_absensi_view($id_jadwal){
		$where = array('id_jadwal => $id_jadwal');
		$this->load->model('M_Absensi');
		$data['tbl_absensi'] = $this->M_Absensi->Absensi_mahasiswa($id_jadwal);
		$this->load->view('Dosen/Template/header.php');
		$this->load->view('Dosen/Template/menu.php');
		$this->load->view('Dosen/data_absensi_view.php',$data);
		$this->load->view('Dosen/Template/footer.php');
	}
	function data_nilai(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_dosen($where);
		$this->load->view('Dosen/Template/header.php');
		$this->load->view('Dosen/Template/menu.php');
		$this->load->view('Dosen/data_nilai.php',$data);
		$this->load->view('Dosen/Template/footer.php');
	}
	function data_nilai_input($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Nilai');
		$data['tbl_jadwal'] = $this->M_Nilai->view_data($id_jadwal);	
		$data['tbl_mhs'] = $this->M_Nilai->join_data($id_jadwal);
		$this->load->view('Dosen/Template/header.php');
		$this->load->view('Dosen/Template/menu.php');
		$this->load->view('Dosen/data_nilai_input.php',$data);
		$this->load->view('Dosen/Template/footer.php');
	}
	function data_nilai_input_aksi(){
		$idj = $this->input->POST('id_jadwal');
		$idm = $this->input->POST('id_mahasiswa');
		$uts = $this->input->POST('uts');
		$uas = $this->input->POST('uas');

		for($i=0; $i<count($idm); $i++){

		$data = array(
			'id_jadwal' => $idj,
			'id_mahasiswa' => $idm[$i],
			'uts' => $uts[$i],
			'uas' => $uas[$i]
		);
		$this->load->model('M_Nilai');
		$this->M_Nilai->input_nilai_mahasiswa($data,'tbl_nilai');
		}
		redirect('Dosen/Dosen/data_nilai');
	}
	function data_nilai_view($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Nilai');
		$data['tbl_nilai'] = $this->M_Nilai->Nilai_mahasiswa($id_jadwal);
		$this->load->view('Dosen/Template/header.php');
		$this->load->view('Dosen/Template/menu.php');
		$this->load->view('Dosen/data_nilai_view.php',$data);
		$this->load->view('Dosen/Template/footer.php');
	}
	function cetak_data_nilai($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Nilai');
		$data['tbl_nilai'] = $this->M_Nilai->Nilai_mahasiswa($id_jadwal);
		$this->load->view('Dosen/cetak_data_nilai.php',$data);
	}
}