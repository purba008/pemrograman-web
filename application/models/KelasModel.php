<?php
class KelasModel extends CI_Model
{
    private $table = 'tabel_2101060008';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}