<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}
	public function index()
	{
		$this->load->view('auth/login');
	}
	public function login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$data = array('username' => $username, 'password' => $password);
		$check = $this->m_auth->get_akun_id($data);
		if ($check) {
			$this->session->set_userdata('id', $check['id_user']);
			$this->session->set_userdata('nama_user', $check['nama']);
			$this->session->set_userdata('jobs', $check['jobs']);
			$this->session->set_userdata('is_login', true);
			if ($check['jabatan'] === 'Admin' or $check['jabatan'] === 'Panitia') {
				redirect(base_url('admin'));
			} else if ($check['jabatan'] === 'Dosen') {
				redirect(base_url('dosen'));
			} else if ($check['jabatan'] === 'Mahasiswa') {
				redirect(base_url('user'));
			}
			exit;
		} else {
			$this->session->set_flashdata('error_login', 'Username atau Password salah');
			redirect(base_url('auth'));
			exit;
		}
	}
	public function regis()
	{
		$this->load->view('auth/register');
	}
	public function register()
	{
		$name = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jurusan = $this->input->post('jurusan');
		$prodi = $this->input->post('prodi');
		$kelas = $this->input->post('kelas');
		$id_combine = $name . $username . $tgl_lahir;
		$id = md5($id_combine);
		$data = array('id_user' => $id, 'nama' => $name, 'username' => $username, 'password' => $password, 'tgl_lahir' => $tgl_lahir, 'jurusan' => $jurusan, 'prodi' => $prodi, 'kelas' => $kelas);
		$this->m_auth->insert_akun($data);
		$this->session->set_flashdata('succes_register', 'Akun Anda Berhasil Di Daftarkan Silahkan Login');
		redirect(base_url('auth'));
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}
?>
