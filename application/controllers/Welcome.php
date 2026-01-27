<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data = [
            'cart_count'       => 0,          
            'current_language' => 'English',
            'current_country'  => 'Kenya',
            'page_title'       => 'Allmarkets - Training And Trading In Everything'
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
	//public function index()
	//{
	//	$this->load->view('welcome_message');
	//}
//}

