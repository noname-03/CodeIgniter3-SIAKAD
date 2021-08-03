<?php
class M_Mahasiswa extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tbl_mhs');
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

	function pilih_mahasiswa(){
		$sql = $this->db->query('Select * from tbl_mhs where NOT EXISTS (select * from tbl_kelas_mhs where tbl_mhs.id_mahasiswa = tbl_kelas_mhs.id_mahasiswa)');
		return $sql->result_array();
	}
}