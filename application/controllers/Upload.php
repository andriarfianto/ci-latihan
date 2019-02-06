<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: andri
 * Date: 12/24/18
 * Time: 9:12 AM
 */

class Upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
    }

    public function index()
    {
        $this->load->view('v_upload', array('error' => ''));
    }

    public function aksi_upload()
    {
        $config['upload_path']      = './gambar'; // folder untuk menyimpan file
        $config['allowed_types']    = 'gif|png|jpg'; // tipe file yang diperbolehkan
        $config['max_size']         = 100; // maksimal ukuran
        $config['max_width']        = 1024; // maksimal lebar
        $config['max_height']       = 768; // maksimal tinggi

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_upload_sukses', $data);
        }
    }
}