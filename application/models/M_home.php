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

    public function slider_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(5);

        return $this->db->get()->result();
    }

    public function galeri()
    {
        $this->db->select('tbl_galeri.*,count(tbl_foto.id_galeri) as jml_foto');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_foto', 'tbl_foto.id_galeri = tbl_galeri.id_galeri', 'left');
        $this->db->group_by('tbl_galeri.id_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'DESC');

        return $this->db->get()->result();
    }

    public function detail_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('tbl_foto.id_foto', 'DESC');

        return $this->db->get()->result();
    }
    public function nama_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->where('id_galeri', $id_galeri);

        return $this->db->get()->row();
    }

    public function kelas()
    {
        $this->db->select('*');
        $this->db->from('tbl_kelas');
        $this->db->order_by('id_kelas', 'DESC');

        return $this->db->get()->result();
    }

    public function nama_kelas($id_kelas)
    {
        $this->db->select('*');
        $this->db->from('tbl_kelas');
        $this->db->where('id_kelas', $id_kelas);

        return $this->db->get()->row();
    }

    public function siswa()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        $this->db->order_by('id_siswa', 'DESC');

        return $this->db->get()->result();
    }
}
