<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_notlogin();
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
        );
        $this->template->load('template/v_template', 'v_dashboard', $data);
    }
}
