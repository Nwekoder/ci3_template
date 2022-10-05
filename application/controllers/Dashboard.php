<?php

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Script yang dijalankan pada saat controller dijalankan
    }

    
    public function index() {
        $headerData['title'] = 'Dashboard';
        
        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = $this->session->userdata('username');

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);
        
        $this->load->view('dashboard', $data);
    }
}