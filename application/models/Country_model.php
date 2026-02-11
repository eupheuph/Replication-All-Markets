<?php
class Country_model extends CI_Model {
    
    private $table = 'countries';

    public function __construct() {
        parent::__construct();
        $this->db->query();// countries db
    }

    public function get_all() {
        $this->db->order_by('name', 'ASC');
        return $this->db->get($this->table)->result();
    }    
}