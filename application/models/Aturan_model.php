<?php

class Aturan_model extends CI_Model
{
    public function getAllAturan()
    {
        return $this->db->get('aturan')->num_rows();
    }

    public function getAll()
    {
        $query = "SELECT `aturan`.*, `kecanduan`.*
                  FROM `aturan` LEFT JOIN `kecanduan`
                  ON `aturan`.`id_tingkat_kecanduan` = `kecanduan`.`id_tingkat_kecanduan`";

        return $this->db->query($query)->result_array();
    }

    public function create()
    {
        $data = [
            'dimensi1' => $this->input->post('dimensi1'),
            'dimensi2' => $this->input->post('dimensi2'),
            'dimensi3' => $this->input->post('dimensi3'),
            'id_tingkat_kecanduan' => $this->input->post('id_kecanduan'),
        ];

        $this->db->insert('aturan', $data);
    }

    public function update($id)
    {
        $data = [
            'dimensi1' => $this->input->post('dimensi1'),
            'dimensi2' => $this->input->post('dimensi2'),
            'dimensi3' => $this->input->post('dimensi3'),
            'id_tingkat_kecanduan' => $this->input->post('id_kecanduan'),
        ];

        $this->db->where('id_aturan', $id);
        $this->db->update('aturan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_aturan', $id);
        $action = $this->db->delete('aturan');
        return $action;
    }

    public function getAturan($dimensi1, $dimensi2, $dimensi3)
    {
        $this->db->where('dimensi1', $dimensi1);
        $this->db->where('dimensi2', $dimensi2);
        $this->db->where('dimensi3', $dimensi3);
        $query = $this->db->get('aturan');
        return $query->row_array();
    }
}
