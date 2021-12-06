<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Hitung';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('hitung/index');
        $this->load->view('templates/footer');
    }
    public function panjang()
    {
        $data['judul'] = 'Konversi Panjang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('hitung/panjang');
        $this->load->view('templates/footer');
    }
    public function berat()
    {
        $data['judul'] = 'Konversi Berat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('hitung/berat');
        $this->load->view('templates/footer');
    }
    public function bangunruang()
    {
        $data['judul'] = 'Konversi Bangun Ruang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/maintenance');
        $this->load->view('templates/footer');
    }
    public function bangundatar()
    {
        $data['judul'] = 'Konversi Bangun Datar';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/maintenance');
        $this->load->view('templates/footer');
    }
}