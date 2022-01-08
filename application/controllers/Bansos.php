<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bansos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bansos_model');

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda belum login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Bansos';
        $data['bansos'] = $this->bansos_model->get_data('tbl_bansos');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bansos', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Bansos';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_bansos');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'kode_bansos' => htmlspecialchars($this->input->post('kode_bansos')),
                'item_bansos' => htmlspecialchars($this->input->post('item_bansos')),
            );

            $this->bansos_model->insert_data($data, 'tbl_bansos');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('bansos');
        }
    }

    public function edit($id_bansos)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_bansos' => $id_bansos,
                'kode_bansos' => htmlspecialchars($this->input->post('kode_bansos')),
                'item_bansos' => htmlspecialchars($this->input->post('item_bansos')),
            );
    
            $this->bansos_model->update_data($data, 'tbl_bansos');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('bansos');

        }

    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_bansos', 'Kode Bansos', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('item_bansos', 'Item Bansos', 'required', [
            'required' => '%s harus diisi !!'
        ]);
    }

    public function delete($id)
    {
        $where = array('id_bansos' => $id);

        $this->bansos_model->delete_data($where, 'tbl_bansos');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('bansos');
    }
}

/* End of file User.php */
