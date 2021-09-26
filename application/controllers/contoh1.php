<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
    echo "Selamat Datang.. selamat belajar Web Programming";
    //$this->load->view('view-contoh1');
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('contoh2');

        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->contoh2->jumlah($nil1, $nil2);

        $this->load->view('contoh3', $data);
    }
}