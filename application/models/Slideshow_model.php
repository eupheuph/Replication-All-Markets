<?php
class Slideshow_model extends CI_Model {
    
    private $table = 'slideshow';

    public function __construct() {
        parent::__construct();
        // Create table if not exists 
        $this->db->query("
            CREATE TABLE IF NOT EXISTS slideshow (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(150) NOT NULL,
                description TEXT,
                image VARCHAR(255) NOT NULL,
                link_url VARCHAR(255) DEFAULT NULL,
                is_active TINYINT(1) DEFAULT 1,
                sort_order INT DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }

    public function get_all() {
        $this->db->order_by('sort_order', 'ASC');
        return $this->db->get($this->table)->result();
    }

}