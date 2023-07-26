<?php

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelas');
    }

    public function index()
    {
        $data = array(
            'title'  => 'Kelas',
            'title2' => 'Data Kelas',
            'kelas'  => $this->m_kelas->lists(),
            'isi'    => 'admin/kelas/v_list'

        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './logo/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('logo')) {

                $data = array(
                    'title'     => 'Kelas',
                    'title2'    => 'Tambah Data Kelas',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/kelas/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './logo/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'kelas'           => $this->input->post('kelas'),
                    'angkatan'     => $this->input->post('angkatan'),
                    'logo'   => $upload_data['uploads']['file_name']
                );

                $this->m_kelas->add($data);
                $this->session->flashdata('pesan', 'Data Kelas Berhasil Ditambahkan!');
                redirect('kelas');
            }
        }

        $data = array(
            'title'     => 'Siswa',
            'title2'     => 'Tambah Data Siswa',
            'isi'       => 'admin/kelas/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_kelas)
    {
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './logo/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('logo')) {

                $data = array(
                    'title'     => 'Kelas',
                    'title2'    => 'Ubah Data Kelas',
                    'error'     => $this->upload->display_errors(),
                    'kelas'     => $this->m_kelas->detail($id_kelas),
                    'isi'       => 'admin/kelas/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './logo/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Hapus file foto yang lama
                $kelas = $this->m_kelas->detail($id_kelas);
                if ($kelas->logo != "") {
                    unlink('./logo/' . $kelas->logo);
                }

                $data = array(
                    'id_kelas'       => $id_kelas,
                    'kelas'           => $this->input->post('kelas'),
                    'angkatan'     => $this->input->post('angkatan'),
                    'logo'     => $upload_data['uploads']['file_name']
                );

                $this->m_kelas->edit($data);
                $this->session->flashdata('pesan', 'Data Kelas Berhasil Diubah!');
                redirect('kelas');
            }
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './logo/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_kelas'       => $id_kelas,
                'kelas'           => $this->input->post('kelas'),
                'angkatan'     => $this->input->post('angkatan')
            );

            $this->m_kelas->edit($data);
            $this->session->flashdata('pesan', 'Data Kelas Berhasil Diubah!');
            redirect('kelas');
        }
        $data = array(
            'title'     => 'Kelas',
            'title2'    => 'Ubah Data Kelas',
            'kelas'     => $this->m_kelas->detail($id_kelas),
            'isi'       => 'admin/kelas/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_kelas)
    {
        // Hapus file foto yang lama
        $kelas = $this->m_kelas->detail($id_kelas);
        if ($kelas->logo != "") {
            unlink('./logo/' . $kelas->logo);
        }

        $data = array('id_kelas' => $id_kelas);
        $this->m_kelas->delete($data);
        $this->session->flashdata('pesan', 'Data kelas Berhasil Dihapus!');
        redirect('kelas');
    }

    public function siswa($id_kelas)
    {
        $kelas = $this->m_kelas->detail($id_kelas);
        $data = array(
            'title'  => 'Siswa',
            'title2' => 'Data Siswa Kelas ' . $kelas->kelas . ' Angkatan ' . $kelas->angkatan,
            'siswa'  => $this->m_kelas->lists_siswa($id_kelas),
            'id'     => $this->uri->segment(3),
            'isi'    => 'admin/kelas/v_siswa'

        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
