<?php
class M_guru extends CI_Model {

  public function getGuru()
  {
    $data = $this->db->get('guru');
    return $data->result();
  }

  public function act_tambah($param)
  {
    $data = $this->db->insert('guru', $param);
    return $this->db->affected_rows();
  }

  public function getDetailGuru($id)
  {
    $this->db->where("id_guru", $id);
    $data = $this->db->get('guru');
    return $data->row();
  }

  public function act_edit($param)
  {
    $object = [
      'nama_guru' => $param['nama_guru'],
      ];

    $this->db->where('id_guru', $param['id_guru']);
    $data = $this->db->update('guru', $param);
    return $this->db->affected_rows();
  }

   public function act_hapus($id)
  {
    $this->db->where('id_guru', $id);
    $this->db->delete('guru');
    return $this->db->affected_rows();
  }
}
?>