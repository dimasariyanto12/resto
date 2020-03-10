<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        if (!$this->session->userdata('login')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman admin',
            'masakanall' => $this->db->get('masakan')->result_array(),
            'orderall' => $this->db->get('order')->result_array(),
            'userall' => $this->db->get('user')->result_array(),
            'user' => $this->db->get_where('user', ['user_username' => $this->session->userdata('user_username')])->row_array()
        ];
        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    public function masakan()
    {
        $data = [
            'title' => 'Halaman admin',
            'masakanall' => $this->db->get('masakan')->result_array(),
            'user' => $this->db->get_where('user', ['user_username' => $this->session->userdata('user_username')])->row_array()
        ];
        $this->load->view('template/header', $data);
        $this->load->view('masakan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_masakan()
    {
        $data = [
            'title' => 'Tambah Masakan',
        ];

        $this->form_validation->set_rules('masakan_nama', 'nama masakan', 'required');
        $this->form_validation->set_rules('masakan_harga', 'harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/form_masakan', $data);
            $this->load->view('template/footer');
        } else {
            $this->admin_model->tambah_masakan();
        }
    }

    public function tambah_user()
    {
        $data = [
            'title' => 'Tambah User',
            'action' => site_url('admin/tambah_user'),
            'levelall' => $this->admin_model->getAllLevel()
        ];

        $this->form_validation->set_rules('user_nama', 'nama user', 'required');
        $this->form_validation->set_rules('user_username', 'username', 'required|is_unique[user.user_username]');
        $this->form_validation->set_rules('user_password', 'password', 'required');
        $this->form_validation->set_rules('user_password2', 'password', 'required|matches[user_password]');
        $this->form_validation->set_rules('masakan_harga', 'harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/form_user', $data);
            $this->load->view('template/footer');
        } else {
            echo "validasi berhasil";
        }
    }

    public function order_makanan()
    {
        $data = [
            'title' => 'Order Makanan',
            'action' => site_url('admin/tambah_user'),
            'levelall' => $this->admin_model->getAllLevel()
            
        ];

        $this->form_validation->set_rules('user_nama', 'nama user', 'required');
        $this->form_validation->set_rules('user_username', 'username', 'required|is_unique[user.user_username]');
        $this->form_validation->set_rules('user_password', 'password', 'required');
        $this->form_validation->set_rules('user_password2', 'password', 'required|matches[user_password]');
        $this->form_validation->set_rules('masakan_harga', 'harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/order/order', $data);
            $this->load->view('template/footer');
        } else {
            echo "validasi berhasil";
        }
    }

    

    public function user()
    {
        $data = [
            'title' => 'Halaman admin',
            'orderall' => $this->db->get('order')->result_array(),
            'userall' => $this->db->get('user')->result_array(),
            'user' => $this->db->get_where('user', ['user_username' => $this->session->userdata('user_username')])->row_array()
        ];
        $this->load->view('template/header', $data);
        $this->load->view('user/user', $data);
        $this->load->view('template/footer');
    }

}
