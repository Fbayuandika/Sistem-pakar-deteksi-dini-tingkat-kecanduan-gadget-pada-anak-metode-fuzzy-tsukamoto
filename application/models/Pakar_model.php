<?php

class Pakar_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('kecanduan_pakar')->result_array();
    }

    public function create()
    {
        $data = [
            'tingkat_kecanduan' => $this->input->post('nama'),
            'skor_min' => $this->input->post('batas_bawah'),
            'skor_maks' => $this->input->post('batas_atas'),
            'pesan' => $this->input->post('pesan')
        ];

        $this->db->insert('kecanduan_pakar', $data);
    }

    public function update($id)
    {
        $data = [
            'tingkat_kecanduan' => $this->input->post('nama'),
            'skor_min' => $this->input->post('batas_bawah'),
            'skor_maks' => $this->input->post('batas_atas'),
            'pesan' => $this->input->post('pesan')
        ];
        $this->db->where('id_kecanduan_pakar', $id);
        $this->db->update('kecanduan_pakar', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_kecanduan_pakar', $id);
        $action = $this->db->delete('kecanduan_pakar');
        return $action;
    }

    public function numAllHasil()
    {
        return $this->db->get('hasil')->num_rows();
    }

    public function getAllHasil()
    {
        $query = "SELECT `hasil`.*, `anak`.*
                  FROM `hasil` LEFT JOIN `anak`
                  ON `hasil`.`id_anak` = `anak`.`id_anak` 
                  ";
        $action = $this->db->query($query)->result_array();
        return $action;
    }
}
