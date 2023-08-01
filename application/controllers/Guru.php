<?php

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guru');
        $this->load->model('m_mapel');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Guru',
            'title2'     => 'Data Guru',
            'guru'        => $this->m_guru->lists(),
            'isi'       => 'admin/guru/v_list'

        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_guru/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_guru')) {

                $data = array(
                    'title'     => 'Guru',
                    'title2'    => 'Tambah Data Guru',
                    'error'     => $this->upload->display_errors(),
                    'mapel'     => $this->m_mapel->lists(),
                    'isi'       => 'admin/guru/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nip'           => $this->input->post('nip'),
                    'nama_guru'     => $this->input->post('nama_guru'),
                    'id_mapel'      => $this->input->post('id_mapel'),
                    'foto_guru'     => $upload_data['uploads']['file_name']
                );

                $this->m_guru->add($data);
                $this->session->flashdata('pesan', 'Data Guru Berhasil Ditambahkan!');
                redirect('guru');
            }
        }
        $data = array(
            'title'     => 'Guru',
            'title2'    => 'Tambah Data Guru',
            'mapel'     => $this->m_mapel->lists(),
            'isi'       => 'admin/guru/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_guru)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_guru/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_guru')) {

                $data = array(
                    'title'     => 'Guru',
                    'title2'    => 'Ubah Data Guru',
                    'error'     => $this->upload->display_errors(),
                    'mapel'     => $this->m_mapel->lists(),
                    'guru'     => $this->m_guru->detail($id_guru),
                    'isi'       => 'admin/guru/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Hapus file foto yang lama
                $guru = $this->m_guru->detail($id_guru);
                if ($guru->foto_guru != "") {
                    unlink('./foto_guru/' . $guru->foto_guru);
                }

                $data = array(
                    'id_guru'       => $id_guru,
                    'nip'           => $this->input->post('nip'),
                    'nama_guru'     => $this->input->post('nama_guru'),
                    'id_mapel'      => $this->input->post('id_mapel'),
                    'foto_guru'     => $upload_data['uploads']['file_name']
                );

                $this->m_guru->edit($data);
                $this->session->flashdata('pesan', 'Data Guru Berhasil Diubah!');
                redirect('guru');
            }
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_guru'       => $id_guru,
                'nip'           => $this->input->post('nip'),
                'nama_guru'     => $this->input->post('nama_guru'),
                'id_mapel'      => $this->input->post('id_mapel'),
            );

            $this->m_guru->edit($data);
            $this->session->flashdata('pesan', 'Data Guru Berhasil Diubah!');
            redirect('guru');
        }
        $data = array(
            'title'     => 'Guru',
            'title2'    => 'Ubah Data Guru',
            'mapel'     => $this->m_mapel->lists(),
            'guru'     => $this->m_guru->detail($id_guru),
            'isi'       => 'admin/guru/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_guru)
    {
        // Hapus file foto yang lama
        $guru = $this->m_guru->detail($id_guru);
        if ($guru->foto_guru != "") {
            unlink('./foto_guru/' . $guru->foto_guru);
        }

        $data = array('id_guru' => $id_guru);
        $this->m_guru->delete($data);
        $this->session->flashdata('pesan', 'Data Guru Berhasil Dihapus!');
        redirect('guru');
    }
}
