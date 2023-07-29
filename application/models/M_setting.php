<?php

class M_setting extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_setting');
        $this->db->order_by('id_setting', 'DESC');

        return $this->db->get()->result();
    }

    public function detail($id_setting)
    {
        $this->db->select('*');
        $this->db->from('tbl_setting');
        $this->db->where('id_setting', $id_setting);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_setting', $data['id_setting']);
        $this->db->update('tbl_setting', $data);
    }
}
