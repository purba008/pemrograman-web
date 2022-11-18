<?php

class Aset extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsetModel');
    }
    public function index()
    {
        $data['isi'] = $this->AsetModel->getAll();
       
       $this->load->view('kelasaset/v_index', $data);
    }
    public function tambah()
    {
        return $this->load->view('kelasaset/v_tambah');
    }
    public function proses_tambah()
    {
        $nama = $this->input->post('txt_nama_aset');
        $jenis = $this->input->post('txt_jenis');
        $lokasi = $this->input->post('txt_lokasi');
        $jumlah = $this->input->post('txt_jumlah');

        $data_input =[
            'nama_aset' => $nama,
            'jenis' => $jenis,
            'lokasi' => $lokasi,
            'jumlah' => $jumlah,
        ];
       
        $simpan = $this->AsetModel->add($data_input);
        redirect('Aset/index');
    }
    public function hapus($id)
    {
        $this->AsetModel->delete($id);
        redirect('Aset/index');
    }
    
}