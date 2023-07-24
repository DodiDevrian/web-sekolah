<?php

class M_Download extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->order_by('id_file', 'DESC');

        return $this->db->get()->result();
    }

    public function detail($id_file)
    {
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->where('id_file', $id_file);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_file', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_file', $data['id_file']);
        $this->db->update('tbl_file', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_file', $data['id_file']);
        $this->db->delete('tbl_file', $data);
    }
}
