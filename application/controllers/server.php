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
                $db_user_type = $useraccount_details->user_type;
            }

            if (password_verify($password, $db_password)) {
                $this->session->set_userdata("id", $db_id);
                $this->session->set_userdata("user_type", $db_user_type);

                $this->session->set_userdata("login_message", "Welcome, " . $db_name . "!");

                echo json_encode($db_user_type);
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
        $currentDate = date("Y-m-d");

        $first_name = $this->input->post("first_name");
        $middle_name = $this->input->post("middle_name");
        $last_name = $this->input->post("last_name");
        $mobile_number = $this->input->post("mobile_number");
        $email = $this->input->post("email");
        $house_number = $this->input->post("house_number");
        $subdivision_zone_purok = $this->input->post("subdivision_zone_purok");
        $city = $this->input->post("city");
        $province = $this->input->post("province");
        $country = $this->input->post("country");
        $zip_code = $this->input->post("zip_code");
        $image = isset($_FILES["image"]) ? $_FILES["image"] : null;

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if (!empty($middle_name)) {
            $middle_initial = substr($middle_name, 0, 1) . ".";
            $name = $first_name . " " . $middle_initial . " " . $last_name;
        } else {
            $name = $first_name . " " . $last_name;
        }

        $username_exists = $this->model->MOD_CHECK_USERNAME($username);

        if ($username_exists) {
            echo json_encode(false);
        } else {
            $errors = 0;

            if ($image) {
                $uniqueImageName = $this->generate_unique_image_name($image);
                if (!$this->upload_image($image, $uniqueImageName)) {
                    $errors++;
                }
                $image = $uniqueImageName;
            }

            if ($errors == 0) {
                if ($image) {
                    $image = basename($image);
                } else {
                    $image = "default_user_image.png";
                }

                $this->model->MOD_ADD_USER_ACCOUNT($name, $username, password_hash($password, PASSWORD_BCRYPT), $image);

                $useraccount = $this->model->MOD_CHECK_USERNAME($username);
                $useraccount_id = $useraccount[0]->id;

                $this->model->MOD_ADD_CUSTOMER($useraccount_id, $currentDate, $first_name, $middle_name, $last_name, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code);

                $this->session->set_userdata("alert", array(
                    "title" => "Success",
                    "message" => "Account is successfully registered!",
                    "type" => "success"
                ));
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "There is an error while processing your request!",
                    "type" => "error"
                ));
            }

            echo json_encode(true);
        }
    }

    public function new_supplier()
    {
        $name = $this->input->post("name");
        $contact_person = $this->input->post("contact_person");
        $email = $this->input->post("email");
        $mobile_number = $this->input->post("mobile_number");
        $house_number = $this->input->post("house_number");
        $subdivision_zone_purok = $this->input->post("subdivision_zone_purok");
        $city = $this->input->post("city");
        $province = $this->input->post("province");
        $country = $this->input->post("country");
        $zip_code = $this->input->post("zip_code");

        $this->model->MOD_NEW_SUPPLIER($name, $contact_person, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A supplier is successfully added.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function new_product()
    {
        $name = $this->input->post("name");
        $category_id = $this->input->post("category_id");
        $supplier_id = $this->input->post("supplier_id");
        $price = $this->input->post("price");
        $cost_price = $this->input->post("cost_price");
        $quantity = $this->input->post("quantity");
        $description = $this->input->post("description");
        $image = isset($_FILES["image"]) ? $_FILES["image"] : null;

        $errors = 0;

        if ($image) {
            $uniqueImageName = $this->generate_unique_image_name($image);
            if (!$this->upload_image($image, $uniqueImageName)) {
                $errors++;
            }

            $image = $uniqueImageName;
        } else {
            $image = "default_item_image.png";
        }

        $this->model->MOD_NEW_PRODUCT($name, $category_id, $supplier_id, $price, $cost_price, $quantity, $description, $image);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A product is successfully added.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function update_product()
    {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $category_id = $this->input->post("category_id");
        $supplier_id = $this->input->post("supplier_id");
        $price = $this->input->post("price");
        $cost_price = $this->input->post("cost_price");
        $quantity = $this->input->post("quantity");
        $description = $this->input->post("description");
        $old_image = $this->input->post("old_image");
        $image = isset($_FILES["image"]) ? $_FILES["image"] : null;

        $errors = 0;

        if ($image) {
            $uniqueImageName = $this->generate_unique_image_name($image);
            if (!$this->upload_image($image, $uniqueImageName)) {
                $errors++;
            }

            $image = $uniqueImageName;
        } else {
            $image = $old_image;
        }

        $this->model->MOD_UPDATE_PRODUCT($name, $description, $price, $cost_price, $quantity, $category_id, $supplier_id, $image, $id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A product is successfully updated.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function update_supplier()
    {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $contact_person = $this->input->post("contact_person");
        $email = $this->input->post("email");
        $mobile_number = $this->input->post("mobile_number");
        $house_number = $this->input->post("house_number");
        $subdivision_zone_purok = $this->input->post("subdivision_zone_purok");
        $city = $this->input->post("city");
        $province = $this->input->post("province");
        $country = $this->input->post("country");
        $zip_code = $this->input->post("zip_code");

        $this->model->MOD_UPDATE_SUPPLIER($name, $contact_person, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code, $id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A supplier is successfully updated.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function delete_supplier()
    {
        $id = $this->input->post("id");

        $this->model->MOD_DELETE_SUPPLIER($id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A supplier is successfully deleted.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function delete_product()
    {
        $id = $this->input->post("id");

        $this->model->MOD_DELETE_PRODUCT($id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "A product is successfully deleted.",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function get_user_data()
    {
        $id = $this->input->post("id");

        $user_data = $this->model->MOD_GET_ADMINISTRATOR_DATA($id);

        echo json_encode($user_data);
    }

    public function update_account()
    {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $username = $this->input->post("username");
        $old_username = $this->input->post("old_username");
        $password = $this->input->post("password");
        $old_password = $this->input->post("old_password");
        $old_image = $this->input->post("old_image");
        $image = isset($_FILES["image"]) ? $_FILES["image"] : null;

        $username_exists = $this->model->MOD_CHECK_USERNAME($username);

        if ($username_exists && ($username != $old_username)) {
            echo json_encode(false);
        } else {
            $errors = 0;

            if ($password) {
                $password = password_hash($password, PASSWORD_BCRYPT);
            } else {
                $password = $old_password;
            }

            if ($image) {
                $uniqueImageName = $this->generate_unique_image_name($image);
                if (!$this->upload_image($image, $uniqueImageName)) {
                    $errors++;
                }

                $image = $uniqueImageName;
            } else {
                $image = $old_image;
            }

            if ($errors == 0) {
                $this->model->MOD_UPDATE_ACCOUNT($name, $username, $password, $image, $id);

                $this->session->set_userdata("alert", array(
                    "title" => "Success",
                    "message" => "Your account has been updated!",
                    "type" => "success"
                ));
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "There is an error while processing your request.",
                    "type" => "error"
                ));
            }

            echo json_encode(true);
        }
    }

    public function check_category_items()
    {
        $id = $this->input->post("id");

        $category = $this->model->MOD_GET_PRODUCTS($id);

        if ($category) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    public function check_supplier_items()
    {
        $id = $this->input->post("id");

        $category = $this->model->MOD_GET_ALL_PRODUCTS_BY_SUPPLIER($id);

        if ($category) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    public function get_userdata()
    {
        $id = $this->input->post("id");

        $useraccount = $this->model->MOD_GET_ADMINISTRATOR_DATA($id);

        echo json_encode($useraccount);
    }

    public function get_customer_data()
    {
        $id = $this->input->post("id");

        $customer_data = $this->model->MOD_GET_CUSTOMER_BY_ID($id);

        echo json_encode($customer_data);
    }

    public function update_customer()
    {
        $useraccount_id = $this->input->post("useraccount_id");
        $first_name = $this->input->post("first_name");
        $middle_name = $this->input->post("middle_name");
        $last_name = $this->input->post("last_name");
        $mobile_number = $this->input->post("mobile_number");
        $email = $this->input->post("email");
        $house_number = $this->input->post("house_number");
        $subdivision_zone_purok = $this->input->post("subdivision_zone_purok");
        $city = $this->input->post("city");
        $province = $this->input->post("province");
        $country = $this->input->post("country");
        $zip_code = $this->input->post("zip_code");

        if (!empty($middle_name)) {
            $middle_initial = substr($middle_name, 0, 1) . ".";
            $name = $first_name . " " . $middle_initial . " " . $last_name;
        } else {
            $name = $first_name . " " . $last_name;
        }

        $this->model->MOD_UPDATE_CUSTOMER($first_name, $middle_name, $last_name, $mobile_number, $email, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code, $useraccount_id);

        $this->model->MOD_UPDATE_USERACCOUNT_NAME($name, $useraccount_id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Your profile has been updated!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function search_product()
    {
        $search_query = $this->input->post("search_query");

        $this->session->set_userdata("search_query", $search_query);

        echo json_encode(true);
    }

    public function get_cart_count()
    {
        $id = $this->input->post("id");

        $cart = $this->model->MOD_GET_ORDERS("Cart", $id);

        if ($cart) {
            echo json_encode(count($cart));
        } else {
            echo json_encode(false);
        }
    }

    public function add_to_cart()
    {
        $transaction_date = date("Y-m-d H:i");
        $customer_id = $this->input->post("customer_id");
        $item_id = $this->input->post("product_id");
        $quantity = "1";
        $status = "Cart";

        $product = $this->model->MOD_GET_PRODUCT($item_id);

        $total_amount = $product[0]->price;

        $order_exists = $this->model->MOD_CHECK_ORDER($customer_id, $item_id, $status);

        if ($order_exists) {
            $quantity = floatval($quantity) + floatval($order_exists[0]->quantity);
            $total_amount = floatval($total_amount) + floatval($order_exists[0]->total_amount);

            $this->model->MOD_UPDATE_CART($transaction_date, $quantity, $total_amount, $customer_id, $item_id, $status);
        } else {
            $this->model->MOD_ADD_TO_CART($transaction_date, $customer_id, $item_id, $quantity, $total_amount, $status);
        }

        echo json_encode(true);
    }

    public function get_order_details()
    {
        $id = $this->input->post("id");

        $order_details = $this->model->MOD_GET_ORDER_DETAILS($id);

        echo json_encode($order_details);
    }

    public function get_item_info()
    {
        $id = $this->input->post("id");

        $item_info = $this->model->MOD_GET_PRODUCT($id);

        echo json_encode($item_info);
    }

    public function update_order()
    {
        $id = $this->input->post("id");
        $quantity = $this->input->post("quantity");
        $total_amount = $this->input->post("total_amount");

        $this->model->MOD_UPDATE_ORDER($quantity, $total_amount, $id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Your order has been updated!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function delete_order()
    {
        $id = $this->input->post("id");

        $this->model->MOD_DELETE_ORDER($id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Your order has been deleted!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function get_order_ids()
    {
        $order_ids = $this->input->post("order_ids");

        $orders = $this->model->MOD_GET_ORDERS_FROM_IDS($order_ids);

        echo json_encode($orders);
    }

    public function place_order()
    {
        $transaction_date = date("Y-m-d H:i");
        $order_ids = $this->input->post("order_ids");

        $this->model->MOD_UPDATE_ORDER_STATUS($transaction_date, $order_ids);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Your order/s has been placed!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function approve_reject_order()
    {
        $transaction_date = date("Y-m-d H:i");
        $tracking_id = "";
        $order_ids = $this->input->post("order_ids");
        $status = $this->input->post("status");
        
        $notification_status = $status;

        if ($status == "Approved") {
            $tracking_id = date("YmdHis");
            $status = "To Receive";
        }

        $this->model->MOD_UPDATE_ORDER_STATUS_AND_TRACKING_ID($transaction_date, $tracking_id, $status, $order_ids);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Order/s has been " . $notification_status . "!",
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

    private function generate_unique_image_name($image)
    {
        $targetDirectory = "dist/images/uploads/";
        $originalFileName = basename($image["name"]);
        $targetFile = $targetDirectory . $originalFileName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file already exists, if so, rename it
        $counter = 1;
        while (file_exists($targetFile)) {
            $fileNameWithoutExt = pathinfo($originalFileName, PATHINFO_FILENAME);
            $targetFile = $targetDirectory . $fileNameWithoutExt . '_' . $counter . '.' . $imageFileType;
            $counter++;
        }

        return basename($targetFile);
    }

    private function upload_image($image, $uniqueImageName)
    {
        $targetDirectory = "dist/images/uploads/";
        $targetFile = $targetDirectory . $uniqueImageName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($image["tmp_name"]);

        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        $allowedExtensions = array("jpg", "jpeg", "png");

        if (!in_array($imageFileType, $allowedExtensions)) {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            return false;
        } else {
            if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
