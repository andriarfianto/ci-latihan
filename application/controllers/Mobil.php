<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mobil_model');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation', 'session');
    }

    public function lihatdata()
    {
        $data['mobils'] = $this->mobil_model->get_all_data();
        $data['title'] = 'Tampil Data Mobil';
        $this->load->view('templates/header', $data);
        $this->load->view('tampildata', $data);
        $this->load->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Form Tambah Data Mobil';

        $this->load->view('templates/header', $data);
        $this->load->view('formtambah');
        $this->load->view('templates/footer');
    }

    public function tambahmobil()
    {
        $this->form_validation->set_message('is_unique', '{field} sudah terpakai');

        $this->form_validation->set_rules('kdmobil', 'Kode Mobil', ['required', 'is_unique[mobil.kdmobil]']);

        $this->validasi();

        if ($this->form_validation->run() === FALSE) {
                $this->formtambah();
        } else {
            $this->mobil_model->tambah_mobil();
            $this->session->set_flashdata('input_sukses', 'Data mobil berhasil di input');
            redirect(current_url());
        }
    }

    public function hapusdata($id)
    {
        $this->mobil_model->hapus_mobil($id);
        $this->session->set_flashdata('hapus_sukses', 'Data mobil berhasil di hapus');
        redirect('mobil/lihatdata');
    }

    public function formedit($id)
    {
        $data['title'] = 'Form Edit Data Mobil';

        $data['mobil'] = $this->mobil_model->edit_mobil($id);

        $this->load->view('templates/header', $data);
        $this->load->view('formedit', $data);
        $this->load->view('templates/footer');
    }

    public function updatemobil($id)
    {
        $this->validasi();

        if ($this->form_validation->run === FALSE) {
            $this->formedit($id);
        } else {
            $this->mobil_model->update_mobil;
            $this->session->set_flashdata('update_sukses', 'Data mobil berhasil di perbaharui');
            redirect('/mobil/lihatdata');
        }
    }

    public function validasi()
    {
        $this->form_validation->set_message('required', '{field} tidak boleh kosong');

        $config = [[
            'field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'
        ],
        [
            'field' => 'tahun',
            'label' => 'Tahun   ',
            'rules' => 'required'
        ],
        [
            'field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required'
        ],
        [
            'field' => 'nopol',
            'label' => 'Nopol',
            'rules' => 'required'
        ]];

        $this->form_validation->set_rules($config);
    }
}