<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->login_model->cek_login($username, $password);

            if ($cek == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('login');
            } else {
                $this->session->set_userdata('hak_akses', $cek->hak_akses);
                $this->session->set_userdata('nama_user', $cek->nama_user);
                $this->session->set_userdata('nomor_telepon', $cek->nomor_telepon);
                $this->session->set_userdata('hak_akses', $cek->hak_akses);
                $this->session->set_userdata('foto_user', $cek->foto_user);
                switch ($cek->hak_akses) {
                    case 1:
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => '%s harus diisi !!'
        ]);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Berhasil Logout!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('login');
    }
}

/* End of file Login.php */
