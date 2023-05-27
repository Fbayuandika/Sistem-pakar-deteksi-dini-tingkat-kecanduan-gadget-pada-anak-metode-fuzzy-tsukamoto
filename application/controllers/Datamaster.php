<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamaster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library(array('form_validation', 'session'));
    }
    // controller Aturan
    public function index()
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Aturan';
        $data['dimensi'] = $this->Dimensi_model->getAll();
        $data['aturan'] = $this->Aturan_model->getAll();
        $data['kecanduan'] = $this->Kecanduan_model->getAll();

        // rules
        $this->form_validation->set_rules('dimensi1', 'Dimensi1', 'required');
        $this->form_validation->set_rules('dimensi2', 'Dimensi2', 'required');
        $this->form_validation->set_rules('dimensi3', 'Dimensi3', 'required');
        $this->form_validation->set_rules('id_kecanduan', 'Id_kecanduan', 'required');

        //validasi
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/aturan', $data);
            $this->load->view('template/footer');
        } else {
            $this->Aturan_model->create();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Aturan Baru Telah Ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('datamaster');
        }
    }

    public function editAturan()
    {
        $id = $this->input->post('id');
        $this->Aturan_model->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Aturan Telah Diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster');
    }

    public function deleteAturan($id)
    {
        $this->Aturan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Aturan Telah Dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster');
    }
    // end controller aturan

    // Controller Fuzzy
    public function fuzzy()
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Fuzzy';
        $data['dimensi'] = $this->Dimensi_model->getAll();
        $data['bobot'] = $this->Bobot_model->getAll();
        $data['kecanduan'] = $this->Kecanduan_model->getAll();

        // rules
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('batas_bawah', 'Batas_bawah', 'required');
        $this->form_validation->set_rules('batas_tengah', 'Batas_tengah', 'required');
        $this->form_validation->set_rules('batas_atas', 'Batas_atas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/fuzzy', $data);
            $this->load->view('template/footer');
        } else {
            $this->Bobot_model->create();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Variabel Baru Telah Ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('datamaster/fuzzy');
        }
    }

    public function editFuzzy()
    {
        $id = $this->input->post('id');
        $this->Bobot_model->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Variabel Telah Diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/fuzzy');
    }

    public function deleteFuzzy($id)
    {
        $this->Bobot_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Variabel Telah Dihapus  !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/fuzzy');
    }

    public function fuzzyKecanduan()
    {
        $this->Kecanduan_model->create();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Kecanduan Baru Telah Ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/fuzzy');
    }

    public function editFuzzyKecanduan()
    {
        $id = $this->input->post('id');
        $this->Kecanduan_model->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Kecanduan Telah Diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/fuzzy');
    }

    public function deleteFuzzyKecanduan($id)
    {
        $this->Kecanduan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Kecanduan Telah Dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/fuzzy');
    }
    // End Controller Fuzzy

    // Controller Pertanyaan
    public function pertanyaan()
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Pertanyaan';
        $data['pertanyaan'] = $this->Pertanyaan_model->readPertanyaan();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/pertanyaan', $data);
        $this->load->view('template/footer');
    }

    public function addPertanyaan()
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Pertanyaan';
        $data['dimensi'] = $this->Dimensi_model->getAll();

        //rules form
        $this->form_validation->set_rules('pernyataan1', 'Pernyataan1', 'required');
        $this->form_validation->set_rules('pernyataan2', 'Pernyataan2', 'required');
        $this->form_validation->set_rules('pernyataan3', 'Pernyataan3', 'required');
        $this->form_validation->set_rules('pernyataan4', 'Pernyataan4', 'required');
        $this->form_validation->set_rules('bobot1', 'Bobot1', 'required');
        $this->form_validation->set_rules('bobot2', 'Bobot2', 'required');
        $this->form_validation->set_rules('bobot3', 'Bobot3', 'required');
        $this->form_validation->set_rules('bobot4', 'Bobot4', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar', $data);
            $this->load->view('crud/create', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pertanyaan_model->createPertanyaan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pertanyaan Baru Telah Ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('datamaster/pertanyaan');
        }
    }

    public function editPertanyaan($id)
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Pertanyaan';
        $data['pertanyaan'] = $this->Pertanyaan_model->getPertanyaan($id);
        $data['dimensi'] = $this->Dimensi_model->getAll();

        //rules form
        $this->form_validation->set_rules('pernyataan1', 'Pernyataan1', 'required');
        $this->form_validation->set_rules('pernyataan2', 'Pernyataan2', 'required');
        $this->form_validation->set_rules('pernyataan3', 'Pernyataan3', 'required');
        $this->form_validation->set_rules('pernyataan4', 'Pernyataan4', 'required');
        $this->form_validation->set_rules('bobot1', 'Bobot1', 'required');
        $this->form_validation->set_rules('bobot2', 'Bobot2', 'required');
        $this->form_validation->set_rules('bobot3', 'Bobot3', 'required');
        $this->form_validation->set_rules('bobot4', 'Bobot4', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar', $data);
            $this->load->view('crud/update', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pertanyaan_model->updatePertanyaan($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pertanyaan Telah Diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('datamaster/pertanyaan');
        }
    }

    public function deletePertanyaan($id)
    {
        $this->Pertanyaan_model->deletePertanyaan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pertanyaan Telah Dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/pertanyaan');
    }
    // End Controller Pertanyaan

    // Controller Skor Kecanduan
    public function kecanduan()
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Skor Kecanduan';
        $data['pakar'] = $this->Pakar_model->getAll();

        //rules
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('batas_bawah', 'Batas_bawah', 'required');
        $this->form_validation->set_rules('batas_atas', 'Batas_atas', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        //validasi
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/kecanduan', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pakar_model->create();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Kecanduan Baru Telah Ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('datamaster/kecanduan');
        }
    }

    public function editKecanduan()
    {
        $id = $this->input->post('id');
        $this->Pakar_model->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Kecanduan Telah Diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/kecanduan');
    }

    public function deleteKecanduan($id)
    {
        $this->Pakar_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Tingkat Kecanduan Telah Dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/kecanduan');
    }
    // End Controller Skor Kecanduan

    //Controller Dimensi 
    public function dimensi()
    {
        $data['title'] = 'Data Master';
        $data['subtitle'] = 'Variabel Pendukung';
        $data['dimensi'] = $this->Dimensi_model->getAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dimensi', $data);
        $this->load->view('template/footer');

        // rules form dimensi
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('keterangan', 'Ket', 'required');

        //validasi
        if ($this->form_validation->run() == true) {
            $this->Dimensi_model->addDimensi();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Variabel Baru Telah Ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('datamaster/dimensi');
        }
    }

    public function editDimensi()
    {
        $id = $this->input->post('id');
        $this->Dimensi_model->updateDimensi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Variabel Telah Diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/dimensi');
    }

    public function deleteDimensi($id)
    {
        $this->Dimensi_model->deleteDimensi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Variabel Telah Dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('datamaster/dimensi');
    }
    // End Controller Dimensi

    // Controller Fuzzy Kecanduan


    // End Controller Fuzzy Kecanduan
}
