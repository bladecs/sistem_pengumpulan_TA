<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_auth');
	}
	public function index()
	{
		$where = array('id_user' => $this->session->userdata('id'));
		$data['proposal'] = $this->m_user->get_proposal($where);
		$data['topik'] = $this->m_user->get_pilih_topik($where);
		$data['nama'] = $this->session->userdata('nama_user');
		$this->load->view('template/head', $data);
		$this->load->view('user/dashboard', $data);
		$this->load->view('template/footer', $data);
	}
	public function pilih_topik()
	{
		$nama = $this->session->userdata('nama_user');
		$where = array('nama' => $nama);
		$jumlah_data = $this->m_user->get_topik();
		$config['base_url'] = base_url() . 'user/pilih_topik';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 7;
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
		$data['page'] = $this->m_user->page_topik($config['per_page'], $from);
		$data['user'] = $this->m_auth->get_akun_id($where);
		$data['topik'] = $this->m_user->data_topik();
		$data['nama'] = $nama;
		$this->load->view('template/head', $data);
		$this->load->view('user/pilih_topik', $data);
		$this->load->view('template/footer');
	}
	public function insert_topik()
	{
		$id_user = $this->input->post('id');
		$nama = $this->input->post('nama');
		echo $nama;
		$nim = $this->input->post('nim');
		echo $nim;
		$topik = $this->input->post('topik');
		$id_pilih = md5($id_user . $topik);
		$data = array(
			'id_pilih' => $id_pilih,
			'id_user' => $id_user,
			'nama_mhs' => $nama,
			'nim' => $nim,
			'topik_pilih' => $topik
		);
		$this->m_user->insert_topik($data);
		$this->session->set_flashdata('succes', 'Topik Berhasil Ditambahkan');
		redirect(base_url('user'));
		exit;
	}
	public function proposal()
	{
		$id_user = $this->session->userdata('id');
		$where = array('id_user' => $id_user);
		$data['topik'] = $this->m_user->data_pilih_topik($where);
		$where1 = array('judul_topik' => $data['topik']['topik_pilih']);
		$data['dosen'] = $this->m_user->get_data_topik($where1);
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/head');
		$this->load->view('user/proposal', $data);
		$this->load->view('template/footer');
	}
	public function upload_proposal()
	{
		$id_user = $this->session->userdata('id');
		$where = array('id_user' => $id_user);
		$topik = $this->m_user->data_pilih_topik($where);
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'docx|pdf';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file_proposal')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect(base_url('user/proposal'));
			exit;
		} else {
			$nama = $this->input->post('nama');
			$dosen = $this->input->post('dosen');
			$tgl = date('Y:m:d');
			$id_proposal = md5($id_user . $topik['id_pilih'] . $dosen);
			$data = array(
				'id_proposal' => $id_proposal,
				'id_user' => $id_user,
				'id_pilih' => $topik['id_pilih'],
				'nama_mhs' => $nama,
				'nama_dosen' => $dosen,
				'tgl_penyerahan' => $tgl,
				'file_proposal' => $this->upload->data('file_name')
			);
			$this->m_user->insert_proposal($data);
			$this->session->set_flashdata('succes', 'Berhasil Mengirimkan Proposal');
			redirect(base_url('user'));
			exit;
		}
	}
	public function jadwal_bimbingan()
	{
		$id_user = $this->session->userdata('id');
		$where = array('id_user' => $id_user);
		$pilih_topik = $this->m_user->data_pilih_topik($where);
		$where1 = array('id_pilih' => $pilih_topik['id_pilih']);
		$data['jadwal'] = $this->m_user->jadwal_bimbingan($where1);
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/head');
		$this->load->view('user/jadwal_bimbingan', $data);
		$this->load->view('template/footer');
	}
	public function jadwal_seminar()
	{
		$id_user = $this->session->userdata('id');
		$where = array('id_user' => $id_user);
		$topik = $this->m_user->data_pilih_topik($where);
		$id_pilih = $topik['id_pilih'];
		$where1 = array('id_pilih' => $id_pilih);
		$data['seminar'] = $this->m_user->jadwal_seminar($where1);
		$this->load->view('template/head');
		$this->load->view('user/jadwal_seminar', $data);
		$this->load->view('template/footer');
	}
	public function jadwal_sidang()
	{
		$id_user = $this->session->userdata('id');
		$where = array('id_user' => $id_user);
		$topik = $this->m_user->data_pilih_topik($where);
		$id_pilih = $topik['id_pilih'];
		$where1 = array('id_pilih' => $id_pilih);
		$data['seminar'] = $this->m_user->jadwal_sidang($where1);
		$this->load->view('template/head');
		$this->load->view('user/jadwal_sidang', $data);
		$this->load->view('template/footer');
	}
	public function update_jadwal_bimbingan()
	{
		$id_jadwal = $this->input->post('id');
		$hasil = $this->input->post('hasil');
		$status = 'Done';
		$where = array('id_jadwal' => $id_jadwal);
		$data = array('hasil' => $hasil, 'status' => $status);
		$this->m_user->update_jadwal_bimbingan($where, $data);
		redirect(base_url('user/update_jadwal_bimbingan'));
		exit;
	}
}
?>
