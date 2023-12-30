<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $data[""] = null;

        if ($this->session->userdata("id")) {
            $administrator = $this->model->MOD_GET_ADMINISTRATOR_DATA($this->session->userdata("id"));

            if ($administrator) {
                $data["name"] = $administrator[0]->name;
                $data["username"] = $administrator[0]->username;
                $data["image"] = $administrator[0]->image;
            }
        }

        if ($this->session->userdata("id") && $this->session->userdata("user_type") == "admin") {
            $this->session->set_userdata("current_tab", "admin/dashboard");
            $this->session->set_userdata("title", " - Dashboard");

            $this->load->view('templates/admin_customer/header.php', $data);
            $this->load->view('pages/admin/dashboard_view.php');
            $this->load->view('templates/admin_customer/footer.php');
        } else {
            $this->session->set_userdata("current_tab", "home");
            $this->session->set_userdata("title", "");

            $this->load->view('templates/header.php', $data);
            $this->load->view('pages/home_view.php');
            $this->load->view('templates/footer.php');
        }
    }
}
