<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = 'Title Website';
        $data['content'] = 'Content Data';
        $this->load->view('blog_view', $data);
    }
}