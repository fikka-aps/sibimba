<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function message()
    {
        $data['title'] = 'Message';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['message'] = $this->db->get('contact')->result_array();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/message', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function user()
    {
        $data['title'] = 'Admin';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/user', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $this->db->insert('user', [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('user');
        }
    }
    public function deleteUser($id)
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->m_sibimba->delete_user($id);
        redirect('user');
    }
    public function editUser()
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $this->db->set('name', $name);
        $this->db->set('password', $password);
        $this->db->where('id_user', $id);
        $this->db->update('user');
        redirect('user');
    }
    public function bimbel_list()
    {
        $data['title'] = 'Admin';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bimbel'] = $this->db->get('bimbel')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('desc', 'Desc', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/bimbel_list', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function addBimbel()
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $name = $this->input->post('name');
        $desc = $this->input->post('desc');
        $telepon = $this->input->post('telepon');
        $address = $this->input->post('address');
        $website = $this->input->post('website');

        $upload_pict = $_FILES['pict']['name'];
        if ($upload_pict) {
            $config['upload_path'] = './img/bimbel';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pict')) {
                $pict_name = $this->upload->data('file_name');
            } else {
                echo 'gagal';
            }
        }

        $data = [
            'bimbel_name' => $name,
            'desc' => $desc,
            'telepon_num' => $telepon,
            'pict' => $pict_name,
            'address' => $address,
            'website' => $website
        ];

        $this->db->insert('bimbel', $data);
        redirect('bimbel_list');
    }
    public function editBimbel()
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $desc = $this->input->post('desc');
        $address = $this->input->post('address');
        $telepon = $this->input->post('telepon');
        $website = $this->input->post('website');

        $upload_pict = $_FILES['pict']['name'];
        if ($upload_pict) {
            $config['upload_path'] = './img/bimbel';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pict')) {
                $pict_name = $this->upload->data('file_name');
                $this->db->set('pict', $pict_name);
            } else {
                echo 'gagal';
            }
        }

        $this->db->set('bimbel_name', $name);
        $this->db->set('desc', $desc);
        $this->db->set('address', $address);
        $this->db->set('telepon_num', $telepon);
        $this->db->set('website', $website);
        $this->db->where('bimbel_id', $id);
        $this->db->update('bimbel');
        redirect('bimbel_list');
    }
    public function deleteBimbel($id)
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->m_sibimba->delete_bimbel($id);
        redirect('bimbel_list');
    }
    public function promo()
    {
        $data['title'] = 'Promo Bimbel';
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['promo'] = $this->m_sibimba->promo_list()->result_array();


        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/promo', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function addPromo()
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $promo = $this->input->post('promo');
        $desc = $this->input->post('desc');
        $bimbel = $this->input->post('Bimbel');

        $upload_pict = $_FILES['pict']['name'];
        if ($upload_pict) {
            $config['upload_path'] = './img/promo';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pict')) {
                $pict_name = $this->upload->data('file_name');
            } else {
                echo 'gagal';
            }
        }

        $data = [
            'promo' => $promo,
            'image' => $pict_name,
            'description' => $desc,
            'id_bimbel' => $bimbel,
        ];

        $this->db->insert('promo', $data);
        redirect('promo');
    }
    public function editPromo()
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $promo = $this->input->post('promo');
        $desc = $this->input->post('desc');
        $id_bimbel = $this->input->post('id_bimbel');

        $upload_pict = $_FILES['pict']['name'];
        if ($upload_pict) {
            $config['upload_path'] = './img/promo';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pict')) {
                $pict_name = $this->upload->data('file_name');
                $this->db->set('image', $pict_name);
            } else {
                echo 'gagal';
            }
        }
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->set('promo', $promo);
        $this->db->set('description', $desc);
        $this->db->set('id_bimbel', $id_bimbel);
        $this->db->where('id_promo', $id);
        $this->db->update('promo');
        redirect('promo');
    }
    public function deletePromo($id)
    {
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->m_sibimba->delete_promo($id);
        redirect('promo');
    }
}
