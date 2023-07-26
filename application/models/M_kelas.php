<?php

class M_kelas extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_kelas');
        $this->db->order_by('id_kelas', 'DESC');

        return $this->db->get()->result();
    }

    public function lists_siswa()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        // $this->db->where('id_kelas', $id_kelas);
        $this->db->order_by('id_siswa', 'DESC');

        return $this->db->get()->result();
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kelas');
        $this->db->where('id_kelas', $id);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_kelas', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_kelas', $data['id_kelas']);
        $this->db->update('tbl_kelas', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_kelas', $data['id_kelas']);
        $this->db->delete('tbl_kelas', $data);
    }
}
