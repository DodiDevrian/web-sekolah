<?php

class Events extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Event',
            'title2'    => 'Data Event',
            'event'    => $this->m_event->lists(),
            'isi'       => 'admin/event/v_list'

        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_event)
    {
        $this->form_validation->set_rules('nama_event', 'Nama event', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './foto_event/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_event')) {

                $data = array(
                    'title'     => 'event',
                    'title2'    => 'Ubah Data event',
                    'error'     => $this->upload->display_errors(),
                    'event'    => $this->m_event->detail($id_event),
                    'isi'       => 'admin/event/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './event/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Hapus file foto yang lama
                $event = $this->m_event->detail($id_event);
                if ($event->foto_event != "") {
                    unlink('./foto_event/' . $event->foto_event);
                }

                $data = array(
                    'id_event'     => $id_event,
                    'nama_event'   => $this->input->post('nama_event'),
                    'tgl_event'   => $this->input->post('tgl_event'),
                    'waktu_mulai'   => $this->input->post('waktu_mulai'),
                    'waktu_selesai'   => $this->input->post('waktu_selesai'),
                    'ket_event'   => $this->input->post('ket_event'),
                    'foto_event'        => $upload_data['uploads']['file_name']
                );

                $this->m_event->edit($data);
                $this->session->flashdata('pesan', 'Event Berhasil Diubah!');
                redirect('events');
            }
            $data = array(
                'id_event' => $id_event,
                'nama_event'  => $this->input->post('nama_event'),
                'tgl_event'   => $this->input->post('tgl_event'),
                'waktu_mulai'   => $this->input->post('waktu_mulai'),
                'waktu_selesai'   => $this->input->post('waktu_selesai'),
                'ket_event'   => $this->input->post('ket_event')
            );

            $this->m_event->edit($data);
            $this->session->flashdata('pesan', 'event Berhasil Diubah!');
            redirect('events');
        }


        $data = array(
            'title'         => 'Event',
            'title2'        => 'Ubah Data event',
            'event'    => $this->m_event->detail($id_event),
            'isi'           => 'admin/event/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
