<?php

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_login');
    }
    public function login($username, $password)
    {
        $cek = $this->ci->m_login->login($username, $password);

        if ($cek) {
            $id_user   = $cek->id_user;
            $username   = $cek->username;
            $nama_user  = $cek->nama_user;
            $role       = $cek->role;

            $this->ci->session->set_userdata('id_user', $id_user);
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nama_user', $nama_user);
            $this->ci->session->set_userdata('role', $role);
            redirect('admin');
        } else {
            $this->ci->session->set_flashdata('pesan', 'Username atau Password Salah!!!');
            redirect('login');
        }
    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda belum login!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('id_user');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama_user');
        $this->ci->session->unset_userdata('role');
        $this->ci->session->set_flashdata('pesan', 'Logout Berhasil');
        redirect('login');
    }
}
