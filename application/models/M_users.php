<?php

class M_users extends CI_Model {
    public function get_all_data() {
        // Script yang menjalankan query untuk mengambil semua data yang ada pada tabel users di database
        return $this->db->get('users');
    }

    public function get_data($id) {
        // Script yang menjalankan query untuk mengambil sebuah data berdasarkan id
        // yang ada pada tabel users di database
        return $this->db->get_where('users', ['id' => $id]);
    }

    public function add_data($data) {
        // Script yang menjalankan query untuk menambahkan sebuah data pada tabel users di database
        $this->db->insert('users', $data);
    }

    public function edit_data($id, $data) {
        // Script yang menjalankan query untuk mengupdate sebuah data berdasarkan id
        // yang ada pada tabel users di database
        $this->db->update('users', $data, ['id' => $id]);
    }

    public function delete($id) {
        // Script yang menjalankan query untuk menghapus sebuah data berdasarkan id
        // yang ada pada tabel users di database
        $this->db->delete('users', ['id' => $id]);
    }
}