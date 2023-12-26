<?php

class model extends CI_Model
{
    /*============================== SELECT QUERIES ==============================*/
    public function MOD_GET_PRODUCT_CATEGORIES()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_categories` ORDER BY `name` ASC";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_SUPPLIERS()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_suppliers` ORDER BY `name` ASC";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_PRODUCT_CATEGORY($category_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_categories` WHERE `id` = '" . $category_id . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_PRODUCTS($category_id)
    {
        if ($category_id == "0") {
            $sql = "SELECT * FROM `tbl_webjdreamcorp_products` ORDER BY `id` DESC LIMIT 4";
        } else {
            $sql = "SELECT * FROM `tbl_webjdreamcorp_products` WHERE `category_id` = '" . $category_id . "' ORDER BY `id` DESC LIMIT 4";
        }

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_ALL_PRODUCTS_BY_CATEGORY($category_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_products` WHERE `category_id` = '" . $category_id . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_ALL_PRODUCTS_BY_SUPPLIER($supplier_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_products` WHERE `supplier_id` = '" . $supplier_id . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_PRODUCT($item_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_products` WHERE `id` = '" . $item_id . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_SIMILAR_PRODUCTS($category_id, $id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_products` WHERE `category_id` = '" . $category_id . "' AND `id` != '" . $id . "' ORDER BY RAND() LIMIT 4";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_CUSTOMERS()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_customers` ORDER BY `id` DESC LIMIT 8";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_CUSTOMER_BY_ID($id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_customers` WHERE `useraccount_id` = ?";
        $query = $this->db->query($sql, array($id));

        return $query->result();
    }
    
    public function MOD_GET_ALL_CUSTOMERS()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_customers` ORDER BY `id` DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_CHECK_USERNAME($username)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_useraccounts` WHERE `username` = '" . $username . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_ADMINISTRATOR_DATA($id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_useraccounts` WHERE `id` = '" . $id . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_NEWSLETTER_EMAIL($email)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_newsletter` WHERE `email` = '" . $email . "'";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_ALL_PRODUCTS()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_products` ORDER BY `id` DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }

    /*============================== INSERT QUERIES ==============================*/
    public function MOD_NEW_CATEGORY($name, $description)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_categories` (`id`, `name`, `description`) VALUES (NULL, ?, ?)";

        $this->db->query($sql, array($name, $description));
    }
    
    public function MOD_NEW_SUPPLIER($name, $contact_person, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_suppliers` (`id`, `name`, `contact_person`, `email`, `mobile_number`, `house_number`, `subdivision_zone_purok`, `city`, `province`, `country`, `zip_code`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->query($sql, array($name, $contact_person, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code));
    }

    public function MOD_ADD_NEWSLETTER_EMAIL($email)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_newsletter` (`id`, `email`) VALUES (NULL, ?)";

        $this->db->query($sql, array($email));
    }

    public function MOD_ADD_CONTACT_MESSAGE($name, $mobile_number, $email, $subject, $message)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_messages` (`id`, `name`, `mobile_number`, `email`, `subject`, `message`) VALUES (NULL, ?, ?, ?, ?, ?)";

        $this->db->query($sql, array($name, $mobile_number, $email, $subject, $message));
    }

    public function MOD_ADD_USER_ACCOUNT($name, $username, $password, $image)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_useraccounts` (`id`, `name`, `username`, `password`, `image`, `user_type`) VALUES (NULL, ?, ?, ?, ?, 'customer')";

        $this->db->query($sql, array($name, $username, $password, $image));
    }

    public function MOD_ADD_CUSTOMER($useraccount_id, $current_date, $first_name, $middle_name, $last_name, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_customers` (`id`, `useraccount_id`, `date_registered`, `first_name`, `middle_name`, `last_name`, `email`, `mobile_number`, `house_number`, `subdivision_zone_purok`, `city`, `province`, `country`, `zip_code`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->query($sql, array($useraccount_id, $current_date, $first_name, $middle_name, $last_name, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code));
    }
    
    public function MOD_NEW_PRODUCT($name, $category_id, $supplier_id, $price, $cost_price, $quantity, $description, $image)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_products` (`id`, `name`, `category_id`, `supplier_id`, `price`, `cost_price`, `quantity`, `description`, `image`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->query($sql, array($name, $category_id, $supplier_id, $price, $cost_price, $quantity, $description, $image));
    }

    /*============================== UPDATE QUERIES ==============================*/
    public function MOD_UPDATE_ACCOUNT($name, $username, $password, $image, $id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_useraccounts` SET `name` = ?, `username` = ?, `password` = ?, `image` = ? WHERE `id` = ?";

        $this->db->query($sql, array($name, $username, $password, $image, $id));
    }
    
    public function MOD_UPDATE_CATEGORY($name, $description, $id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_categories` SET `name` = ?, `description` = ? WHERE `id` = ?";

        $this->db->query($sql, array($name, $description, $id));
    }
    
    public function MOD_UPDATE_SUPPLIER($name, $contact_person, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code, $id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_suppliers` SET `name` = ?, `contact_person` = ?, `email` = ?, `mobile_number` = ?, `house_number` = ?, `subdivision_zone_purok` = ?, `city` = ?, `province` = ?, `country` = ?, `zip_code` = ? WHERE `id` = ?";

        $this->db->query($sql, array($name, $contact_person, $email, $mobile_number, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code, $id));
    }
    
    public function MOD_UPDATE_PRODUCT($name, $description, $price, $cost_price, $quantity, $category_id, $supplier_id, $image, $id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_products` SET `name` = ?, `description` = ?, `price` = ?, `cost_price` = ?, `quantity` = ?, `category_id` = ?, `supplier_id` = ?, `image` = ? WHERE `id` = ?";

        $this->db->query($sql, array($name, $description, $price, $cost_price, $quantity, $category_id, $supplier_id, $image, $id));
    }

    /*============================== DELETE QUERIES ==============================*/
    public function MOD_DELETE_CATEGORY($id)
    {
        $sql = "DELETE FROM `tbl_webjdreamcorp_categories` WHERE `id` = ?";

        $this->db->query($sql, array($id));
    }
    
    public function MOD_DELETE_SUPPLIER($id)
    {
        $sql = "DELETE FROM `tbl_webjdreamcorp_suppliers` WHERE `id` = ?";

        $this->db->query($sql, array($id));
    }
    
    public function MOD_DELETE_PRODUCT($id)
    {
        $sql = "DELETE FROM `tbl_webjdreamcorp_products` WHERE `id` = ?";

        $this->db->query($sql, array($id));
    }
}
