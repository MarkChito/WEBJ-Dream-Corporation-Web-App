<?php
defined('BASEPATH') or exit('No direct script access allowed');

class my_orders extends CI_Controller
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

        if ($this->session->userdata("user_type") != "customer") {
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
        if (!$this->input->get("category")) {
            redirect(base_url() . "customer/my_orders?category=current");
        }

        if ($this->input->get("category") != "current" && $this->input->get("category") != "to_rate" && $this->input->get("category") != "completed") {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "Invalid my orders category!",
                "type" => "error"
            ));

            redirect(base_url() . "customer/my_orders");
        }

        $administrator = $this->model->MOD_GET_ADMINISTRATOR_DATA($this->session->userdata("id"));

        if ($administrator) {
            $data["name"] = $administrator[0]->name;
            $data["username"] = $administrator[0]->username;
            $data["image"] = $administrator[0]->image;
        }

        $this->session->set_userdata("current_tab", "customer/my_orders");
        $this->session->set_userdata("title", " - My Orders");

        $this->load->view('templates/admin_customer/header.php', $data);
        $this->load->view('pages/customer/my_orders_view.php');
        $this->load->view('templates/admin_customer/footer.php');
    }
}
