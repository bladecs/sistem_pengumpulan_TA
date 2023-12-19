<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}
	public function index()
	{
		$this->load->view('template/admin/head');
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}
	public function akun()
	{
		$jumlah_data = $this->m_admin->get_akun();
		$config['base_url'] = base_url() . 'admin/akun';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page"] = $this->pagination->create_links();
		$data['page'] = $this->m_admin->page_akun($config['per_page'], $from);
		$data['akun'] = $this->m_admin->data_akun();
		$this->load->view('template/admin/head');
		$this->load->view('admin/akun', $data);
		$this->load->view('template/footer');
	}
	public function update_akun()
	{
		$id_user = $this->input->post('id');
		$status = 'Teraktivasi';
		$jabatan = $this->input->post('up_akun');
		$jobs = $this->input->post('jobs');
		$where = array('id_user' => $id_user);
		$data = array('jabatan' => $jabatan, 'jobs' => $jobs, 'status' => $status);
		$check = $this->m_admin->update_akun($where, $data);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Akun Berhasil Di Aktivasi');
			redirect(base_url('admin/akun'));
		} else {
			$this->session->set_flashdata('error', 'Aktivasi Akun Mengalami Error');
			redirect(base_url('admin/akun'));
		}
	}
	public function delete_akun()
	{
		$id_user = $this->input->post('id');
		$where = array('id_user' => $id_user);
		$check = $this->m_admin->delete_akun($where);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Akun Berhasil Di Hapus');
			redirect(base_url('admin/akun'));
		} else {
			$this->session->set_flashdata('error', 'Akun Tidak Berhasil Di Hapus');
			redirect(base_url('admin/akun'));
		}
	}
	public function proposal()
	{
		$jumlah_data = $this->m_admin->get_proposal();
		$config['base_url'] = base_url() . 'admin/proposal';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page"] = $this->pagination->create_links();
		$data['page'] = $this->m_admin->page_proposal($config['per_page'], $from);
		$data['proposal'] = $this->m_admin->data_proposal();
		$this->load->view('template/admin/head');
		$this->load->view('admin/proposal', $data);
		$this->load->view('template/footer');
	}
	public function bimbingan()
	{
		$jumlah_data = $this->m_admin->get_bimbingan();
		$config['base_url'] = base_url() . 'admin/bimbingan';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page"] = $this->pagination->create_links();
		$data['page'] = $this->m_admin->page_bimbingan($config['per_page'], $from);
		$data['bimbingan'] = $this->m_admin->data_bimbingan();
		$this->load->view('template/admin/head');
		$this->load->view('admin/bimbingan', $data);
		$this->load->view('template/footer');
	}
	public function seminar()
	{
		$jumlah_data = $this->m_admin->get_seminar();
		$config['base_url'] = base_url() . 'admin/seminar';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page"] = $this->pagination->create_links();
		$data['page'] = $this->m_admin->page_seminar($config['per_page'], $from);
		$data['seminar'] = $this->m_admin->data_seminar();
		$this->load->view('template/admin/head');
		$this->load->view('admin/seminar', $data);
		$this->load->view('template/footer');
	}
	public function update_jadwal_seminar()
	{
		$id_seminar = $this->input->post('id');
		$ruangan = $this->input->post('ruangan');
		$waktu = $this->input->post('waktu');
		$tanggal = $this->input->post('tanggal');
		$where = array('id_seminar' => $id_seminar);
		$data = array('ruangan' => $ruangan, 'waktu' => $waktu, 'tanggal' => $tanggal);
		$check = $this->m_admin->update_jadwal_seminar($where, $data);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Jadwal Berhasil Di Update');
			redirect(base_url('admin/seminar'));
		} else {
			$this->session->set_flashdata('error', 'Update Jadwal Mengalami Error');
			redirect(base_url('admin/seminar'));
		}
	}
	public function delete_jadwal_seminar()
	{
		$id_seminar = $this->input->post('id');
		$where = array('id_seminar' => $id_seminar);
		$check = $this->m_admin->delete_jadwal_seminar($where);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Data Berhasil Di Hapus');
			redirect(base_url('admin/seminar'));
		} else {
			$this->session->set_flashdata('error', 'Data Tidak Berhasil Di Hapus');
			redirect(base_url('admin/seminar'));
		}
	}
	public function sidang()
	{
		$jumlah_data = $this->m_admin->get_sidang();
		$config['base_url'] = base_url() . 'admin/sidang';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page"] = $this->pagination->create_links();
		$data['page'] = $this->m_admin->page_sidang($config['per_page'], $from);
		$data['sidang'] = $this->m_admin->data_sidang();
		$this->load->view('template/admin/head');
		$this->load->view('admin/sidang', $data);
		$this->load->view('template/footer');
	}
	public function update_jadwal_sidang()
	{
		$id_seminar = $this->input->post('id');
		$ruangan = $this->input->post('ruangan');
		$waktu = $this->input->post('waktu');
		$tanggal = $this->input->post('tanggal');
		$where = array('id_seminar' => $id_seminar);
		$data = array('ruangan' => $ruangan, 'waktu' => $waktu, 'tanggal' => $tanggal);
		$check = $this->m_admin->update_jadwal_sidang($where, $data);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Jadwal Berhasil Di Update');
			redirect(base_url('admin/seminar'));
		} else {
			$this->session->set_flashdata('error', 'Update Jadwal Mengalami Error');
			redirect(base_url('admin/seminar'));
		}
	}
	public function delete_jadwal_sidang()
	{
		$id_seminar = $this->input->post('id');
		$where = array('id_seminar' => $id_seminar);
		$check = $this->m_admin->delete_jadwal_sidang($where);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Data Berhasil Di Hapus');
			redirect(base_url('admin/seminar'));
		} else {
			$this->session->set_flashdata('error', 'Data Tidak Berhasil Di Hapus');
			redirect(base_url('admin/seminar'));
		}
	}
	public function penilaian()
	{
		$jumlah_data = $this->m_admin->get_proposal();
		$config['base_url'] = base_url() . 'admin/penilaian';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page_proposal"] = $this->pagination->create_links();
		$data['page_proposal'] = $this->m_admin->page_proposal($config['per_page'], $from);
		$jumlah_data = $this->m_admin->get_seminar();
		$config['base_url'] = base_url() . 'admin/penilaian';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page_seminar"] = $this->pagination->create_links();
		$data['page_seminar'] = $this->m_admin->page_seminar($config['per_page'], $from);
		$jumlah_data = $this->m_admin->get_sidang();
		$config['base_url'] = base_url() . 'admin/penilaian';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-dark text-white border-dark" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$from = $this->uri->segment(0);
		$this->pagination->initialize($config);
		$data["link_page_sidang"] = $this->pagination->create_links();
		$data['page_sidang'] = $this->m_admin->page_sidang($config['per_page'], $from);
		$data['proposal'] = $this->m_admin->data_proposal();
		$data['seminar'] = $this->m_admin->data_seminar();
		$data['sidang'] = $this->m_admin->data_sidang();
		$data['nama'] = $this->session->userdata('nama_user');
		$this->load->view('template/admin/head');
		$this->load->view('admin/penilaian', $data);
		$this->load->view('template/footer');
	}
	public function nilai_proposal()
	{
		$id_user = $this->session->userdata('id');
		$id_proposal = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nama_dosen = $this->input->post('nama_dosen');
		$proposal = $this->input->post('proposal');
		$date = date('Y:m:d');
		$nama_penilai = $this->input->post('penilai');
		$nilai = $this->input->post('nilai');
		if ($nilai > 90) {
			$akreditasi = 'A';
		} else if ($nilai > 85) {
			$akreditasi = 'AB';
		} else if ($nilai > 75) {
			$akreditasi = 'B';
		} else if ($nilai > 65) {
			$akreditasi = 'BC';
		} else if ($nilai > 55) {
			$akreditasi = 'C';
		} else {
			$akreditasi = 'D';
		}
		$where = array('id_proposal' => $id_proposal);
		$data_nilai = array('nilai' => $nilai, 'akreditasi' => $akreditasi);
		$id_penilaian = md5($id_user . $id_proposal . $nama_penilai);
		$data = array(
			'id_penilaian' => $id_penilaian,
			'id_proposal' => $id_proposal,
			'id_user' => $id_user,
			'nama_mhs' => $nama,
			'nama_dosen' => $nama_dosen,
			'nama_penilai' => $nama_penilai,
			'nilai' => $nilai,
			'akreditasi' => $akreditasi,
			'file_proposal' => $proposal,
			'tgl_penilaian' => $date
		);
		$check = $this->m_admin->insert_penilaian('tb_penilaian_proposal', $data);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Penilaian Berhasil');
			$this->m_admin->update_proposal($where, $data_nilai);
			redirect(base_url('admin/penilaian'));
		} else {
			$this->session->set_flashdata('error', 'Penilaian Gagal');
			redirect(base_url('admin/penilaian'));
		}
		exit;
	}
	public function nilai_seminar()
	{
		$id_user = $this->session->userdata('id');
		$id_seminar = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nama_dosen = $this->input->post('nama_dosen');
		$proposal = $this->input->post('proposal');
		$date = date('Y:m:d');
		$nama_penilai = $this->input->post('penilai');
		$nilai = $this->input->post('nilai');
		if ($nilai > 90) {
			$akreditasi = 'A';
		} else if ($nilai > 85) {
			$akreditasi = 'AB';
		} else if ($nilai > 75) {
			$akreditasi = 'B';
		} else if ($nilai > 65) {
			$akreditasi = 'BC';
		} else if ($nilai > 55) {
			$akreditasi = 'C';
		} else {
			$akreditasi = 'D';
		}
		$where = array('id_seminar' => $id_seminar);
		$data_nilai = array('nilai' => $nilai);
		$id_penilaian = md5($id_user . $id_seminar . $nama_penilai);
		$data = array(
			'id_penilaian' => $id_penilaian,
			'id_seminar' => $id_seminar,
			'id_user' => $id_user,
			'topik' => $proposal,
			'nama_mhs' => $nama,
			'nama_dosen' => $nama_dosen,
			'nama_penilai' => $nama_penilai,
			'nilai' => $nilai,
			'akreditasi' => $akreditasi,
			'tgl_penilaian' => $date
		);
		$check = $this->m_admin->insert_penilaian('tb_penilaian_seminar', $data);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Penilaian Berhasil');
			$this->m_admin->update_jadwal_seminar($where, $data_nilai);
			redirect(base_url('admin/penilaian'));
		} else {
			$this->session->set_flashdata('error', 'Penilaian Gagal');
			redirect(base_url('admin/penilaian'));
		}
		exit;
	}
	public function nilai_sidang()
	{
		$id_user = $this->session->userdata('id');
		$id_sidang = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nama_dosen = $this->input->post('nama_dosen');
		$proposal = $this->input->post('proposal');
		$date = date('Y:m:d');
		$nama_penilai = $this->input->post('penilai');
		$nilai = $this->input->post('nilai');
		if ($nilai > 90) {
			$akreditasi = 'A';
		} else if ($nilai > 85) {
			$akreditasi = 'AB';
		} else if ($nilai > 75) {
			$akreditasi = 'B';
		} else if ($nilai > 65) {
			$akreditasi = 'BC';
		} else if ($nilai > 55) {
			$akreditasi = 'C';
		} else {
			$akreditasi = 'D';
		}
		$where = array('id_sidang' => $id_sidang);
		$data_nilai = array('nilai' => $nilai);
		$id_penilaian = md5($id_user . $id_sidang . $nama_penilai);
		$data = array(
			'id_penilaian' => $id_penilaian,
			'id_sidang' => $id_sidang,
			'id_user' => $id_user,
			'topik' => $proposal,
			'nama_mhs' => $nama,
			'nama_dosen' => $nama_dosen,
			'nama_penilai' => $nama_penilai,
			'nilai' => $nilai,
			'akreditasi' => $akreditasi,
			'tgl_penilaian' => $date
		);
		$check = $this->m_admin->insert_penilaian('tb_penilaian_sidang', $data);
		if (!$check) {
			$this->session->set_flashdata('succes', 'Penilaian Berhasil');
			$this->m_admin->update_jadwal_sidang($where, $data_nilai);
			redirect(base_url('admin/penilaian'));
		} else {
			$this->session->set_flashdata('error', 'Penilaian Gagal');
			redirect(base_url('admin/penilaian'));
		}
		exit;
	}
}
?>
