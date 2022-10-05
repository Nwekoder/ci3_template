<?php

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('M_users', 'model');
    }

    public function index() {
        $headerData['title'] = 'Register';

        $data['title'] = "SIM Kursus";
        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $this->load->view('register', $data);
    }

    public function register() {
        // Belum Selesai

        // $username = $this->input->post('username');
        // $password = $this->input->post('password');

        // if($username and $password) {
        //     $userdata = $this->model->find_data([
        //         'username' => $username,
        //         'password' => md5($password)
        //     ]);

        //     if($userdata->row()) {
        //         $this->session->set_userdata([
        //             'username' => $userdata->row()->username,
        //             'nama_lengkap' => $userdata->row()->nama_lengkap,
        //         ]);

        //         redirect('/');
        //     }else {
        //         $this->session->set_flashdata('error', 'Username atau Password salah!');

        //         redirect('login');
        //     }
        // }
    }
}