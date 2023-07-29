<?php

class M_pegawai extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->order_by('id_pegawai', 'DESC');

        return $this->db->get()->result();
    }

    public function detail($id_pegawai)
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_pegawai', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_pegawai', $data['id_pegawai']);
        $this->db->update('tbl_pegawai', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_pegawai', $data['id_pegawai']);
        $this->db->delete('tbl_pegawai', $data);
    }
}
