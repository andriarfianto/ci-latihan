<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    private $_table = "users";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add($data)
    {
        return $this->db->insert($this->_table, $data);
    }
}