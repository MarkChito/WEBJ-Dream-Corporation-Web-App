<?php
defined('BASEPATH') or exit('No direct script access allowed');

class search_results extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');

        if (!$this->session->userdata("search_query")) {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "Please input an item first!",
                "type" => "error"
            ));

            redirect(base_url());
        }
    }

    public function index()
    {
        $this->session->set_userdata("current_tab", "search_results");
        $this->session->set_userdata("current_page", "Search Results");
        $this->session->set_userdata("title", " - " . "Search Results");

        $this->load->view('templates/header.php');
        $this->load->view('pages/search_results_view.php');
        $this->load->view('templates/footer.php');
    }
}
