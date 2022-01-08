<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda belum login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'User';
        $data['user'] = $this->user_model->get_data('tbl_user')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah User';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_user');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $foto_user = $_FILES['foto_user']['name'];
            if ($foto_user = '') {
            } else {
                $config['upload_path'] = './assets/foto';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto_user')) {
                    echo 'Upload Gagal!';
                    die();
                } else {
                    $foto_user = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_user' => htmlspecialchars($this->input->post('nama_user')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => htmlspecialchars($this->input->post('password')),
                'nomor_telepon' => htmlspecialchars($this->input->post('nomor_telepon')),
                'hak_akses' => htmlspecialchars($this->input->post('hak_akses')),
                'foto_user' => $foto_user,
            );

            $this->user_model->insert_data($data, 'tbl_user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('user');
        }
    }

    public function edit($id_user)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $foto_user = $_FILES['foto_user']['name'];
            if ($foto_user) {
                $config['upload_path'] = './assets/foto';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_user')) {
                    $foto_user = $this->upload->data('file_name');
                    $this->db->set('foto_user', $foto_user);
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }

        $data = array(
            'id_user' => $id_user,
            'nama_user' => htmlspecialchars($this->input->post('nama_user')),
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => htmlspecialchars($this->input->post('password')),
            'nomor_telepon' => htmlspecialchars($this->input->post('nomor_telepon')),
            'hak_akses' => htmlspecialchars($this->input->post('hak_akses')),
            'foto_user' => $foto_user,
        );

        $this->user_model->update_data($data, 'tbl_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('user');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'required', [
            'required' => '%s harus diisi !!'
        ]);
    }

    public function delete($id)
    {
        $where = array('id_user' => $id);

        $this->user_model->delete_data($where, 'tbl_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('user');
    }
}

/* End of file User.php */
