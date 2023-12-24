<?php
defined('BASEPATH') or exit('No direct script access allowed');

class product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        $item_id = $this->input->get("item_id");
        $categor_id = $this->input->get("category");

        $product =  $this->model->MOD_GET_PRODUCT($item_id);
        $category =  $this->model->MOD_GET_PRODUCT_CATEGORY($categor_id);

        if ($product) {
            $data["product_id"] = $product[0]->id;
            $data["product_name"] = $product[0]->name;
            $data["product_price"] = $product[0]->price;
            $data["product_description"] = $product[0]->description;
            $data["product_category_id"] = $product[0]->category_id;
            $data["product_image"] = $product[0]->image;
        }

        $data["category_name"] = $category[0]->name;

        $this->session->set_userdata("current_tab", "product");
        $this->session->set_userdata("current_page", $data["product_name"]);
        $this->session->set_userdata("title", " - " . $data["product_name"]);

        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/product_view.php');
        $this->load->view('templates/footer.php');
    }
}
