<?php

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Setting',
            'title2'     => 'Data Setting',
            'setting'        => $this->m_setting->lists(),
            'isi'       => 'admin/setting/v_list'

        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_setting)
    {
        $this->form_validation->set_rules('nip_kepsek', 'NIP Kepala Sekolah', 'required');
        $this->form_validation->set_rules('nama_kepsek', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('alamat', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('no_tel', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required');
        $this->form_validation->set_rules('visi_misi', 'Visi_misi', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_kepsek/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_kepsek')) {

                $data = array(
                    'title'     => 'Setting',
                    'title2'    => 'Ubah Data Setting',
                    'error'     => $this->upload->display_errors(),
                    'setting'     => $this->m_setting->detail($id_setting),
                    'isi'       => 'admin/setting/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_kepsek/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Hapus file foto yang lama
                $setting = $this->m_setting->detail($id_setting);
                if ($setting->foto_kepsek != "") {
                    unlink('./foto_kepsek/' . $setting->foto_kepsek);
                }

                $data = array(
                    'id_setting'       => $id_setting,
                    'nip_kepsek'           => $this->input->post('nip_kepsek'),
                    'nama_kepsek'     => $this->input->post('nama_kepsek'),
                    'alamat'  => $this->input->post('alamat'),
                    'no_tel'     => $this->input->post('no_tel'),
                    'email'      => $this->input->post('email'),
                    'sejarah'    => $this->input->post('sejarah'),
                    'sejarah'    => $this->input->post('sejarah'),
                    'visi_misi'    => $this->input->post('visi_misi'),
                    'foto_kepsek'     => $upload_data['uploads']['file_name']
                );

                $this->m_setting->edit($data);
                $this->session->flashdata('pesan', 'Data setting Berhasil Diubah!');
                redirect('setting');
            }
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_kepsek/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_setting'      => $id_setting,
                'nip_kepsek'           => $this->input->post('nip_kepsek'),
                'nama_kepsek'    => $this->input->post('nama_kepsek'),
                'alamat'  => $this->input->post('alamat'),
                'no_tel'     => $this->input->post('no_tel'),
                'email'         => $this->input->post('email'),
                'sejarah'      => $this->input->post('sejarah'),
                'sejarah'      => $this->input->post('sejarah'),
                'visi_misi'      => $this->input->post('visi_misi'),
            );

            $this->m_setting->edit($data);
            $this->session->flashdata('pesan', 'Data setting Berhasil Diubah!');
            redirect('setting');
        }
        $data = array(
            'title'     => 'setting',
            'title2'    => 'Ubah Data setting',
            'setting'     => $this->m_setting->detail($id_setting),
            'isi'       => 'admin/setting/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
