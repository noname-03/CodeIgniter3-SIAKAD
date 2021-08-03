<?php
class M_Jadwal extends CI_Model{
	
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_matkul','tbl_matkul.id_matkul=tbl_jadwal.id_matkul');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		// $this->db->where('tbl_kelas_mhs.id_kelas='.$where);
		$query = $this->db->get();
		return $query->result();
	}
	
	function coba_data($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_matkul','tbl_matkul.id_matkul=tbl_jadwal.id_matkul');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	function tampil_matkul(){
		return $this->db->get('tbl_matkul');
	}
	
	function tampil_kelas(){
		return $this->db->get('tbl_kelas');
	}
	
	function tampil_dosen(){
		return $this->db->get('tbl_dosen');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jadwal_dosen($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_matkul','tbl_matkul.id_matkul=tbl_jadwal.id_matkul');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		$this->db->where('tbl_dosen.id_dosen='.$where);
		$query = $this->db->get();
		return $query->result();			
	}
	
	function jadwal_mahasiswa($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_matkul','tbl_matkul.id_matkul=tbl_jadwal.id_matkul');
		$this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_kelas_mhs','tbl_kelas_mhs.id_kelas=tbl_kelas.id_kelas');
		$this->db->JOIN('tbl_mhs','tbl_mhs.id_mahasiswa=tbl_kelas_mhs.id_mahasiswa');
		$this->db->where('tbl_mhs.id_mahasiswa='.$where);
		$query = $this->db->get();
		return $query->result();
	}

}