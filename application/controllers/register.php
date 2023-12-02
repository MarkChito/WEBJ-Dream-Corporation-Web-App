<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "register");
        $this->session->set_userdata("current_page", "Create an Account");
        $this->session->set_userdata("title", " - " . "Create an Account");

        $this->load->view('templates/header.php');
        $this->load->view('templates/footer.php');
    }
}
