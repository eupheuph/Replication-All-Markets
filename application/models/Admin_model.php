<?php
class Admin_model extends CI_Model {
    public function get_dashboard_stats() {
        return [
            'services' => $this->db->count_all('services'),
            'users'    => $this->db->count_all('users'),
            'orders'   => $this->db->count_all('orders'),
            'goods'    => $this->db->count_all('products')
        ];
    }
}