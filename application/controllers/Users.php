<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {
        $data['users'] = $this->users_model->getAll();
        $this->load->view('list_users', $data);
    }

    public function form_add()
    {
        $this->load->view('form_add_user');
    }

    public function add_user()
    {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        $data['mobile'] = $this->input->post('mobile');

        $result = $this->user_model->add($data);

        if ($result) {
            header('location:'.base_url('users').$this->index());
        }
    }
}