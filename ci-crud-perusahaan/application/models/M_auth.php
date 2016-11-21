<?php
class M_auth extends CI_Model {
  
  var $table = 'login';
  
  public function login($data){
    $data['password'] = md5($data['password']);
    $this->db->where('username', $data['username']);
    $this->db->where('password', $data['password']);
    
    $query = $this->db->get($this->table);
    return $query->row();
  }
}