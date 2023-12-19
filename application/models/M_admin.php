<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model {
	public function data_akun(){
		return $this->db->get('tb_akun')->result();
	}
	public function get_akun(){
		return $this->db->get('tb_akun')->num_rows();
	}
	public function update_akun($where,$data){
		$this->db->where($where);
		$this->db->update('tb_akun',$data);
	}
	public function delete_akun($where){
		$this->db->where($where);
		$this->db->delete('tb_akun');
		$this->db->delete('tb_pilih_topik');
		$this->db->delete('tb_proposal');
		$this->db->delete('tb_jadwal_bimbingan');
		$this->db->delete('tb_jadwal_seminar');
		$this->db->delete('tb_jadwal_sidang');
	}
	public function page_akun($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tb_akun');
        return $query->result();
    }
	public function data_proposal(){
		return $this->db->get('tb_proposal')->result();
	}
	public function get_proposal(){
		return $this->db->get('tb_proposal')->num_rows();
	}
	public function page_proposal($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tb_proposal');
        return $query->result();
    }
	public function update_proposal($where,$data){
		$this->db->where($where);
		$this->db->update('tb_proposal',$data);
	}
	public function data_bimbingan(){
		return $this->db->get('tb_jadwal_bimbingan')->result();
	}
	public function get_bimbingan(){
		return $this->db->get('tb_jadwal_bimbingan')->num_rows();
	}
	public function page_bimbingan($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tb_jadwal_bimbingan');
        return $query->result();
    }
	public function data_seminar(){
		return $this->db->get('tb_jadwal_seminar')->result();
	}
	public function get_seminar(){
		return $this->db->get('tb_jadwal_seminar')->num_rows();
	}
	public function page_seminar($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tb_jadwal_seminar');
        return $query->result();
    }
	public function update_jadwal_seminar($where,$data){
		$this->db->where($where);
		$this->db->update('tb_jadwal_seminar',$data);
	}
	public function delete_jadwal_seminar($where,$data){
		$this->db->where($where);
		$this->db->delete('tb_jadwal_seminar');
	}
	public function data_sidang(){
		return $this->db->get('tb_jadwal_sidang')->result();
	}
	public function get_sidang(){
		return $this->db->get('tb_jadwal_sidang')->num_rows();
	}
	public function page_sidang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tb_jadwal_sidang');
        return $query->result();
    }
	public function update_jadwal_sidang($where,$data){
		$this->db->where($where);
		$this->db->update('tb_jadwal_sidang',$data);
	}
	public function delete_jadwal_sidang($where,$data){
		$this->db->where($where);
		$this->db->delete('tb_jadwal_sidang');
	}
	public function data_penilaian(){
		return $this->db->get('tb_penilaian')->result();
	}
	public function insert_penilaian($tabel,$data){
		$this->db->insert($tabel,$data);
	}
}
?>
