<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Forum;';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('forum/index');
        $this->load->view('templates/footer');
    }
}