<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_auth extends CI_Model {
	public function insert_akun($data){
		$this->db->insert('tb_akun',$data);
	}
	public function update_akun($where,$data){
		$this->db->where($where);
		$this->db->update('tb_akun',$data);
	}
	public function delete_akun($where){
		$this->db->where($where);
		$this->db->delete('tb_akun');
	}
	public function get_akun_id($where){
		$this->db->where($where);
		return $this->db->get('tb_akun')->row_array();
	}
	public function get_akun_data(){
		$this->db->get('tb_akun')->result();
	}
}
?>
