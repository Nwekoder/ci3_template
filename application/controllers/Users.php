<?php

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load model yang berinteraksi dengan table user pada database dan memberi alias model_user
        $this->load->model('M_users', 'model');
    }

    // http://localhost/nama_project/users/
    public function index() {
        $headerData['title'] = 'Users';

        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = $this->session->userdata('username');

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);

        $data['users'] = $this->model->get_all_data();

        // Script untuk menampilkan data dari database. Biasanya dalam bentuk tabel

        $this->load->view('users_list', $data);
    }

    // http://localhost/nama_project/users/add
    public function add() {
        $headerData['title'] = 'Users - Add';

        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = $this->session->userdata('username');

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);

        // Script untuk menampilkan halaman tambahkan data

        $this->load->view('users_add', $data);
    }

    public function add_data() {
        // Script yang menangkap HTTP POST dari client. Lalu memanggil sebuah method dari model_user

        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $jk = $this->input->post('jk');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');

        if ($username and $password and $email and $this->input->post('kirim')) {
            $this->model->add_data([
                'nama_lengkap' => $nama_lengkap,
                'username' => $username,
                'email' => $email,
                'password' => md5($password),
                'jk' => $jk,
                'no_hp' => $no_hp,
                'alamat' => $alamat
            ]);

            redirect('users');
        }
    }

    // http://localhost/nama_project/users/edit/{$id}
    public function edit($id) {
        $headerData['title'] = 'Users - Edit id ' . $id;

        $sidebarData['title'] = 'Admin';
        $sidebarData['username'] = $this->session->userdata('username');

        $data['header'] = $this->load->view('header', $headerData, TRUE);
        $data['footer'] = $this->load->view('footer', NULL, TRUE);

        $data['navbar'] = $this->load->view('navbar', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar', $sidebarData, TRUE);

        $data['user'] = $this->model->get_data($id)->row();

        // Script untuk mengambil sebuah data dari database dan menampilkan halaman
        // seperti tambahkan data tapi form-nya sudah diisi dengan data yang ingin diedit

        $this->load->view('users_edit', $data);
    }

    public function edit_data() {
        // Script yang menangkap HTTP POST dari client. Lalu memanggil sebuah method dari model_user

        $id_user = $this->input->post('id_user');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $jk = $this->input->post('jk');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');

        if ($this->input->post('kirim')) {
            if (!$password) {
                if ($jk == "") {
                    $this->model->edit_data($id_user, [
                        'nama_lengkap' => $nama_lengkap,
                        'username' => $username,
                        'email' => $email,
                        'no_hp' => $no_hp,
                        'alamat' => $alamat,
                    ]);
                } else {
                    $this->model->edit_data($id_user, [
                        'nama_lengkap' => $nama_lengkap,
                        'username' => $username,
                        'email' => $email,
                        'jk' => $jk,
                        'no_hp' => $no_hp,
                        'alamat' => $alamat,
                    ]);
                }
            } else {
                if ($jk == "") {
                    $this->model->edit_data($id_user, [
                        'nama_lengkap' => $nama_lengkap,
                        'username' => $username,
                        'password' => md5($password),
                        'email' => $email,
                        'no_hp' => $no_hp,
                        'alamat' => $alamat,
                    ]);
                } else {
                    $this->model->edit_data($id_user, [
                        'nama_lengkap' => $nama_lengkap,
                        'username' => $username,
                        'password' => md5($password),
                        'email' => $email,
                        'jk' => $jk,
                        'no_hp' => $no_hp,
                        'alamat' => $alamat,
                    ]);
                }
            }

            redirect('users');
        }
    }

    // http://localhost/nama_project/users/delete/{$id}
    public function delete($id) {
        // Script untuk memanggil sebuah method dari model_user
        $this->model->delete($id);
        redirect('users');
    }
}
