<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk_model');
        $this->load->model('bansos_model');
        $this->load->model('vaksin_model');

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda belum login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Penduduk';
        $data['penduduk'] = $this->penduduk_model->get_data()->result();
        $data['bansos'] = $this->bansos_model->get_data('tbl_bansos');
        $data['vaksin'] = $this->vaksin_model->get_data('tbl_vaksin');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penduduk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Penduduk';
        $data['bansos'] = $this->bansos_model->get_data('tbl_bansos');
        $data['vaksin'] = $this->vaksin_model->get_data('tbl_vaksin');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_penduduk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_penduduk' => htmlspecialchars($this->input->post('nama_penduduk')),
                'nik' => htmlspecialchars($this->input->post('nik')),
                'no_kk' => htmlspecialchars($this->input->post('no_kk')),
                'status_kk' => htmlspecialchars($this->input->post('status_kk')),
                'id_bansos' => htmlspecialchars($this->input->post('id_bansos')),
                'vaksin_satu' => htmlspecialchars($this->input->post('vaksin_satu')),
                'vaksin_dua' => htmlspecialchars($this->input->post('vaksin_dua')),
                'no_telp' => htmlspecialchars($this->input->post('no_telp')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
            );

            $this->penduduk_model->insert_data($data, 'tbl_penduduk');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('penduduk');
        }
    }

    public function edit($id_penduduk)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_penduduk' => $id_penduduk,
                'nama_penduduk' => htmlspecialchars($this->input->post('nama_penduduk')),
                'nik' => htmlspecialchars($this->input->post('nik')),
                'no_kk' => htmlspecialchars($this->input->post('no_kk')),
                'status_kk' => htmlspecialchars($this->input->post('status_kk')),
                'id_bansos' => htmlspecialchars($this->input->post('id_bansos')),
                'vaksin_satu' => htmlspecialchars($this->input->post('vaksin_satu')),
                'vaksin_dua' => htmlspecialchars($this->input->post('vaksin_dua')),
                'no_telp' => htmlspecialchars($this->input->post('no_telp')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
            );

            $this->penduduk_model->update_data($data, 'tbl_penduduk');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('penduduk');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_penduduk', 'Nama Penduduk', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('no_kk', 'No KK', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('status_kk', 'Status KK', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('id_bansos', 'Bansos', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('vaksin_satu', 'Vaksin 1', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('vaksin_dua', 'Vaksin 2', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required', [
            'required' => '%s harus diisi !!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => '%s harus diisi !!'
        ]);
    }

    public function delete($id)
    {
        $where = array('id_penduduk' => $id);

        $this->penduduk_model->delete_data($where, 'tbl_penduduk');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('penduduk');
    }
}

/* End of file Dashboard.php */
