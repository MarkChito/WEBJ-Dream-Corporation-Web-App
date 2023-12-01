<?php
defined('BASEPATH') or exit('No direct script access allowed');

class products extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $data[""] = null;
        
        if (!$this->input->get("category")) {
            $this->session->set_userdata("current_tab", "products");
            $this->session->set_userdata("current_page", "All Products");
            $this->session->set_userdata("title", " - All Products");
        } else {
            $categories = $this->model->MOD_GET_PRODUCT_CATEGORY($this->input->get("category"));

            if ($categories) {
                $data["category_id"] = $categories[0]->id;
                $data["category_name"] = $categories[0]->name;
            }

            $this->session->set_userdata("current_tab", strtolower(str_replace(" ", "_", $data["category_name"])));
            $this->session->set_userdata("current_page", $data["category_name"]);
            $this->session->set_userdata("title", " - " . $data["category_name"]);
        }

        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/products_view.php');
        $this->load->view('templates/footer.php');
    }
}
