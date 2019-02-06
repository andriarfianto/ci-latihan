<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('v_form');
    }

    function aksi()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');

        if($this->form_validation->run() != false) {
            echo "Form validation berhasil";
        } else {
            $this->load->view('v_form');
        }
    }
}