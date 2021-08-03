<?php
class Admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/index.php');
		$this->load->view('Admin/Template/footer.php');
	}

	//-------------- Data Dosen ---------------------------

	function data_dosen(){
		$this->load->model('M_Dosen');
		$data['tbl_dosen'] = $this->M_Dosen->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_dosen.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_dosen_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_dosen_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_dosen_input_aksi(){
		$nidn = $this->input->POST('nidn_dosen');
		$nama = $this->input->POST('nm_dosen');
		$gender = $this->input->POST('gender');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');

		$data = array(
			'nidn_dosen' => $nidn,
			'nm_dosen' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			'nohp' => $hp
		);
		$this->load->model('M_Dosen');
		$this->M_Dosen->input_data($data,'tbl_dosen');
		redirect('Admin/Admin/data_dosen');

	}

	function data_dosen_edit($id_dosen){
		$where = array('id_dosen' => $id_dosen);
		$this->load->model('M_Dosen');
		$data['tbl_dosen'] = $this->M_Dosen->view_data($where,'tbl_dosen')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_dosen_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}
	
	function data_dosen_edit_aksi(){
		$id = $this->input->POST('id_dosen');
		$nidn = $this->input->POST('nidn_dosen');
		$nama = $this->input->POST('nm_dosen');
		$gender = $this->input->POST('gender');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');

		$data = array(
			'nidn_dosen' => $nidn,
			'nm_dosen' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			'nohp' => $hp
		);

		$where = array(
			'id_dosen' => $id
		);

		$this->load->model('M_Dosen');
		$this->M_Dosen->update_data($where,$data,'tbl_dosen');
		redirect('Admin/Admin/data_dosen');

	}

	function data_dosen_delete($id_dosen){
		$where = array('id_dosen' => $id_dosen);
		$this->load->model('M_Dosen');
		$this->M_Dosen->delete_data($where,'tbl_dosen');
		redirect('Admin/Admin/data_dosen');
	}

	function cetak_data_dosen(){
		$this->load->model('M_Dosen');
		$data['tbl_dosen'] = $this->M_Dosen->tampil_data()->result();
		$this->load->view('Admin/cetak_data_dosen.php',$data);
	}

	//---------- Data Mahasiswa ------------------

	function data_mhs(){
		$this->load->model('M_Mahasiswa');
		$data['tbl_mhs'] = $this->M_Mahasiswa->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_mahasiswa.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_mhs_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_mahasiswa_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_mhs_input_aksi(){
		$nim = $this->input->POST('nim_mahasiswa');
		$nama = $this->input->POST('nm_mahasiswa');
		$gender = $this->input->POST('gender');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');

		$data = array(
			'nim_mahasiswa' => $nim,
			'nm_mahasiswa' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			'nohp' => $hp
		);
		$this->load->model('M_Mahasiswa');
		$this->M_Mahasiswa->input_data($data,'tbl_mhs');
		redirect('Admin/Admin/data_mhs');

	}

	function data_mhs_edit($id_mahasiswa){
		$where = array('id_mahasiswa' => $id_mahasiswa);
		$this->load->model('M_Mahasiswa');
		$data['tbl_mhs'] = $this->M_Mahasiswa->view_data($where,'tbl_mhs')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_mahasiswa_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_mhs_edit_aksi(){
		$id = $this->input->POST('id_mahasiswa');
		$nim = $this->input->POST('nim_mahasiswa');
		$nama = $this->input->POST('nm_mahasiswa');
		$gender = $this->input->POST('gender');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');

		$data = array(
			'nim_mahasiswa' => $nim,
			'nm_mahasiswa' => $nama,
			'gender' => $gender,
			'alamat' => $alamat,
			'nohp' => $hp
		);

		$where = array(
			'id_mahasiswa' => $id
		);

		$this->load->model('M_Mahasiswa');
		$this->M_Mahasiswa->update_data($where,$data,'tbl_mhs');
		redirect('Admin/Admin/data_mhs');
	}

	function data_mhs_delete($id_mahasiswa){
		$where = array('id_mahasiswa' => $id_mahasiswa);
		$this->load->model('M_Mahasiswa');
		$this->M_Mahasiswa->delete_data($where,'tbl_mhs');
		redirect('Admin/Admin/data_mhs');
	}

	//----------- Data Matakuliah ----------------

	function data_matkul(){
		$this->load->model('M_Matkul');
		$data['tbl_matkul'] = $this->M_Matkul->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_matkul.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_matkul_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_matkul_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_matkul_input_aksi(){
		$kd = $this->input->POST('kd_matkul');
		$nama = $this->input->POST('nm_matkul');
		$sks = $this->input->POST('sks');
		$ket = $this->input->POST('ket');

		$data = array(
			'kd_matkul' => $kd,
			'nm_matkul' => $nama,
			'sks' => $sks,
			'ket' => $ket
		);
		$this->load->model('M_Matkul');
		$this->M_Matkul->input_data($data,'tbl_matkul');
		redirect('Admin/Admin/data_matkul');

	}

	function data_matkul_edit($id_matkul){
		$where = array('id_matkul' => $id_matkul);
		$this->load->model('M_Matkul');
		$data['tbl_matkul'] = $this->M_Matkul->view_data($where,'tbl_matkul')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_matkul_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_matkul_edit_aksi(){
		$id = $this->input->POST('id_matkul');
		$kd = $this->input->POST('kd_matkul');
		$nama = $this->input->POST('nm_matkul');
		$sks = $this->input->POST('sks');
		$ket = $this->input->POST('ket');

		$data = array(
			'kd_matkul' => $kd,
			'nm_matkul' => $nama,
			'sks' => $sks,
			'ket' => $ket
		);

		$where = array(
			'id_matkul' => $id
		);

		$this->load->model('M_Matkul');
		$this->M_Matkul->update_data($where,$data,'tbl_matkul');
		redirect('Admin/Admin/data_matkul');
	}

	function data_matkul_delete($id_matkul){
		$where = array('id_matkul' => $id_matkul);
		$this->load->model('M_Matkul');
		$this->M_Matkul->delete_data($where,'tbl_matkul');
		redirect('Admin/Admin/data_matkul');
	}

	//-------------- Data Kelas ---------------------------

	function data_kelas(){
		$this->load->model('M_Kelas');
		$data['tbl_kelas'] = $this->M_Kelas->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_kelas.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	
	function data_kelas_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_kelas_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_kelas_input_aksi(){
		$kd = $this->input->POST('kd_kelas');
		$nama = $this->input->POST('nm_kelas');
		$jurusan = $this->input->POST('jurusan');
		$semester = $this->input->POST('semester');

		$data = array(
			'kd_kelas' => $kd,
			'nm_kelas' => $nama,
			'jurusan' => $jurusan,
			'semester' => $semester
		);
		$this->load->model('M_Kelas');
		$this->M_Kelas->input_data($data,'tbl_kelas');
		redirect('Admin/Admin/data_kelas');
	}

	function data_kelas_edit($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$this->load->model('M_Kelas');
		$data['tbl_kelas'] = $this->M_Kelas->view_data($where,'tbl_kelas')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_kelas_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_kelas_edit_aksi(){
		$id = $this->input->POST('id_kelas');
		$kd = $this->input->POST('kd_kelas');
		$nama = $this->input->POST('nm_kelas');
		$jurusan = $this->input->POST('jurusan');
		$semester = $this->input->POST('semester');

		$data = array(
			'kd_kelas' => $kd,
			'nm_kelas' => $nama,
			'jurusan' => $jurusan,
			'semester' => $semester
		);

		$where = array(
			'id_kelas' => $id
		);

		$this->load->model('M_Kelas');
		$this->M_Kelas->update_data($where,$data,'tbl_kelas');
		redirect('Admin/Admin/data_kelas');
	}

	function data_kelas_delete($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$this->load->model('M_Kelas');
		$this->M_Kelas->delete_data($where,'tbl_kelas');
		redirect('Admin/Admin/data_kelas');
	}

	
	function data_kelas_mahasiswa($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$this->load->model('M_Kelas');
		$this->load->model('M_Mahasiswa');
		$data['tbl_kelas'] = $this->M_Kelas->view_data($where,'tbl_kelas')->result();
		$data['tbl_mhs'] = $this->M_Mahasiswa->da_mahasiswa();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_kelas_mahasiswa.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}
	
	function data_kelas_mahasiswa_aksi(){
		$idk = $this->input->POST('id_kelas');
		$idm = $this->input->POST('id_mahasiswa');
		
		for ($i=0; $i<count($idm) ; $i++) { 

			$data = array(
				'id_kelas' => $idk,
				'id_mahasiswa' => $idm[$i]
			);
			
			$this->load->model('M_Kelas');
			$this->M_Kelas->input_data_kelas_mahasiswa($data,'tbl_kelas_mhs');
		}
		redirect('Admin/Admin/data_kelas');
	}

	function data_kelas_mahasiswa_view($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$this->load->model('M_Kelas');
		$data['tbl_kelas'] = $this->M_Kelas->view_data($where,'tbl_kelas')->result();
		$data['tbl_mhs'] = $this->M_Kelas->join_data($id_kelas);
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_kelas_mahasiswa_view.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	//data jadwal perkuliahan
	function data_jadwal(){
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->tampil_data();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_jadwal.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_jadwal_input(){
		$this->load->model('M_Jadwal');
		$data['tbl_matkul'] = $this->M_Jadwal->tampil_matkul()->result();
		$data['tbl_kelas'] = $this->M_Jadwal->tampil_kelas()->result();
		$data['tbl_dosen'] = $this->M_Jadwal->tampil_dosen()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_jadwal_input.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}
	
	function data_jadwal_input_aksi(){
		$idm = $this->input->POST('id_matkul');
		$idd = $this->input->POST('id_dosen');
		$idk = $this->input->POST('id_kelas');
		$ru = $this->input->POST('ruangan');
		$h = $this->input->POST('hari');
		$j = $this->input->POST('jam');
		$ta = $this->input->POST('thn_ajar');

		$data = array(
			'id_matkul' => $idm,
			'id_dosen' => $idd,
			'id_kelas' => $idk,
			'ruangan' => $ru,
			'hari' => $h,
			'jam' => $j,
			'thn_ajar' => $ta
		);
		$this->load->model('M_Jadwal');
		$this->M_Jadwal->input_data($data,'tbl_jadwal');
		redirect('Admin/Admin/data_jadwal');
	}

	function jadwal_edit($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->view_data($where,'tbl_jadwal')->result();
		$data['tbl_matkul'] = $this->M_Jadwal->tampil_matkul()->result();
		$data['tbl_kelas'] = $this->M_Jadwal->tampil_kelas()->result();
		$data['tbl_dosen'] = $this->M_Jadwal->tampil_dosen()->result();
		$data['tbl_jadwal'] = $this->M_Jadwal->coba_data($where);
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/jadwal_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_jadwal_edit_aksi(){
		$id = $this->input->POST('id_jadwal');
		$idm = $this->input->POST('id_matkul');
		$idd = $this->input->POST('id_dosen');
		$idk = $this->input->POST('id_kelas');
		$ru = $this->input->POST('ruangan');
		$h = $this->input->POST('hari');
		$j = $this->input->POST('jam');
		$ta = $this->input->POST('thn_ajar');

		$data = array(
			'id_matkul' => $idm,
			'id_dosen' => $idd,
			'id_kelas' => $idk,
			'ruangan' => $ru,
			'hari' => $h,
			'jam' => $j,
			'thn_ajar' => $ta
		);

		$where = array(
			'id_jadwal' => $id
		);

		$this->load->model('M_Jadwal');
		$this->M_Jadwal->update_data($where,$data,'tbl_jadwal');
		redirect('Admin/Admin/data_jadwal');
	}
	
	function data_jadwal_delete($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Jadwal');
		$this->M_Jadwal->delete_data($where,'tbl_jadwal');
		redirect('Admin/Admin/data_jadwal');
	}
}