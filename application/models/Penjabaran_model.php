<?php

class Penjabaran_model extends CI_Model
{
    public function ambil_user($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('anak');
        return $action->row_array();
    }

    public function ambil_skor($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('kepakaran');
        return $action->row_array();
    }

    public function ambil_dimensi($id)
    {
        $this->db->where('id_dimensi', $id);
        $action = $this->db->get('bobot');
        return $action->result_array();
    }

    public function ambil_aturan($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('buat_aturan');
        return $action->result_array();
    }

    public function ambil_defuzzy($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('defuzzifikasi');
        return $action->result_array();
    }

    public function ambil_jawaban($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('jawaban');
        return $action->result_array();
    }

    public function ambil_pertanyaan()
    {
        $action = $this->db->get('pertanyaan');
        return $action->result_array();
    }

    public function hapus_anak($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('anak');
        return $action;
    }

    public function hapus_buat_aturan($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('buat_aturan');
        return $action;
    }

    public function hapus_defuzzy($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('defuzzifikasi');
        return $action;
    }

    public function hapus_kepakaran($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('kepakaran');
        return $action;
    }

    public function hapus_fuzzy($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('fuzzifikasi');
        return $action;
    }
    public function hapus_hasil($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('hasil');
        return $action;
    }
    public function hapus_jawaban($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->delete('jawaban');
        return $action;
    }
}
