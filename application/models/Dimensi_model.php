<?php

class Dimensi_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('dimensi')->result_array();
    }

    public function addDimensi()
    {
        $data = [
            'nama_dimensi' => $this->input->post('nama'),
            'ket_dimensi' => $this->input->post('keterangan')
        ];

        $this->db->insert('dimensi', $data);
    }

    public function updateDimensi($id)
    {
        $data = array(
            'nama_dimensi' => $this->input->post('nama'),
            'ket_dimensi' => $this->input->post('keterangan')
        );
        $this->db->where('id_dimensi', $id);
        return $this->db->update('dimensi', $data);
    }

    public function deleteDimensi($id)
    {
        $this->db->where('id_dimensi', $id);
        $action = $this->db->delete('dimensi');
        return $action;
    }

    public function getForFuzzy()
    {
        $query = "SELECT `dimensi`.*, `bobot`.* 
                  FROM `dimensi` LEFT JOIN `bobot`
                  ON `dimensi`.`id_dimensi` = `bobot`.`id_dimensi`";

        return $this->db->query($query)->result_array();
    }
}
