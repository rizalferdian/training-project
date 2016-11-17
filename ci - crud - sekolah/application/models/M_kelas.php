<?php
class M_kelas extends CI_Model {

  public function getKelas()
  {
    $data = $this->db->get('kelas');
    return $data->result();
  }

  public function act_tambah($param)
  {
    $data = $this->db->insert('kelas', $param);
    return $this->db->affected_rows();
  }

  public function getDetailKelas($id)
  {
    $this->db->where("id_kelas", $id);
    $data = $this->db->get('kelas');
    return $data->row();
  }

  public function act_edit($param)
  {
    $object = [
      'nama_kelas' => $param['nama_kelas'],
      ];

    $this->db->where('id_kelas', $param['id_kelas']);
    $data = $this->db->update('kelas', $param);
    return $this->db->affected_rows();
  }

   public function act_hapus($id)
  {
    $this->db->where('id_kelas', $id);
    $this->db->delete('kelas');
    return $this->db->affected_rows();
  }
}
?>