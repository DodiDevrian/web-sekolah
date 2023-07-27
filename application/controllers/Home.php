<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
            'title' => 'MAN 1 Lampung Tengah',
            'title2' => 'MAN 1 Lampung Tengah Official',
            'slider_berita' => $this->m_home->slider_berita(),
            'isi'   => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function download()
    {
        function menuAktif($class = '')
        {
            $ci = &get_instance();

            if ($ci->router->fetch_class() == $class) {
                return 'active';
            }
        }
        $data = array(
            'title' => 'Download',
            'title2' => 'MAN 1 Lampung Tengah',
            'downloads' => $this->m_home->downloads(),
            'isi'   => 'v_download'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function guru()
    {
        $data = array(
            'title' => 'Guru',
            'title2' => 'MAN 1 Lampung Tengah',
            'guru' => $this->m_home->guru(),
            'isi'   => 'v_guru'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;

        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = '<<First';
        $config[';ast_link'] = 'Last>>';
        $config['next_link'] = '>';
        $config['prev_link'] = '<';
        $config['full_tag_open'] = '<div class="text-center pagination_container flex-row align-items-center justify-content-start"><ul class="pagination_list">';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['full_tag_close'] = '</ul></div>';

        $this->pagination->initialize($config);

        $data = array(
            'pagination'        => $this->pagination->create_links(),
            'title'             => 'Berita',
            'berita_terkini'    => $this->m_home->berita_terkini(),
            'title2'            => 'MAN 1 Lampung Tengah',
            'berita'            => $this->m_home->berita($limit, $start),
            'isi'               => 'v_berita'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_berita($slug_berita)
    {
        $data = array(
            'title'  => 'Detail Berita',
            'title2' => 'MAN 1 Lampung Tengah',
            'berita_terkini'    => $this->m_home->berita_terkini(),
            'berita' => $this->m_home->detail_berita($slug_berita),
            'isi'    => 'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function galeri()
    {
        $data = array(
            'title'               => 'Galeri',
            'title2'              => 'MAN 1 Lampung Tengah',
            // 'berita_terkini'    => $this->m_home->berita_terkini(),
            'galeri'              => $this->m_home->galeri(),
            'isi'                 => 'v_galeri'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_galeri($id_galeri)
    {
        $data = array(
            'title'           => 'Galeri',
            'title2'          => 'MAN 1 Lampung Tengah',
            'galeri'          => $this->m_home->detail_galeri($id_galeri),
            'nama_galeri'     => $this->m_home->nama_galeri($id_galeri),
            'isi'             => 'v_detail_galeri'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function kelas()
    {
        $data = array(
            'title' => 'Kelas',
            'title2' => 'MAN 1 Lampung Tengah',
            'kelas' => $this->m_home->kelas(),
            'isi'   => 'v_kelas'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function siswa($id_kelas)
    {
        $data = array(
            'title' => 'Siswa',
            'title2' => 'MAN 1 Lampung Tengah',
            'kelas' => $this->m_home->nama_kelas($id_kelas),
            'siswa' => $this->m_home->siswa(),
            'id'     => $this->uri->segment(3),
            'isi'   => 'v_siswa'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}
