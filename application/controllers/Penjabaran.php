<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjabaran extends CI_Controller
{
    public function index($id)
    {
        $data['title'] = 'Hasil Deteksi';


        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/penjabaran', $data);
        $this->load->view('template/footer');
    }
}
