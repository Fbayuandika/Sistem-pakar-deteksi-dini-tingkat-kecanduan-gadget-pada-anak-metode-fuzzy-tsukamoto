<?php

class Anak_model extends CI_Model
{
    public function get($user)
    {
        $this->db->where('nama', $user);
        $action = $this->db->get('anak')->row_array();
        return $action;
    }

    public function create()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'umur' => $this->input->post('umur'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        ];
        $this->db->insert('anak', $data);
    }

    public function get_user($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('kepakaran')->row_array();
        var_dump($action);
        return $action;
    }

    public function get_anak_by_name($name)
    {
        $this->db->select('id_anak');
        $this->db->from('anak');
        $this->db->like('nama', $name, 'after');
        $this->db->order_by('id_anak', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id_anak;
        } else {
            return null;
        }
    }
}
