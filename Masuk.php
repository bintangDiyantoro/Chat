<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Masuk";
        $this->load->view('templates/header', $data);
        $this->load->view('masuk/index');
        $this->load->view('templates/footer');
    }
}
