<?php
class M_nilai extends CI_Model {

  public function getNilai()
  {
    $this->db->select('nilai.*, mapel.nama_mapel, siswa.nama as nama_siswa');
    $this->db->from('nilai');
    $this->db->join('mapel', 'mapel.id_mapel = nilai.id_mapel', 'left');
    $this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
    $data = $this->db->get();
    return $data->result();
  }

  public function act_tambah($param)
  {
    $data = $this->db->insert('nilai', $param);
    return $this->db->affected_rows();
  }

  public function getDetailNilai($id)
  {
    $this->db->where("id_nilai", $id);
    $data = $this->db->get('nilai');
    return $data->row();
  }

  public function act_edit($param)
  {
    $object = [
      'id_siswa' => $param['id_siswa'],
      'id_mapel' => $param['id_mapel'],
      'total_nilai' => $param['total_nilai']
      ];

    $this->db->where('id_nilai', $param['id_nilai']);
    $data = $this->db->update('nilai', $param);
    return $this->db->affected_rows();
  }

   public function act_hapus($id)
  {
    $this->db->where('id_nilai', $id);
    $this->db->delete('nilai');
    return $this->db->affected_rows();
  }
}
?>