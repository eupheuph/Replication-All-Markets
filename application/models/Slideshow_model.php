<?php
class Slideshow_model extends CI_Model {
    
    private $table = 'slideshow';

    public function __construct() {
        parent::__construct(); 
        $this->db->query();//skideshow db
    }

    public function get_all() {
        $this->db->order_by('sort_order', 'ASC');
        return $this->db->get($this->table)->result();
    }

}