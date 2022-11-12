<?php

class KelasController extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel');
    }
    public function index()
    {
        $data['isi'] = $this->KelasModel->getAll();
       
       $this->load->view('kelascontroller/v_index', $data);
    }
}