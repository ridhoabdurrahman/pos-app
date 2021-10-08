<?php
function is_login()
{
    $CI = &get_instance();

    $level = $CI->session->userdata('level');
    if (!empty($level)) {
        redirect('dashboard');
    }
}

function is_notlogin()
{
    $CI = &get_instance();

    $level = $CI->session->userdata('level');
    if (empty($level)) {
        redirect('auth/login');
    }
}
