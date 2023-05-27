<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fuzzifikasi extends CI_Controller
{
    public function index($id)
    {
        $data['user'] = $this->Anak_model->get_user($id);
    }
}
