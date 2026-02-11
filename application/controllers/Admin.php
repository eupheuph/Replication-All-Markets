<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); 
        $this->load->model('Country_model');     
        $this->load->helper('url');
        $this->load->library('form_validation');

        // Protect ALL admin routes
        if (!$this->session->userdata('logged_in') || !$this->session->userdata('is_admin')) {
            $this->session->set_flashdata('error', 'Access denied. Admin only.');
            redirect('auth/login');
        }
        $this->load->model('Admin_model');
    }

    // Dashboard 
     public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $data['title'] = 'Admin Dashboard';

        $this->load->view('templates/topbar');
        $this->load->view('templates/header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    // Slideshow Management
    public function slideshow() {
        $data['slides'] = $this->Slideshow_model->get_all();
        $data['title'] = 'Manage Slideshow';

        $this->load->view('templates/topbar');
        $this->load->view('templates/header');
        $this->load->view('admin/slideshow', $data);
        $this->load->view('templates/footer');
    }

    // Countries Management
    public function countries() {
        $data['countries'] = $this->Country_model->get_all();
        $data['title'] = 'Manage Countries';
        $this->load->view('templates/topbar');
        $this->load->view('templates/header');
        $this->load->view('admin/countries', $data);
        $this->load->view('templates/footer');
    }
}