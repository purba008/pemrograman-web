<?php
class AsetModel extends CI_Model
{
    private $table = 'tabel_aset';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function add($data_input)
    {
        $this->db->insert($this->table, $data_input);
    }
    public function delete($id)
    {
        $this->db->delete($this->table, ['id' => $id]);
    }
    
}