<?php
class M_Nilai extends CI_Model{
	
	function view_data($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_matkul', 'tbl_matkul.id_matkul=tbl_jadwal.id_matkul');	
		$this->db->JOIN('tbl_kelas', 'tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_dosen', 'tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();
		}	

	function join_data($where){
		$this->db->select('*');
		$this->db->from('tbl_kelas_mhs');
		$this->db->JOIN('tbl_mhs', 'tbl_mhs.id_mahasiswa=tbl_kelas_mhs.id_mahasiswa');	
		$this->db->JOIN('tbl_kelas', 'tbl_kelas.id_kelas=tbl_kelas_mhs.id_kelas');
		$this->db->JOIN('tbl_jadwal', 'tbl_jadwal.id_kelas=tbl_kelas.id_kelas');
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();	
	}

	function input_nilai_mahasiswa($data,$table){
		$this->db->insert($table,$data);
	}

	function Nilai_mahasiswa($where){
		$this->db->select('*');
		$this->db->from('tbl_nilai');
		$this->db->JOIN('tbl_jadwal','tbl_jadwal.id_jadwal=tbl_nilai.id_jadwal');
		$this->db->JOIN('tbl_matkul','tbl_matkul.id_matkul=tbl_jadwal.id_matkul');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		$this->db->JOIN('tbl_mhs','tbl_mhs.id_mahasiswa=tbl_nilai.id_mahasiswa');
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();
	}
	function View_Nilai_mahasiswa($where,$where2){
		$this->db->select('*');
		$this->db->from('tbl_nilai');
		$this->db->JOIN('tbl_jadwal','tbl_jadwal.id_jadwal=tbl_nilai.id_jadwal');
		$this->db->JOIN('tbl_matkul','tbl_matkul.id_matkul=tbl_jadwal.id_matkul');
		$this->db->JOIN('tbl_kelas','tbl_kelas.id_kelas=tbl_jadwal.id_kelas');
		$this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		$this->db->JOIN('tbl_mhs','tbl_mhs.id_mahasiswa=tbl_nilai.id_mahasiswa');
		$this->db->where('tbl_jadwal.id_jadwal='.$where.' AND tbl_mhs.id_mahasiswa='.$where2);
		$query = $this->db->get();
		return $query->result();
	}
}