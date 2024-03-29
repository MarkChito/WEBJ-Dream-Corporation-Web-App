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
        $message_date = date("Y-m-d H:i");
        $name = $this->input->post("name");
        $mobile_number = $this->input->post("mobile_number");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        $this->model->MOD_ADD_CONTACT_MESSAGE($message_date, $name, $mobile_number, $email, $subject, $message);

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
                $db_name = $useraccount[0]->name;

                $this->model->MOD_ADD_CUSTOMER($useraccount_id, $currentDate, $first_name, $middle_name, $last_name, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code);

                $this->session->set_userdata("id", $useraccount_id);
                $this->session->set_userdata("user_type", "customer");

                $this->session->set_userdata("login_message", "Welcome, " . $db_name . "!");

                echo json_encode("OK");
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "There is an error while processing your request!",
                    "type" => "error"
                ));

                echo json_encode("error");
            }
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

    public function update_order_quantity()
    {
        $order_id = $this->input->post("order_id");
        $quantity = $this->input->post("quantity");
        $total_amount = $this->input->post("total_amount");

        $this->model->MOD_UPDATE_ORDER_QUANTITY($quantity, $total_amount, $order_id);

        echo json_encode(true);
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
        $quantity = $this->input->post("quantity");
        $total_amount = $this->input->post("total_amount");
        $status = "Cart";

        $order_exists = $this->model->MOD_CHECK_ORDER($customer_id, $item_id, $status);

        if ($order_exists) {
            $this->model->MOD_UPDATE_CART($transaction_date, $quantity, $total_amount, $customer_id, $item_id, $status);

            $this->session->set_userdata("alert", array(
                "title" => "Success",
                "message" => "Order quantity has been updated!",
                "type" => "success"
            ));
        } else {
            $this->model->MOD_ADD_TO_CART($transaction_date, $customer_id, $item_id, $quantity, $total_amount, $status);

            $this->session->set_userdata("alert", array(
                "title" => "Success",
                "message" => "An item has been added to your cart!",
                "type" => "success"
            ));
        }

        echo json_encode(true);
    }

    public function get_order_details()
    {
        $id = $this->input->post("id");

        $order_details = $this->model->MOD_GET_ORDER_DETAILS($id);

        echo json_encode($order_details);
    }

    public function get_cart_details()
    {
        $customer_id = $this->input->post("customer_id");
        $item_id = $this->input->post("item_id");
        $status = "Cart";

        $cart_details = $this->model->MOD_GET_CART_DETAILS($customer_id, $item_id, $status);

        if ($cart_details) {
            echo json_encode($cart_details);
        } else {
            echo json_encode(false);
        }
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
            $description = "Order has been approved.";

            $this->model->MOD_ADD_TRACKING_DATA($transaction_date, $tracking_id, "Order Confirmed", $description);
        }

        $this->model->MOD_UPDATE_ORDER_STATUS_AND_TRACKING_ID($transaction_date, $tracking_id, $status, $order_ids);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Order/s has been " . $notification_status . "!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function get_delivery_orders()
    {
        $tracking_id = $this->input->post("tracking_id");

        $delivery_orders = $this->model->MOD_GET_DELIVERY_ORDERS($tracking_id);

        echo json_encode($delivery_orders);
    }

    public function update_delivery_status()
    {
        $transaction_date = date("Y-m-d H:i");
        $status = $this->input->post("status");
        $description = $this->input->post("description");
        $tracking_id = $this->input->post("tracking_id");

        $this->model->MOD_UPDATE_DELIVERY_STATUS($status, $tracking_id);
        $this->model->MOD_ADD_TRACKING_DATA($transaction_date, $tracking_id, $status, $description);

        if ($status == "Delivered") {
            $orders = $this->model->MOD_GET_DELIVERY_ORDERS($tracking_id);

            if ($orders) {
                foreach ($orders as $order) {
                    $id = $order->id;
                    $item_id = $order->item_id;
                    $customer_id = $order->customer_id;
                    $quantity = $order->quantity;
                    $total_amount = $order->total_amount;

                    $product = $this->model->MOD_GET_PRODUCT($item_id);

                    if ($product) {
                        $old_quantity = $product[0]->quantity;
                    }

                    $new_quantity = $old_quantity - $quantity;

                    $this->model->MOD_UPDATE_SINGLE_ORDER_STATUS($transaction_date, $id);
                    $this->model->MOD_UPDATE_PRODUCT_QUANTITY($new_quantity, $item_id);
                    $this->model->MOD_ADD_TO_SALES($transaction_date, $tracking_id, $customer_id, $total_amount);
                }
            }
        }

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Order/s has been set to " . $status . "!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function get_tracking_data()
    {
        $tracking_id = $this->input->post("tracking_id");
        $customer_id = $this->input->post("customer_id");

        $is_owner = $this->model->MOD_GET_ORDER_DATA($tracking_id, $customer_id);
        $tracking_details = $this->model->MOD_GET_TRACKING_DATA($tracking_id);

        if ($tracking_details && $is_owner) {
            echo json_encode($tracking_details);
        } else {
            echo json_encode(false);
        }
    }

    public function print_receipt()
    {
        $tracking_id = $this->input->post("tracking_id");

        $this->session->set_userdata("tracking_id", $tracking_id);

        echo json_encode(true);
    }

    public function get_category_data()
    {
        $category_id = $this->input->post("category_id");

        $category = $this->model->MOD_GET_PRODUCT_CATEGORY($category_id);

        echo json_encode($category);
    }

    public function get_supplier_data()
    {
        $supplier_id = $this->input->post("supplier_id");

        $supplier = $this->model->MOD_GET_PRODUCT_SUPPLIER($supplier_id);

        echo json_encode($supplier);
    }

    public function update_message_status()
    {
        $id = $this->input->post("id");

        $this->model->MOD_UPDATE_MESSAGE_STATUS($id);

        echo json_encode(true);
    }

    public function get_unread_messages()
    {
        $unread_messages = $this->model->MOD_GET_UNREAD_MESSAGES();

        echo json_encode($unread_messages);
    }

    public function delete_message()
    {
        $id = $this->input->post("id");

        $this->model->MOD_DELETE_MESSAGE($id);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Message has been successfully deleted!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function reply_with_email()
    {
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        $message =
            '
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#edf2f7;margin:0;padding:0;width:100%">
                    <tbody>
                        <tr>
                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">
                                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;margin:0;padding:0;width:100%">
                                    <tbody>
                                        <tr>
                                        <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;padding:25px 0;text-align:center">
                                            <img src="https://webjdreamcorp.ssystem.online/dist/images/logo.png" style="margin-right: 5px; width: 40px; height: 40px; display: inline-block; border-radius: 50%; vertical-align: middle;" alt="logo">
                                            <h1 style="margin: 0; text-transform: capitalize; font-style: italic; display: inline-block; vertical-align: middle;">
                                                WEBJ Dream Corporation
                                            </h1>
                                        </td>                                    
                                        </tr>
                                        <tr>
                                            <td width="100%" cellpadding="0" cellspacing="0" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#edf2f7;border-bottom:1px solid #edf2f7;border-top:1px solid #edf2f7;margin:0;padding:0;width:100%;border:hidden!important">
                                                <table class="m_-6454603622214203898inner-body" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#ffffff;border-color:#e8e5ef;border-radius:2px;border-width:1px;margin:0 auto;padding:0;width:570px">
                                                    <tbody>
                                                        <tr>
                                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;max-width:100vw;padding:32px">
                                                            <h2 style="box-sizing:border-box; margin: 0; text-transform: capitalize; font-style: italic; text-align:center">
                                                            ' . $subject . '
                                                            </h2>
                                                            <br>
                                                            <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;line-height:1.5em;margin-top:0;font-size:13px;text-align:justify">
                                                                <br><br>
                                                                Dear Mr./Ms. ' . $name . ',
                                                                <br><br><br><br>
                                                                ' . $message . '
                                                                <br><br><br><br><br>
                                                                <b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">WEBJ Dream Corporation</b>
                                                                <br><br><br>
                                                                *** This is a system generated message.<b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">DO NOT REPLY TO THIS EMAIL</b>.***
                                                                <br>
                                                            </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">
                                                <table class="m_-6454603622214203898footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;margin:0 auto;padding:0;text-align:center;width:570px">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;max-width:100vw;padding:32px">
                                                                <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;line-height:1.5em;margin-top:0;color:#b0adc5;font-size:12px;text-align:center">
                                                                    © 2024 WEBJ Dream Corporation. All rights reserved.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            ';

        $send_success = send_email($name, $email, $subject, $message, "WEBJ Dream Corporation", "no-reply.webjdreamcorp@ssystem.online", "09465287111@Mark");

        if ($send_success) {
            $this->session->set_userdata("alert", array(
                "title" => "Success",
                "message" => "Message has been sent!",
                "type" => "success"
            ));
        } else {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "There is a problem while sending your messsage.",
                "type" => "error"
            ));
        }

        echo json_encode(true);
    }

    public function rate_order()
    {
        $transaction_date = date("Y-m-d H:i");
        $order_id = $this->input->post("order_id");
        $rating = $this->input->post("rating");
        $feedback = $this->input->post("feedback");

        $this->model->MOD_UPDATE_SINGLE_ORDER_STATUS_COMPLETED($transaction_date, $order_id);
        $this->model->MOD_ADD_RATINGS($order_id, $rating, $feedback);

        $this->session->set_userdata("alert", array(
            "title" => "Success",
            "message" => "Thank you for your feedback!",
            "type" => "success"
        ));

        echo json_encode(true);
    }

    public function update_unread_rated_orders()
    {
        $customer_id = $this->input->post("user_id");

        $this->model->MOD_UPDATE_UNREAD_RATED_ORDERS($customer_id);

        echo json_encode(true);
    }

    public function get_filtered_sales()
    {
        $from_date = $this->input->post("from_date");
        $to_date = $this->input->post("to_date");

        $filtered_sales = $this->model->MOD_GET_FILTERED_SALES($from_date, $to_date);

        if ($filtered_sales) {
            echo json_encode($filtered_sales);
        } else {
            echo json_encode(false);
        }
    }

    public function get_sales_data()
    {
        $month = $this->input->post("month");
        $year = $this->input->post("year");

        $sales_data = $this->model->MOD_GET_SALES_DATA($month, $year);

        echo json_encode($sales_data);
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
