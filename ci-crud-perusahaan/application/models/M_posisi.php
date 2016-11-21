<?php
class M_posisi extends CI_Model {

  var $table = 'posisi';

  public function create($data){
    $data['id'] = null;
    $this->db->insert($this->table, $data);
  }

  public function read()
  {
    $query = $this->db->get($this->table);
    return $query->result_array();
  }

  public function update($data){
    $id['id'] = $data['id'];
    $this->db->update($this->table, $data, $id);
  }

  public function delete($id){
    $data['id'] = $id;
    $this->db->delete($this->table, $data);
  }

  public function detail($id)
  {
    $data['id'] = $id;
    $this->db->where($data);
    $query = $this->db->get($this->table);

    return $query->row_array();
  }
  
  public function total()
  {
    $query = $this->db->get($this->table);
    return $query->num_rows();
  }

  public function dataChart()
  {
    $this->db->select("{$this->table}.nama as label, count({$this->table}.nama) as value");
    $this->db->from("pegawai");
    $this->db->join("{$this->table}","{$this->table}.id = pegawai.id_{$this->table}");
    $this->db->group_by("{$this->table}.nama");
    $query = $this->db->get();
    return $query->result_array();
  }
}