<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_nav', $data);
        $this->load->view('user/beranda');
        $this->load->view('template/user_footer');
    }

    // controller deteksi
    public function deteksi()
    {
        $data['title'] = 'Deteksi';

        // rules
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_nav', $data);
            $this->load->view('user/deteksi');
            $this->load->view('template/user_footer');
        } else {
            $this->Anak_model->create();
            $namaLengkap = $this->input->post('nama');
            $namaArray = explode(' ', trim($namaLengkap));
            $user = $namaArray[0];
            redirect('user/valid/' . $user . '/1');
        }
    }

    public function valid($user, $no)
    {

        $data['user'] = $this->Anak_model->get($user);
        $data['title'] = 'Deteksi';
        $data['pertanyaan'] = $this->Pertanyaan_model->getPertanyaan($no);
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_nav', $data);
        $this->load->view('user/quiz', $data);
        $this->load->view('template/user_footer');
    }
    // end controller deteksi

    public function tentang()
    {
        $data['title'] = 'Tentang';
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_nav', $data);
        $this->load->view('user/tentang');
        $this->load->view('template/user_footer');
    }

    public function hitung($user, $no)
    {
        if ($no < 20) {
            $no++;
            if ($this->input->post('id_dimensi') == 1) {
                $dimensi1 = $this->input->post('bobot');
                $dimensi2 = 0;
                $dimensi3 = 0;
                $this->__hitung($dimensi1, $dimensi2, $dimensi3, $user);
            } elseif ($this->input->post('id_dimensi') == 2) {
                $dimensi2 = $this->input->post('bobot');
                $dimensi1 = 0;
                $dimensi3 = 0;
                $this->__hitung($dimensi1, $dimensi2, $dimensi3, $user);
            } else {
                $dimensi3 = $this->input->post('bobot');
                $dimensi1 = 0;
                $dimensi2 = 0;
                $this->__hitung($dimensi1, $dimensi2, $dimensi3, $user);
            }
            redirect('user/valid/' . $user . '/' . $no);
        } else {
            if ($this->input->post('id_dimensi') == 1) {
                $dimensi1 = $this->input->post('bobot');
                $dimensi2 = 0;
                $dimensi3 = 0;
                $this->__hitung($dimensi1, $dimensi2, $dimensi3, $user);
            } elseif ($this->input->post('id_dimensi') == 2) {
                $dimensi2 = $this->input->post('bobot');
                $dimensi1 = 0;
                $dimensi3 = 0;
                $this->__hitung($dimensi1, $dimensi2, $dimensi3, $user);
            } else {
                $dimensi3 = $this->input->post('bobot');
                $dimensi1 = 0;
                $dimensi2 = 0;
                $this->__hitung($dimensi1, $dimensi2, $dimensi3, $user);
            }
            $this->__hasil($user);
        }
    }

    public function __hitung($dimensi1, $dimensi2, $dimensi3, $user)
    {

        $total1 = $dimensi1;
        $total2 = $dimensi2;
        $total3 = $dimensi3;
        $this->Hitung_model->create($total1, $total2, $total3, $user);
    }

    public function __hasil($user)
    {
        $this->Hitung_model->get($user);
    }

    public function hasil($id)
    {
        $data['skor'] = $this->Hitung_model->ambil_hasil($id);
        $data['pakar'] = $this->Pakar_model->getAll();
        $data['title'] = 'Deteksi';
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_nav', $data);
        $this->load->view('user/hasil', $data);
        $this->load->view('template/user_footer');
    }
}
