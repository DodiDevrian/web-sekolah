<?php

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_agenda');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Agenda',
            'agenda'    => $this->m_agenda->lists(),
            'isi'   => 'admin/agenda/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    // public function edit($id_agenda)
    // {
    //     $this->form_validation->set_rules('nama_agenda', 'Nama agenda', 'required');
    //     $this->form_validation->set_rules('link', 'Link', 'required');
    //     $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    //     $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
    //     $this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');

    //     if ($this->form_validation->run() == TRUE) {
    //         $config['upload_path']      = './foto_agenda/';
    //         $config['allowed_types']    = 'gif|jpg|png|jpeg';
    //         $config['max_size']         = 2000;
    //         $this->upload->initialize($config);

    //         if (!$this->upload->do_upload('foto_agenda')) {

    //             $data = array(
    //                 'title'     => 'agenda',
    //                 'title2'    => 'Ubah Data agenda',
    //                 'error'     => $this->upload->display_errors(),
    //                 'agenda'     => $this->m_agenda->detail($id_agenda),
    //                 'isi'       => 'admin/agenda/v_edit'
    //             );
    //             $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    //         } else {
    //             $upload_data = array('uploads' => $this->upload->data());
    //             $config['image_library'] = 'gd2';
    //             $config['source_image'] = './foto_agenda/' . $upload_data['uploads']['file_name'];
    //             $this->load->library('image_lib', $config);

    //             // Hapus file foto yang lama
    //             $agenda = $this->m_agenda->detail($id_agenda);
    //             if ($agenda->foto_agenda != "") {
    //                 unlink('./foto_agenda/' . $agenda->foto_agenda);
    //             }

    //             $data = array(
    //                 'id_agenda'     => $id_agenda,
    //                 'nama_agenda'   => $this->input->post('nama_agenda'),
    //                 'link'          => $this->input->post('link'),
    //                 'keterangan'    => $this->input->post('keterangan'),
    //                 'tgl_mulai'     => $this->input->post('tgl_mulai'),
    //                 'tgl_akhir'     => $this->input->post('tgl_akhir'),
    //                 'foto_agenda'   => $upload_data['uploads']['file_name']
    //             );

    //             $this->m_agenda->edit($data);
    //             $this->session->flashdata('pesan', 'Data agenda Berhasil Diubah!');
    //             redirect('agenda');
    //         }
    //         $upload_data = array('uploads' => $this->upload->data());
    //         $config['image_library'] = 'gd2';
    //         $config['source_image'] = './foto_agenda/' . $upload_data['uploads']['file_name'];
    //         $this->load->library('image_lib', $config);

    //         $data = array(
    //             'id_agenda'     => $id_agenda,
    //             'nama_agenda'   => $this->input->post('nama_agenda'),
    //             'link'          => $this->input->post('link'),
    //             'keterangan'    => $this->input->post('keterangan'),
    //             'tgl_mulai'     => $this->input->post('tgl_mulai'),
    //             'tgl_akhir'     => $this->input->post('tgl_akhir'),
    //         );

    //         $this->m_agenda->edit($data);
    //         $this->session->flashdata('pesan', 'Data agenda Berhasil Diubah!');
    //         redirect('agenda');
    //     }
    //     $data = array(
    //         'title'     => 'agenda',
    //         'title2'    => 'Ubah Data agenda',
    //         'agenda'     => $this->m_agenda->detail($id_agenda),
    //         'isi'       => 'admin/agenda/v_edit'
    //     );
    //     $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    // }

    public function edit($id_agenda)
    {
        $this->form_validation->set_rules('nama_agenda', 'Nama agenda', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');
        $this->form_validation->set_rules('foto_agenda', 'Foto', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'         => 'Agenda',
                'title2'        => 'Edit DAta Agenda',
                'agenda'    => $this->m_agenda->detail($id_agenda),
                'isi'           => 'admin/agenda/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {


            $data = array(
                'id_agenda'     => $id_agenda,
                'nama_agenda'   => $this->input->post('nama_agenda'),
                'link'          => $this->input->post('link'),
                'keterangan'    => $this->input->post('keterangan'),
                'tgl_mulai'     => $this->input->post('tgl_mulai'),
                'tgl_akhir'     => $this->input->post('tgl_akhir'),
                'foto_agenda'   => $this->input->post('foto_agenda')
            );

            $this->m_agenda->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
            redirect('agenda');
        }
    }
}
