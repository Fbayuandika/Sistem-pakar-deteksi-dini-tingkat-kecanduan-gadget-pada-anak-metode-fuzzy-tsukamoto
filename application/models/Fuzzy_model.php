<?php

class Fuzzy_model extends CI_Model
{
    public function fuzzy($data)
    {
        $dimensi1 = $data['dimensi1'];
        $dimensi2 = $data['dimensi2'];
        $dimensi3 = $data['dimensi3'];
        $user = $data['id_anak'];
        $id = 1;

        for ($id = 1; $id <= 3; $id++) {
            $data = $this->Bobot_model->get_one($id);
            if ($id == 1) {
                for ($i = 0; $i < 4; $i++) {
                    if ($data[$i]['var_linguistik'] == 'Normal') {
                        if ($dimensi1 <= $data[$i]['Y']) {
                            $hasil = 1;
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi1 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } else {
                            $hasil = ($data[$i]['Z'] - $dimensi1) / ($data[$i]['Z'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        }
                    } elseif ($data[$i]['var_linguistik'] == 'Ringan') {
                        if ($dimensi1 <= $data[$i]['Y'] || $dimensi1 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } elseif ($dimensi1 >= $data[$i]['Y'] && $dimensi1 <= $data[$i]['Q']) {
                            $hasil = ($dimensi1 - $data[$i]['Y']) / ($data[$i]['Q'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi1 >= $data[$i]['Q'] && $dimensi1 <= $data[$i]['Z']) {
                            $hasil = ($data[$i]['Z'] - $dimensi1) / ($data[$i]['Z'] - $data[$i]['Q']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = 0;
                        }
                    } elseif ($data[$i]['var_linguistik'] == 'Sedang') {
                        if ($dimensi1 <= $data[$i]['Y'] || $dimensi1 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } elseif ($dimensi1 >= $data[$i]['Y'] && $dimensi1 <= $data[$i]['Q']) {
                            $hasil = ($dimensi1 - $data[$i]['Y']) / ($data[$i]['Q'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi1 >= $data[$i]['Q'] && $dimensi1 <= $data[$i]['Z']) {
                            $hasil = ($data[$i]['Z'] - $dimensi1) / ($data[$i]['Z'] - $data[$i]['Q']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = 0;
                        }
                    } else {
                        if ($dimensi1 <= $data[$i]['Y']) {
                            $hasil = 0;
                        } elseif ($dimensi1 >= $data[$i]['Z']) {
                            $hasil = 1;
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = ($dimensi1 - $data[$i]['Y']) / ($data[$i]['Z'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        }
                    }
                }
            } elseif ($id == 2) {
                for ($i = 0; $i < 4; $i++) {
                    if ($data[$i]['var_linguistik'] == 'Normal') {
                        if ($dimensi2 <= $data[$i]['Y']) {
                            $hasil = 1;
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi2 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } else {
                            $hasil = ($data[$i]['Z'] - $dimensi2) / ($data[$i]['Z'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        }
                    } elseif ($data[$i]['var_linguistik'] == 'Ringan') {
                        if ($dimensi2 <= $data[$i]['Y'] || $dimensi2 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } elseif ($dimensi2 >= $data[$i]['Y'] && $dimensi2 <= $data[$i]['Q']) {
                            $hasil = ($dimensi2 - $data[$i]['Y']) / ($data[$i]['Q'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi2 >= $data[$i]['Q'] && $dimensi2 <= $data[$i]['Z']) {
                            $hasil = ($data[$i]['Z'] - $dimensi2) / ($data[$i]['Z'] - $data[$i]['Q']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = 0;
                        }
                    } elseif ($data[$i]['var_linguistik'] == 'Sedang') {
                        if ($dimensi2 <= $data[$i]['Y'] || $dimensi2 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } elseif ($dimensi2 >= $data[$i]['Y'] && $dimensi2 <= $data[$i]['Q']) {
                            $hasil = ($dimensi2 - $data[$i]['Y']) / ($data[$i]['Q'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi2 >= $data[$i]['Q'] && $dimensi2 <= $data[$i]['Z']) {
                            $hasil = ($data[$i]['Z'] - $dimensi2) / ($data[$i]['Z'] - $data[$i]['Q']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = 0;
                        }
                    } else {
                        if ($dimensi2 <= $data[$i]['Y']) {
                            $hasil = 0;
                        } elseif ($dimensi2 >= $data[$i]['Z']) {
                            $hasil = 1;
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = ($dimensi2 - $data[$i]['Y']) / ($data[$i]['Z'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        }
                    }
                }
            } else {
                for ($i = 0; $i < 4; $i++) {
                    if ($data[$i]['var_linguistik'] == 'Normal') {
                        if ($dimensi3 <= $data[$i]['Y']) {
                            $hasil = 1;
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi3 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } else {
                            $hasil = ($data[$i]['Z'] - $dimensi3) / ($data[$i]['Z'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        }
                    } elseif ($data[$i]['var_linguistik'] == 'Ringan') {
                        if ($dimensi3 <= $data[$i]['Y'] || $dimensi3 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } elseif ($dimensi3 >= $data[$i]['Y'] && $dimensi3 <= $data[$i]['Q']) {
                            $hasil = ($dimensi3 - $data[$i]['Y']) / ($data[$i]['Q'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi3 >= $data[$i]['Q'] && $dimensi3 <= $data[$i]['Z']) {
                            $hasil = ($data[$i]['Z'] - $dimensi3) / ($data[$i]['Z'] - $data[$i]['Q']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = 0;
                        }
                    } elseif ($data[$i]['var_linguistik'] == 'Sedang') {
                        if ($dimensi3 <= $data[$i]['Y'] || $dimensi3 >= $data[$i]['Z']) {
                            $hasil = 0;
                        } elseif ($dimensi3 >= $data[$i]['Y'] && $dimensi3 <= $data[$i]['Q']) {
                            $hasil = ($dimensi3 - $data[$i]['Y']) / ($data[$i]['Q'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } elseif ($dimensi3 >= $data[$i]['Q'] && $dimensi3 <= $data[$i]['Z']) {
                            $hasil = ($data[$i]['Z'] - $dimensi3) / ($data[$i]['Z'] - $data[$i]['Q']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = 0;
                        }
                    } else {
                        if ($dimensi3 <= $data[$i]['Y']) {
                            $hasil = 0;
                        } elseif ($dimensi3 >= $data[$i]['Z']) {
                            $hasil = 1;
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        } else {
                            $hasil = ($dimensi3 - $data[$i]['Y']) / ($data[$i]['Z'] - $data[$i]['Y']);
                            if ($hasil > 0) {
                                $var[$i]['data'] = $data[$i]['var_linguistik'];
                                $insert = [
                                    'id_anak' => $user,
                                    'var_linguistik' => $data[$i]['var_linguistik'],
                                    'id_dimensi' => $id,
                                    'bil_fuzzy' => $hasil
                                ];
                                $this->db->insert('fuzzifikasi', $insert);
                            }
                        }
                    }
                }
            }
        }
        // var_dump($var, $hasil);
        // var_dump($dimensi1, $dimensi2, $dimensi3);
        $this->get_var($user);
    }

    public function get_var($id)
    {
        $user = $id;
        for ($i = 1; $i <= 3; $i++) {
            if ($i == 1) {
                $this->db->where('id_dimensi', $i);
                $this->db->where('id_anak', $user);
                $dimensi1 = $this->db->get('fuzzifikasi')->result_array();
                $dim1 = $this->db->get('fuzzifikasi')->num_rows();
            } elseif ($i == 2) {
                $this->db->where('id_dimensi', $i);
                $this->db->where('id_anak', $user);
                $dimensi2 = $this->db->get('fuzzifikasi')->result_array();
                $dim2 = $this->db->get('fuzzifikasi')->num_rows();
            } else {
                $this->db->where('id_dimensi', $i);
                $this->db->where('id_anak', $user);
                $dimensi3 = $this->db->get('fuzzifikasi')->result_array();
                $dim3 = $this->db->get('fuzzifikasi')->num_rows();
            }
        }

        foreach ($dimensi1 as $i => $val1) {
            foreach ($dimensi2 as $j => $val2) {
                foreach ($dimensi3 as $k => $val3) {
                    $index = ($i * count($dimensi2) * count($dimensi3)) + ($j * count($dimensi3)) + $k + 1;
                    $hasil = array(
                        'dimensi1' => $val1['var_linguistik'],
                        'bobot1' => $val1['bil_fuzzy'],
                        'dimensi2' => $val2['var_linguistik'],
                        'bobot2' => $val2['bil_fuzzy'],
                        'dimensi3' => $val3['var_linguistik'],
                        'bobot3' => $val3['bil_fuzzy'],
                        'id_anak' => $user
                    );
                    $this->db->insert('buat_aturan', $hasil);
                }
            }
        }

        $this->defuzzy($user);
        // var_dump(count($dimensi1));
    }

    public function defuzzy($id)
    {
        $user = $id;
        $this->db->where('id_anak', $user);
        $data = $this->db->get('buat_aturan')->result_array();

        for ($i = 0; $i < count($data); $i++) {
            $dimensi1[$i] = $data[$i]['dimensi1'];
            $dimensi2[$i] = $data[$i]['dimensi2'];
            $dimensi3[$i] = $data[$i]['dimensi3'];
            $action[$i] = $this->Aturan_model->getAturan($dimensi1[$i], $dimensi2[$i], $dimensi3[$i]);
            $value[$i] = $this->Kecanduan_model->get_Kecanduan($action[$i]['id_tingkat_kecanduan']);
            $val[$i] = json_decode(json_encode($value[$i]), true);

            if ($val[$i]['tingkat_kecanduan'] == 'Normal') {
                $min = [$data[$i]['bobot1'], $data[$i]['bobot2'], $data[$i]['bobot3']];
                $aPredikat[$i] = min($min);
                $zIndeks[$i] = - (($aPredikat[$i] * ($val[$i]['batas_atas'] - $val[$i]['batas_bawah'])) - $val[$i]['batas_atas']);
                $insert = [
                    'id_anak' => $user,
                    'a_predikat' => $aPredikat[$i],
                    'z_score' => $zIndeks[$i]
                ];
                $this->db->insert('defuzzifikasi', $insert);
            } elseif ($val[$i]['tingkat_kecanduan'] == 'Ringan') {
                $min = [$data[$i]['bobot1'], $data[$i]['bobot2'], $data[$i]['bobot3']];
                $aPredikat[$i] = min($min);
                $zIndeks[$i] = $val[$i]['batas_atas'] - ($aPredikat[$i] * ($val[$i]['batas_atas'] - $val[$i]['batas_bawah'])) / 2;
                $insert = [
                    'id_anak' => $user,
                    'a_predikat' => $aPredikat[$i],
                    'z_score' => $zIndeks[$i]
                ];
                $this->db->insert('defuzzifikasi', $insert);
            } elseif ($val[$i]['tingkat_kecanduan'] == 'Sedang') {
                $min = [$data[$i]['bobot1'], $data[$i]['bobot2'], $data[$i]['bobot3']];
                $aPredikat[$i] = min($min);
                $zIndeks[$i] = $val[$i]['batas_atas'] - ($aPredikat[$i] * ($val[$i]['batas_atas'] - $val[$i]['batas_bawah'])) / 2;
                $insert = [
                    'id_anak' => $user,
                    'a_predikat' => $aPredikat[$i],
                    'z_score' => $zIndeks[$i]
                ];
                $this->db->insert('defuzzifikasi', $insert);
            } else {
                $min = [$data[$i]['bobot1'], $data[$i]['bobot2'], $data[$i]['bobot3']];
                $aPredikat[$i] = min($min);
                $zIndeks[$i] = (($aPredikat[$i] * ($val[$i]['batas_atas'] - $val[$i]['batas_bawah'])) + $val[$i]['batas_bawah']);
                $insert = [
                    'id_anak' => $user,
                    'a_predikat' => $aPredikat[$i],
                    'z_score' => $zIndeks[$i]
                ];
                $this->db->insert('defuzzifikasi', $insert);
            }
        }

        for ($d = 0; $d < count($zIndeks); $d++) {
            $Z[$d] = $zIndeks[$d] * $aPredikat[$d];
        }

        $sumZ = array_sum($Z);
        $sumA = array_sum($aPredikat);

        $hasil = $sumZ / $sumA;

        $this->Hitung_model->inputHasil($user, $hasil);
        // var_dump($hasil);
    }
}
