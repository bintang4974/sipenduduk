<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('barang_model');
        // $this->load->model('user_model');

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda belum login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        // $data['barang'] = $this->barang_model->get_data('tbl_barang')->num_rows();
        // $data['user'] = $this->user_model->get_data('tbl_user')->num_rows();
        // $data['invoice'] = $this->transaksi_model->dashboard_data('tbl_invoice');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard.php */
