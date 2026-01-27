<?php
class User_model extends CI_Model {

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function login($email, $password) {
        $this->db->where('email', $email);
        $user = $this->db->get('users')->row();

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }
    public function get_all_users() {
    $this->db->select('id, name, email, created_at, is_admin');
    $this->db->order_by('created_at', 'DESC');
    return $this->db->get('users')->result();
}

public function is_admin($user_id = null) {
    $id = $user_id ?? $this->session->userdata('user_id');
    if (!$id) return false;
    
    $this->db->where('id', $id);
    $user = $this->db->get('users')->row();
    return $user && $user->is_admin == 1;
}

    // Check if user is logged in 
    public function is_logged_in() {
        return $this->session->userdata('logged_in') === TRUE;
    }
}