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
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $jk = $this->input->post('jk');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');

        if($this->input->post('kirim')) {
            if($username and $email) {
                $userdata = $this->model->find_data([
                    'username' => $username,
                    'email' => $password
                ]);
    
                if($userdata->row()) {
                    $this->session->set_flashdata('error', 'Username atau Email sudah terdaftar!');
    
                    redirect('register');
                }else {
                   $this->model->add_data([
                    'username' => $username,
                    'password' => md5($password),
                    'nama_lengkap' => $nama_lengkap,
                    'jk' => $jk,
                    'email' => $email,
                    'no_hp' => $no_hp,
                    'alamat' => $alamat,
                   ]); 

                   redirect('login');
                }
            }
        }
    }
}