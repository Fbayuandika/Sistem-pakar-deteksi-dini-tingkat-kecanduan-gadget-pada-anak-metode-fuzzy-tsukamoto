<?php

class Pertanyaan_model extends CI_Model
{
    public function getAllPertanyaan()
    {
        return $this->db->get('pertanyaan')->num_rows();
    }

    public function readPertanyaan()
    {
        $query = "SELECT `pertanyaan`.*, `dimensi`.*
                FROM `pertanyaan` LEFT JOIN `dimensi`
                ON `pertanyaan`.`id_dimensi` = `dimensi`.`id_dimensi`
        ";

        return $this->db->query($query)->result_array();
    }

    public function createPertanyaan()
    {
        $data = [
            'pernyataan1' => $this->input->post('pernyataan1'),
            'pernyataan2' => $this->input->post('pernyataan2'),
            'pernyataan3' => $this->input->post('pernyataan3'),
            'pernyataan4' => $this->input->post('pernyataan4'),
            'bobot1' => $this->input->post('bobot1'),
            'bobot2' => $this->input->post('bobot2'),
            'bobot3' => $this->input->post('bobot3'),
            'bobot4' => $this->input->post('bobot4'),
            'id_dimensi' => $this->input->post('id_dimensi')
        ];

        $this->db->insert('pertanyaan', $data);
    }

    public function getPertanyaan($id)
    {
        $this->db->where('id_pertanyaan', $id);
        $action = $this->db->get('pertanyaan')->row_array();
        return $action;
    }

    public function updatePertanyaan($id)
    {
        $data = [
            'pernyataan1' => $this->input->post('pernyataan1'),
            'pernyataan2' => $this->input->post('pernyataan2'),
            'pernyataan3' => $this->input->post('pernyataan3'),
            'pernyataan4' => $this->input->post('pernyataan4'),
            'bobot1' => $this->input->post('bobot1'),
            'bobot2' => $this->input->post('bobot2'),
            'bobot3' => $this->input->post('bobot3'),
            'bobot4' => $this->input->post('bobot4'),
            'id_dimensi' => $this->input->post('id_dimensi')
        ];
        $this->db->where('id_pertanyaan', $id);
        $this->db->update('pertanyaan', $data);
        return $id;
    }

    public function deletePertanyaan($id)
    {
        $this->db->where('id_pertanyaan', $id);
        $action = $this->db->delete('pertanyaan');
        return $action;
    }
}
