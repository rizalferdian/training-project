<?php
class M_pegawai extends CI_Model {

  var $table = 'pegawai';

  public function create($data){
    $data['id'] = null;
    $this->db->insert($this->table, $data);
  }

  public function read()
  {
    $sql = "
    select 
    pegawai.id,
    pegawai.nama as namaPegawai,
    kelamin.nama as namaKelamin,
    pegawai.telp,
    kota.nama as namaKota,
    posisi.nama as namaPosisi
    from pegawai, kota, posisi, kelamin
    where 
    pegawai.id_kelamin = kelamin.id and
    pegawai.id_kota = kota.id and
    pegawai.id_posisi = posisi.id";

    $query = $this->db->query($sql);

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
}