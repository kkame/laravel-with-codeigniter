<?php


class Codeigniter extends CI_Controller
{


    public function index()
    {
        $this->load->view('inc/header');
        $this->load->view('codeigniter/index');
        $this->load->view('inc/footer');
    }
}