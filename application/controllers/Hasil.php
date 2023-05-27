<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Hasil Deteksi';
        $data['hasil'] = $this->Pakar_model->getAllHasil();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/hasil', $data);
        $this->load->view('template/footer');
    }

    public function penjabaran($id)
    {
        $data['title'] = 'Hasil Deteksi';
        $data['subtitle'] = 'Penjabaran';
        $data['user'] = $this->Penjabaran_model->ambil_user($id);
        $data['nilai'] = $this->Penjabaran_model->ambil_skor($id);
        $data['skor'] = $this->Hitung_model->ambil_hasil($id);

        // ambil dimensi bobot
        $data['dimensi1'] = $this->Penjabaran_model->ambil_dimensi(1);
        $data['dimensi2'] = $this->Penjabaran_model->ambil_dimensi(2);
        $data['dimensi3'] = $this->Penjabaran_model->ambil_dimensi(3);

        $data['aturan'] = $this->Penjabaran_model->ambil_aturan($id);
        $data['defuzzy'] = $this->Penjabaran_model->ambil_defuzzy($id);
        $data['jawaban'] = $this->Penjabaran_model->ambil_jawaban($id);

        // ambil pertanyaan
        $data['pertanyaan'] = $this->Penjabaran_model->ambil_pertanyaan();
        $data['pertanyaan2'] = $this->Penjabaran_model->ambil_pertanyaan(2);
        $data['pertanyaan3'] = $this->Penjabaran_model->ambil_pertanyaan(3);

        // foreach ($defuzzy as $de) {
        //     $Z = $de['z_score'] * $de['a_predikat'];
        //     $sumA = $de['a_predikat'];
        // }

        // $data['z_score'] = array_sum($Z);
        // $data['a_predikat'] = array_sum($sumA);


        $aturan = $this->Penjabaran_model->ambil_aturan($id);

        for ($i = 0; $i < count($aturan); $i++) {
            $action[$i] = $this->Aturan_model->getAturan($aturan[$i]['dimensi1'], $aturan[$i]['dimensi2'], $aturan[$i]['dimensi3']);
            $value[$i] = $this->Kecanduan_model->get_Kecanduan($action[$i]['id_tingkat_kecanduan']);
            // $val[$i]= json_decode(json_encode($value[$i]), true);
        }
        $data['val'] = json_decode(json_encode($value), true);
        // foreach ($aturan as $rule) {
        //     $action = $this->Aturan_model->getAturan($rule['dimensi1'], $rule['dimensi2'], $rule['dimensi3']);
        //     $value = $this->Kecanduan_model->get_Kecanduan($action['id_tingkat_kecanduan']);
        //     $val = json_decode(json_encode($value), true);
        // }

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/penjabaran', $data);
        $this->load->view('template/footer');
    }

    public function delete($id)
    {
        $this->Penjabaran_model->hapus_anak($id);
        $this->Penjabaran_model->hapus_buat_aturan($id);
        $this->Penjabaran_model->hapus_defuzzy($id);
        $this->Penjabaran_model->hapus_jawaban($id);
        $this->Penjabaran_model->hapus_fuzzy($id);
        $this->Penjabaran_model->hapus_hasil($id);
        $this->Penjabaran_model->hapus_kepakaran($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('hasil');
    }
}
