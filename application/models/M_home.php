<?php

class M_home extends CI_Model
{
    public function downloads()
    {
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->order_by('id_file', 'DESC');

        return $this->db->get()->result();
    }

    public function guru()
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel', 'left');
        $this->db->order_by('id_guru', 'DESC');

        return $this->db->get()->result();
    }

    public function berita($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit($limit, $start);

        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);

        return $this->db->get()->row();
    }

    public function berita_terkini()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(5);

        return $this->db->get()->result();
    }
}
