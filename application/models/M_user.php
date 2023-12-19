<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_user extends CI_Model {
	public function insert_topik($data) {
		$this->db->insert('tb_pilih_topik', $data);
	}
	public function data_topik() {
		return $this->db->get('tb_topik')->result();
	}
	public function get_data_topik($where){
		$this->db->where($where);
		return $this->db->get('tb_topik')->row_array();
	}
	public function data_pilih_topik($where){
		$this->db->where($where);
		return $this->db->get('tb_pilih_topik')->row_array();
	}
	public function get_pilih_topik($where){
		$this->db->where($where);
		return $this->db->get('tb_pilih_topik')->num_rows();
	}
	public function get_topik() {
		return $this->db->get('tb_topik')->num_rows();
	}
	public function page_topik($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('tb_topik');
        return $query->result();
    }
	public function insert_proposal($data) {
		$this->db->insert('tb_proposal', $data);
	}
	public function get_proposal($where){
		$this->db->where($where);
		return $this->db->get('tb_proposal')->row_array();
	}
	public function jadwal_bimbingan($where) {
		$this->db->where($where);
		return $this->db->get('tb_jadwal_bimbingan')->result();
	}
	public function update_jadwal_bimbingan($where,$data){
		$this->db->where($where);
		$this->db->update('tb_jadwal_bimbingan',$data);
	}
	public function jadwal_seminar($where) {
		$this->db->where($where);
		return $this->db->get('tb_jadwal_seminar')->row_array();
	}
	public function jadwal_sidang($where) {
		$this->db->where($where);
		return $this->db->get('tb_jadwal_sidang')->row_array();
	}
	public function penilaian($where) {
		$this->db->where($where);
		return $this->db->get('tb_penilaian')->result();
	}
}
?>
