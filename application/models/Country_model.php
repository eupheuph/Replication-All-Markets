<?php
class Country_model extends CI_Model {
    
    private $table = 'countries';

    public function __construct() {
        parent::__construct();
        // Create table if not exists
        $this->db->query("
            CREATE TABLE IF NOT EXISTS countries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL UNIQUE,
                code VARCHAR(3) NOT NULL,          -- e.g., KEN, USA
                is_active TINYINT(1) DEFAULT 1,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }

    public function get_all() {
        $this->db->order_by('name', 'ASC');
        return $this->db->get($this->table)->result();
    }    
}