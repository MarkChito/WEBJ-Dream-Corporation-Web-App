<?php
defined('BASEPATH') or exit('No direct script access allowed');

class print_receipt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');

        if (!$this->session->userdata("id")) {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "You must login first!",
                "type" => "error"
            ));

            redirect(base_url());
        }

        if ($this->session->userdata("user_type") != "admin" || !$this->session->userdata("tracking_id")) {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "You do not have an access to this page!",
                "type" => "error"
            ));

            redirect(base_url());
        }
    }

    public function index()
    {
        $this->load->view('pages/admin/print_receipt_view.php');
    }
}
