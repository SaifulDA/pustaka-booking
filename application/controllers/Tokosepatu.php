<?php

class Tokosepatu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tokosepatu');
    }

    public function index()
    {
        $this->load->view('toko-sepatu');
    }

    public function proses()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[3]');
        $this->form_validation->set_rules('nohp', 'No Telp/HP', 'numeric|min_length[10]');

        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['nohp'] = $this->input->post('nohp');
            $data['merk'] = $this->input->post('merk');
            $data['ukuran'] = $this->input->post('ukuran');
            $data['jumlah'] = $this->input->post('jml');
            if ($this->input->post('merk') == "Nike") {
                $harga = 375000;
            } else if ($this->input->post('merk') == "Adidas") {
                $harga = 300000;
            } else if ($this->input->post('merk') == "Kickers") {
                $harga = 250000;
            } else if ($this->input->post('merk') == "Eiger") {
                $harga = 275000;
            } else if ($this->input->post('merk') == "Bucherri") {
                $harga = 400000;
            } else {
                $harga = 0;
            }
            $data['harga'] = $harga;

            $data['hasil'] = $this->Model_tokosepatu->hitung($this->input->post('jml'), $harga);

            $this->load->view('hasil-toko-sepatu', $data);
        }
    }
}
