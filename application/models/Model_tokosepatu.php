<?php

class Model_tokosepatu extends CI_Model
{

    public function hitung($hrg = null, $jumlah = null)
    {
        $hasil = $hrg * $jumlah;

        return $hasil;
    }
}
