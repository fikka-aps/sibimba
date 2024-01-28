<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['promo'] = $this->m_sibimba->promo_list()->result_array();
		$data['bimbel'] = $this->db->get('bimbel')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('index', $data);
		$this->load->view('template/footer');
	}
	public function contact()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('message', 'Message', 'required|trim');

		$data['title'] = 'Contact';
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('contact', $data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'telepon' => $this->input->post('telepon'),
				'message' => $this->input->post('message')
			];
			$this->db->insert('contact', $data);
			$this->session->set_flashdata('message', 'Pesan Terkirim');
			redirect('contact');
		}
	}
	public function bimbel()
	{
		$data['title'] = 'Bimbel';
		$this->load->model('m_sibimba');

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
		} else {
			$data['keyword'] = null;
		}

		$data['bimbel'] = $this->m_sibimba->data_bimbel($data['keyword']);
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('bimbel', $data);
		$this->load->view('template/footer');
	}
	public function bimbel_search()
	{
		$data['title'] = 'Bimbel';
		$this->load->model('m_sibimba');

		if ($this->input->post('search')) {
			$data['keyword'] = $this->input->post('keyword');
		} else {
			$data['keyword'] = null;
		}

		$data['bimbel'] = $this->m_sibimba->data_bimbel($data['keyword']);
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('bimbel_search', $data);
		$this->load->view('template/footer');
	}
	public function detail($id)
	{
		$data['title'] = 'Detail Bimbel';
		$this->load->model('m_sibimba');
		$detail = $this->m_sibimba->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('detail', $data);
	}
	public function detail_promo($id)
	{
		$data['title'] = 'Detail Promo';
		$this->load->model('m_sibimba');
		$detail = $this->m_sibimba->detail_promo($id);
		$data['detail'] = $detail;
		$this->load->view('detail_promo', $data);
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('login', $data);
			$this->load->view('template/footer');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['email' => $email])->row_array();

			if ($user) {
				if ($password == $user['password']) {
					$data = [
						'email' => $user['email'],
						'name' => $user['name']
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong Password!</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email is not registered!</div>');
				redirect('login');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		redirect('login');
	}
}
