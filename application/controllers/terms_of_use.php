<?php
defined('BASEPATH') or exit('No direct script access allowed');

class terms_of_use extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "terms_of_use");
        $this->session->set_userdata("current_page", "Terms of Use");
        $this->session->set_userdata("title", " - " . "Terms of Use");

        $this->load->view('templates/header.php');
        $this->load->view('templates/footer.php');
    }
}
