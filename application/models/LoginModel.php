<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function Login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }

    public function GetJabatan($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('users');
    }

}
