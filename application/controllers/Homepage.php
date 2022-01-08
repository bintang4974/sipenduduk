<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk_model');
        $this->load->model('bansos_model');
        $this->load->model('vaksin_model');
    }

    public function index()
    {
        $data['title'] = 'Homepage';
        $data['penduduk'] = $this->penduduk_model->get_data_home('tbl_penduduk')->result();

        $this->load->view('templates_homepage/header', $data);
        $this->load->view('templates_homepage/sidebar', $data);
        $this->load->view('homepage', $data);
        $this->load->view('templates_homepage/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Penduduk';
        $detail = $this->penduduk_model->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('templates_homepage/header', $data);
        $this->load->view('templates_homepage/sidebar', $data);
        $this->load->view('detail_penduduk', $data);
        $this->load->view('templates_homepage/footer');
    }

    public function bansos()
    {
        $data['title'] = 'Bansos';
        $data['bansos'] = $this->bansos_model->get_data('tbl_bansos');

        $this->load->view('templates_homepage/header', $data);
        $this->load->view('templates_homepage/sidebar', $data);
        $this->load->view('homepage_bansos', $data);
        $this->load->view('templates_homepage/footer');
    }

    public function vaksin()
    {
        $data['title'] = 'Vaksin';
        $data['vaksin'] = $this->vaksin_model->get_data('tbl_vaksin');

        $this->load->view('templates_homepage/header', $data);
        $this->load->view('templates_homepage/sidebar', $data);
        $this->load->view('homepage_vaksin', $data);
        $this->load->view('templates_homepage/footer');
    }
}

/* End of file Homepage.php */
