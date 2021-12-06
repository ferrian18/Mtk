<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mtk extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}