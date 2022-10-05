<?php

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Script yang dijalankan pada saat controller dijalankan
        $this->load->model('M_users', 'model');
    }

    
    public function index() {
        $headerData['title'] = 'Dashboard';
        
        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = $this->session->userdata('username');

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);
        
        $data['user_count'] = $this->model->count_data();
        $data['user_count_l'] = $this->model->count_data(['jk' => 'L']);
        $data['user_count_p'] = $this->model->count_data(['jk' => 'P']);

        $this->load->view('dashboard', $data);
    }
}