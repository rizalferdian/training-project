<?php
class M_profile extends CI_Model {
  
  var $table = 'login';
  
  public function detail($id)
  {
    $data['id'] = $id;
    $this->db->where($data);
    $query = $this->db->get($this->table);

    return $query->row_array();
  }
  
  public function update($data){
    $id['id'] = $data['id'];
    $this->db->update($this->table, $data, $id);
  }
}