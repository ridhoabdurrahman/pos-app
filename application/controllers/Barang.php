<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Barang');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Barang',
            'barang' => $this->M_Barang->getdatabarang()->result(),
        );
        $this->template->load('template/v_template', 'barang/v_barang', $data);
    }

    public function tambah_barang()
    {
        $this->load->view('barang/v_tambah_barang');
    }

    public function simpanbarang()
    {
        $kode_barang = $this->input->post('kdbarang');
        $nama_barang = $this->input->post('nmbarang');
        $satuan_barang = $this->input->post('satbarang');
        $data = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'satuan' => $satuan_barang,
        );

        $simpan = $this->M_Barang->tambahbarang($data);
        if ($simpan) {
            $this->session->set_flashdata('masg', 'berhasil');
            redirect('barang');
        } else {
        }
    }
}
