<?php
defined('BASEPATH') or exit('No direct script access allowed');

class manage_categories extends CI_Controller
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
    }

    public function index()
    {
        $administrator = $this->model->MOD_GET_ADMINISTRATOR_DATA($this->session->userdata("id"));

        if ($administrator) {
            $data["name"] = $administrator[0]->name;
            $data["username"] = $administrator[0]->username;
            $data["image"] = $administrator[0]->image;
        }

        $this->session->set_userdata("current_tab", "admin/manage_categories");
        $this->session->set_userdata("title", " - Manage Categories");

        $this->load->view('templates/admin_customer/header.php', $data);
        $this->load->view('pages/admin/manage_categories_view.php');
        $this->load->view('templates/admin_customer/footer.php');
    }
}
