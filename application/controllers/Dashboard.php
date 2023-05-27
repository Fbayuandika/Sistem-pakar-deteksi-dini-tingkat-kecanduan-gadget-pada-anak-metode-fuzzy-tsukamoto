<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['pertanyaan'] = $this->Pertanyaan_model->getAllPertanyaan();
        $data['aturan'] = $this->Aturan_model->getAllAturan();
        $data['hasil'] = $this->Pakar_model->numAllHasil();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer');
    }
}
