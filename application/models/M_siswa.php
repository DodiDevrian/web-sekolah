<?php

class M_siswa extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        $this->db->order_by('id_siswa', 'DESC');

        return $this->db->get()->result();
    }

    public function detail($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_siswa', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update('tbl_siswa', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->delete('tbl_siswa', $data);
    }
}
