<?php

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Pegawai',
            'title2'     => 'Data Pegawai',
            'pegawai'        => $this->m_pegawai->lists(),
            'isi'       => 'admin/pegawai/v_list'

        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_pegawai/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_pegawai')) {

                $data = array(
                    'title'     => 'Guru',
                    'title2'    => 'Tambah Data Guru',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/pegawai/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_pegawai/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nip'           => $this->input->post('nip'),
                    'nama'     => $this->input->post('nama'),
                    'jabatan'      => $this->input->post('jabatan'),
                    'foto_pegawai'     => $upload_data['uploads']['file_name']
                );

                $this->m_pegawai->add($data);
                $this->session->flashdata('pesan', 'Data Guru Berhasil Ditambahkan!');
                redirect('pegawai');
            }
        }
        $data = array(
            'title'     => 'Guru',
            'title2'    => 'Tambah Data Guru',
            'isi'       => 'admin/pegawai/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_pegawai)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_pegawai/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_pegawai')) {

                $data = array(
                    'title'     => 'Pegawai',
                    'title2'    => 'Ubah Data Pegawai',
                    'error'     => $this->upload->display_errors(),
                    'pegawai'     => $this->m_pegawai->detail($id_pegawai),
                    'isi'       => 'admin/pegawai/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_pegawai/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Hapus file foto yang lama
                $guru = $this->m_pegawai->detail($id_pegawai);
                if ($guru->foto_pegawai != "") {
                    unlink('./foto_pegawai/' . $guru->foto_pegawai);
                }

                $data = array(
                    'id_pegawai'       => $id_pegawai,
                    'nip'           => $this->input->post('nip'),
                    'nama'     => $this->input->post('nama'),
                    'jabatan'      => $this->input->post('jabatan'),
                    'foto_pegawai'     => $upload_data['uploads']['file_name']
                );

                $this->m_pegawai->edit($data);
                $this->session->flashdata('pesan', 'Data Pegawai Berhasil Diubah!');
                redirect('pegawai');
            }
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_pegawai/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_pegawai'       => $id_pegawai,
                'nip'           => $this->input->post('nip'),
                'nama'     => $this->input->post('nama'),
                'jabatan'      => $this->input->post('jabatan'),
            );

            $this->m_pegawai->edit($data);
            $this->session->flashdata('pesan', 'Data Guru Berhasil Diubah!');
            redirect('pegawai');
        }
        $data = array(
            'title'     => 'Pegawai',
            'title2'    => 'Ubah Data Pegawai',
            'pegawai'     => $this->m_pegawai->detail($id_pegawai),
            'isi'       => 'admin/pegawai/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_pegawai)
    {
        // Hapus file foto yang lama
        $pegawai = $this->m_pegawai->detail($id_pegawai);
        if ($pegawai->foto_pegawai != "") {
            unlink('./foto_pegawai/' . $pegawai->foto_pegawai);
        }

        $data = array('id_pegawai' => $id_pegawai);
        $this->m_pegawai->delete($data);
        $this->session->flashdata('pesan', 'Data Guru Berhasil Dihapus!');
        redirect('pegawai');
    }
}
