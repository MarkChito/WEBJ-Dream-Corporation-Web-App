<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about_us extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "about_us");
        $this->session->set_userdata("current_page", "About Us");
        $this->session->set_userdata("title", " - About");

        $this->load->view('templates/header.php');
        $this->load->view('pages/about_view.php');
        $this->load->view('templates/footer.php');
    }
}
