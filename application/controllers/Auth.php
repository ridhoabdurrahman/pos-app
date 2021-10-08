<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    public function login()
    {
        is_login();
        $this->load->view('auth/v_login');
    }

    public function ceklogin()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $login = $this->M_Auth->getLogin($username, $password);
        $ceklogin = $login->num_rows();

        $datalogin = $login->row_array();
        $data = array(
            'id_user' => $datalogin['id_user'],
            'nama_lengkap' => $datalogin['nama_lengkap'],
            'username' => $datalogin['username'],
            'level' => $datalogin['level'],
            'kode_cabang' => $datalogin['kode_cabang']
        );
        $this->session->set_userdata($data);

        if ($ceklogin == 1) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('msg', 'salah');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('auth/login');
    }
}
