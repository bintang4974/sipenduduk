<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Utama';
		
		$this->load->view('templates_homepage/header', $data);
        $this->load->view('templates_homepage/sidebar', $data);
        $this->load->view('pageUtama', $data);
        $this->load->view('templates_homepage/footer');
	}
}
