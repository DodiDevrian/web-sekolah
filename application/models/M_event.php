<?php

class M_event extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->order_by('id_event', 'DESC');

        return $this->db->get()->result();
    }

    public function detail($id_event)
    {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('id_event', $id_event);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_event', $data['id_event']);
        $this->db->update('tbl_event', $data);
    }
}
