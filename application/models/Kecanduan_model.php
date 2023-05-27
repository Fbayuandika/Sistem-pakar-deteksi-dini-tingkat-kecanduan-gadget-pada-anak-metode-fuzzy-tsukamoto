<?php

class Kecanduan_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('kecanduan')->result_array();
    }

    public function create()
    {
        $data = [
            'tingkat_kecanduan' => $this->input->post('nama'),
            'batas_bawah' => $this->input->post('batas_bawah'),
            'batas_atas' => $this->input->post('batas_atas')
        ];

        $this->db->insert('kecanduan', $data);
    }

    public function update($id)
    {
        $data = [
            'tingkat_kecanduan' => $this->input->post('nama'),
            'batas_bawah' => $this->input->post('batas_bawah'),
            'batas_atas' => $this->input->post('batas_atas')
        ];
        $this->db->where('id_tingkat_kecanduan', $id);
        $this->db->update('kecanduan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_tingkat_kecanduan', $id);
        $action = $this->db->delete('kecanduan');
        return $action;
    }

    public function get_Kecanduan($action)
    {
        $this->db->where('id_tingkat_kecanduan', $action);
        $query = $this->db->get('kecanduan');
        return $query->row();
    }
}
