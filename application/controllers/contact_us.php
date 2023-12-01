<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact_us extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "contact_us");
        $this->session->set_userdata("current_page", "Contact Us");
        $this->session->set_userdata("title", " - " . "Contact Us");

        $this->load->view('templates/header.php');
        $this->load->view('pages/contact_us_view.php');
        $this->load->view('templates/footer.php');
    }
}
