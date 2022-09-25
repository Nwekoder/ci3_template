<?php

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load model yang berinteraksi dengan table user pada database dan memberi alias model_user
        $this->load->model('M_users', 'model_user');
    }

    // http://localhost/nama_project/users/
    public function index() {
        $headerData['title'] = 'Users';
        
        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = 'admin';

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);

        // Script untuk menampilkan data dari database. Biasanya dalam bentuk tabel
        
        $this->load->view('users_list', $data);
    }

    // http://localhost/nama_project/users/add
    public function add() {
        $headerData['title'] = 'Users - Add';
        
        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = 'admin';

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);

        // Script untuk menampilkan halaman tambahkan data
        
        $this->load->view('users_add', $data);
    }

    public function add_data() {
        // Script yang menangkap HTTP POST dari client. Lalu memanggil sebuah method dari model_user
    }

    // http://localhost/nama_project/users/edit/{$id}
    public function edit($id) {
        $headerData['title'] = 'Users - Edit id ' . $id;
        
        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = 'admin';

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);

        // Script untuk mengambil sebuah data dari database dan menampilkan halaman
        // seperti tambahkan data tapi form-nya sudah diisi dengan data yang ingin diedit
        
        $this->load->view('users_edit', $data);
    }

    public function edit_data() {
        // Script yang menangkap HTTP POST dari client. Lalu memanggil sebuah method dari model_user
    }

    // http://localhost/nama_project/users/delete/{$id}
    public function delete($id) {
        // Script untuk memanggil sebuah method dari model_user
    }
}