<?php
defined('BASEPATH') or exit('No direct script access allowed');

class server extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $username_exists = $this->model->MOD_CHECK_USERNAME($username);

        if ($username_exists) {
            foreach ($username_exists as $useraccount_details) {
                $db_id = $useraccount_details->id;
                $db_name = $useraccount_details->name;
                $db_password = $useraccount_details->password;
            }

            if (password_verify($password, $db_password)) {
                $this->session->set_userdata("id", $db_id);

                $this->session->set_userdata("login_message", "Welcome, " . $db_name . "!");

                echo json_encode(true);
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "Invalid Username or Password",
                    "type" => "error"
                ));

                echo json_encode(false);
            }
        } else {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "Invalid Username or Password",
                "type" => "error"
            ));

            echo json_encode(false);
        }
    }

    public function new_category()
    {
        $name = $this->input->post("name");
        $description = $this->input->post("description");

        $this->model->MOD_NEW_CATEGORY($name, $description);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A category is successfully added.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function update_category()
    {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $description = $this->input->post("description");

        $this->model->MOD_UPDATE_CATEGORY($name, $description, $id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A category is successfully updated.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function delete_category()
    {
        $id = $this->input->post("id");

        $this->model->MOD_DELETE_CATEGORY($id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A category is successfully deleted.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function add_newsletter_email()
    {
        $email = $this->input->post("email");

        $email_exists = $this->model->MOD_GET_NEWSLETTER_EMAIL($email);

        if ($email_exists) {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "Email is already on the list!",
                "type" => "error"
            ));
        } else {
            $this->model->MOD_ADD_NEWSLETTER_EMAIL($email);

            $this->session->set_userdata("alert", array(
                "title" => "Success",
                "message" => "Successfully subscribed to our weekly newsletter.",
                "type" => "success"
            ));
        }

        echo json_encode(true);
    }

    public function add_contact_message()
    {
        $name = $this->input->post("name");
        $mobile_number = $this->input->post("mobile_number");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        $this->model->MOD_ADD_CONTACT_MESSAGE($name, $mobile_number, $email, $subject, $message);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Your message was sent!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function register()
    {
        $first_name = $this->input->post("first_name");
        $middle_name = $this->input->post("middle_name");
        $last_name = $this->input->post("last_name");
        $mobile_number = $this->input->post("mobile_number");
        $email = $this->input->post("email");
        $house_number = $this->input->post("house_number");
        $subdivision_zone_purok = $this->input->post("subdivision_zone_purok");
        $province = $this->input->post("province");
        $country = $this->input->post("country");
        $zip_code = $this->input->post("zip_code");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $image = $this->input->post("image") ? $this->input->post("image") : "default_user_image.png";

        if (!empty($middle_name)) {
            $middle_initial = substr($middle_name, 0, 1) . ".";
            $name = $first_name . " " . $middle_initial . " " . $last_name;
        } else {
            $name = $first_name . " " . $last_name;
        }

        $this->model->MOD_ADD_USER_ACCOUNT($name, $username, password_hash($password, PASSWORD_BCRYPT), $image);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Account is successfully registered!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function logout()
    {
        $this->session->unset_userdata("id");

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "You've been successfully signed out!",
            "type" => "success"
        ));

        echo json_encode(true);
    }
}
