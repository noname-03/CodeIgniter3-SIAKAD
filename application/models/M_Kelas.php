<?php
class M_Kelas extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tbl_kelas');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function input_data_kelas_mahasiswa($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data_kelas_mahasiswa($where,$table){
		return $this->db->get_where($table,$where);
	}

	function join_data($where){
		$this->db->select('*');
		$this->db->from('tbl_kelas_mhs');
		$this->db->JOIN('tbl_mhs','tbl_mhs.id_mahasiswa=tbl_kelas_mhs.id_mahasiswa');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_kelas_mhs.id_kelas');
		$this->db->where('tbl_kelas_mhs.id_kelas='.$where);
		$query = $this->db->get();
		return $query->result();
	}
}