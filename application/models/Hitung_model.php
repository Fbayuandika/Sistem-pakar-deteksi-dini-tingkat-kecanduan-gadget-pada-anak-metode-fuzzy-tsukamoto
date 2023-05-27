<?php

class Hitung_model extends CI_Model
{
    public function create($dimensi1, $dimensi2, $dimensi3, $user)
    {
        $action = $this->Anak_model->get_anak_by_name($user);
        $data = [
            'dimensi1' => $dimensi1,
            'dimensi2' => $dimensi2,
            'dimensi3' => $dimensi3,
            'id_anak' => $action
        ];
        $this->sum($data);
        return $action;
    }

    public function sum($data)
    {
        $this->db->insert('jawaban', $data);
    }

    public function get($user)
    {
        $action = $action = $this->Anak_model->get_anak_by_name($user);
        $this->sumHasil($action);
        return $action;
    }

    public function sumHasil($id)
    {
        $query = "SELECT CAST(SUM(dimensi1)AS SIGNED), CAST(SUM(dimensi2)AS SIGNED),CAST(SUM(dimensi3)AS SIGNED)
        FROM `jawaban`
        WHERE `id_anak` = $id";
        $action = $this->db->query($query)->result_array();

        $data = [
            'dimensi1' => $action[0]['CAST(SUM(dimensi1)AS SIGNED)'],
            'dimensi2' => $action[0]['CAST(SUM(dimensi2)AS SIGNED)'],
            'dimensi3' => $action[0]['CAST(SUM(dimensi3)AS SIGNED)'],
            'skor_pakar' => array_sum($action[0]),
            'id_anak' => $id
        ];

        $this->__sumHasil($data);
        // var_dump($action[0]['CAST(SUM(dimensi1)AS SIGNED)']);
        // var_dump(array_sum($action[0]));
        return $action;
    }

    public function __sumHasil($data)
    {
        $this->db->insert('kepakaran', $data);
        $this->get_user($data['id_anak']);
        // redirect('user/hasil/' . $data['id_anak']);
    }

    public function pakar($id)
    {
        $query = "SELECT `kepakaran`.*,`anak`.*
                  FROM `kepakaran` LEFT JOIN `anak`
                  ON `kepakaran`.`id_anak` = `anak`.`id_anak`";
        $action = $this->db->query($query)->result_array();
        $this->db->where('id_anak', $id);
        $action = $this->db->get('kepakaran')->row_array();
        // $this->get_hasil($id);
        return $action;
    }

    public function inputHasil($id, $hasil)
    {
        $user = $id;
        $action = $this->getNilaiPakar($id);
        $nilai = $this->Pakar_model->getAll();

        foreach ($nilai as $value) {
            if ($action['skor_pakar'] >= $value['skor_min'] && $action['skor_pakar'] <= $value['skor_maks']) {
                $kecanduan = $value['tingkat_kecanduan'];
            }
        }

        foreach ($nilai as $value) {
            if (ceil($hasil) >= $value['skor_min'] && ceil($hasil) <= $value['skor_maks']) {
                $kecanduanFuzzy = $value['tingkat_kecanduan'];
            }
        }

        // if ($action['skor_pakar'] >= 20 && $action['skor_pakar'] <= 29) {
        //     $kecanduan = 'Normal';
        // } elseif ($action['skor_pakar'] >= 30 && $action['skor_pakar'] <= 39) {
        //     $kecanduan = 'Ringan';
        // } elseif ($action['skor_pakar'] >= 40 && $action['skor_pakar'] <= 49) {
        //     $kecanduan = 'Sedang';
        // } else {
        //     $kecanduan = 'Berat';
        // }

        // if ($hasil >= 20 && $hasil <= 29) {
        //     $kecanduanFuzzy = 'Normal';
        // } elseif ($hasil >= 30 && $hasil <= 39) {
        //     $kecanduanFuzzy = 'Ringan';
        // } elseif ($hasil >= 40 && $hasil <= 49) {
        //     $kecanduanFuzzy = 'Sedang';
        // } else {
        //     $kecanduanFuzzy = 'Berat';
        // }

        if ($kecanduan == $kecanduanFuzzy) {
            $status = 'Sesuai';
        } else {
            $status = 'Tidak Sesuai';
        }

        $data = [
            'id_anak' => $user,
            'tingkat_kecanduan' => $kecanduan,
            'skor_pakar' => $action['skor_pakar'],
            'hasil_hitung' => $hasil,
            'kecanduan_fuzzy' => $kecanduanFuzzy,
            'status' => $status
        ];

        $this->db->insert('hasil', $data);
        redirect('user/hasil/' . $user);
    }

    public function get_user($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('kepakaran')->row_array();
        $this->Fuzzy_model->fuzzy($action);
        // var_dump($action);
        return $action;
    }

    public function getNilaiPakar($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('kepakaran');
        return $action->row_array();
    }

    public function ambil_hasil($id)
    {
        $this->db->where('id_anak', $id);
        $action = $this->db->get('hasil');
        return $action->row_array();
    }
}
