<?php
defined('BASEPATH') or exit('No direct script access allowed');

class faqs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "faqs");
        $this->session->set_userdata("current_page", "Frequently Asked Questions");
        $this->session->set_userdata("title", " - " . "Frequently Asked Questions");

        $this->load->view('templates/header.php');
        $this->load->view('templates/footer.php');
    }
}
