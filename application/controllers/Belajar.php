<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belajar extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Belajar';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/index');
        $this->load->view('templates/footer');
    }

    public function perbandingan()
    {
        $data['judul'] = 'Belajar Perbandingan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/perbandingan');
        $this->load->view('templates/footer');
    }

    public function logaritma()
    {
        $data['judul'] = 'Belajar Logaritma';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/logaritma');
        $this->load->view('templates/footer');
    }

    public function aritmetika()
    {
        $data['judul'] = 'Belajar Aritmetika';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/aritmetika');
        $this->load->view('templates/footer');
    }

    public function operasihitungpecahan()
    {
        $data['judul'] = 'Belajar Operasi Hiting Pecahan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/operasihitungpecahan');
        $this->load->view('templates/footer');
    }

    public function bangundatar()
    {
        $data['judul'] = 'Belajar Bangun Datar';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/bangundatar');
        $this->load->view('templates/footer');
    }

    public function bangunruang()
    {
        $data['judul'] = 'Belajar Bangun Ruang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/bangunruang');
        $this->load->view('templates/footer');
    }

    public function meanmedianmodus()
    {
        $data['judul'] = 'Belajar Mean Median Modus';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('belajar/meanmedianmodus');
        $this->load->view('templates/footer');
    }
}