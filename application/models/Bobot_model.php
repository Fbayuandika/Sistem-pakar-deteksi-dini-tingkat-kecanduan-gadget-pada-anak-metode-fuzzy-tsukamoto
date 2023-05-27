<?php

class Bobot_model extends CI_Model
{
    public function create()
    {
        $data = [
            'var_linguistik' => $this->input->post('nama'),
            'Y' => $this->input->post('batas_bawah'),
            'Q' => $this->input->post('batas_tengah'),
            'Z' => $this->input->post('batas_atas'),
            'id_dimensi' => $this->input->post('id_dimensi'),
        ];

        $this->db->insert('bobot', $data);
    }

    public function getAll()
    {
        return $this->db->get('bobot')->result_array();
    }

    public function update($id)
    {
        $data = [
            'var_linguistik' => $this->input->post('nama'),
            'Y' => $this->input->post('batas_bawah'),
            'Q' => $this->input->post('batas_tengah'),
            'Z' => $this->input->post('batas_atas'),
            'id_dimensi' => $this->input->post('id_dimensi'),
        ];

        $this->db->where('id_bobot', $id);
        $this->db->update('bobot', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_bobot', $id);
        $action = $this->db->delete('bobot');
        return $action;
    }

    public function get_one($id)
    {
        $this->db->where('id_dimensi', $id);
        $action =  $this->db->get('bobot')->result_array();
        // var_dump($action);
        return $action;
    }
}
