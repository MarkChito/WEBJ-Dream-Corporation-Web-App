<?php
defined('BASEPATH') or exit('No direct script access allowed');

class privacy_policy extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "privacy_policy");
        $this->session->set_userdata("current_page", "Privacy Policy");
        $this->session->set_userdata("title", " - " . "Privacy Policy");

        $this->load->view('templates/header.php');
        $this->load->view('templates/footer.php');
    }
}
