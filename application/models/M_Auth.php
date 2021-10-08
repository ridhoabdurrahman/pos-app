<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    public function getLogin($username, $password)
    {
        return $this->db->get_where('users', array('username' => $username, 'password' => $password));
    }
}
