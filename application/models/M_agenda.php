<?php

class M_agenda extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_agenda');
        $this->db->order_by('id_agenda', 'ASC');

        return $this->db->get()->result();
    }

    public function detail($id_agenda)
    {
        $this->db->select('*');
        $this->db->from('tbl_agenda');
        $this->db->where('id_agenda', $id_agenda);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_agenda', $data['id_agenda']);
        $this->db->update('tbl_agenda', $data);
    }
}
