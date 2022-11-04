<?php 
class Home extends CI_controller{
  public function index()
    {
        echo 'Study WEB Framework';
    }
    public function tampil()
    {
        return $this->load->view('v_tampil');
    }
    public function form()
    {
       return $this->load->view('v_form');
    }

    public function mahasiswa()
    {
       return $this->load->view('v_mahasiswa');
    }
}