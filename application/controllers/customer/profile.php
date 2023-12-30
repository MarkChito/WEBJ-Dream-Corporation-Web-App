<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
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
        $administrator = $this->model->MOD_GET_ADMINISTRATOR_DATA($this->session->userdata("id"));

        if ($administrator) {
            $data["id"] = $administrator[0]->id;
            $data["name"] = $administrator[0]->name;
            $data["username"] = $administrator[0]->username;
            $data["image"] = $administrator[0]->image;
            $data["user_type"] = $administrator[0]->user_type;
        }

        $customer = $this->model->MOD_GET_CUSTOMER_BY_ID($this->session->userdata("id"));

        if ($customer) {
            $data["useraccount_id"] = $customer[0]->useraccount_id;
            $data["date_registered"] = $customer[0]->date_registered;
            $data["first_name"] = $customer[0]->first_name;
            $data["middle_name"] = $customer[0]->middle_name;
            $data["last_name"] = $customer[0]->last_name;
            $data["mobile_number"] = $customer[0]->mobile_number;
            $data["email"] = $customer[0]->email;
            $data["house_number"] = $customer[0]->house_number;
            $data["subdivision_zone_purok"] = $customer[0]->subdivision_zone_purok;
            $data["city"] = $customer[0]->city;
            $data["province"] = $customer[0]->province;
            $data["country"] = $customer[0]->country;
            $data["zip_code"] = $customer[0]->zip_code;
        }

        $this->session->set_userdata("current_tab", "customer/profile");
        $this->session->set_userdata("title", " - Profile");

        $this->load->view('templates/admin_customer/header.php', $data);
        $this->load->view('pages/customer/profile_view.php');
        $this->load->view('templates/admin_customer/footer.php');
    }
}
