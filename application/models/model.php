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

    /*============================== INSERT QUERIES ==============================*/
    public function MOD_NEW_CATEGORY($name, $description)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_categories` (`id`, `name`, `description`) VALUES (NULL, ?, ?)";

        $this->db->query($sql, array($name, $description));
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

    /*============================== UPDATE QUERIES ==============================*/
    public function MOD_UPDATE_CATEGORY($name, $description, $id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_categories` SET `name` = ?, `description` = ? WHERE `id` = ?";

        $this->db->query($sql, array($name, $description, $id));
    }

    /*============================== DELETE QUERIES ==============================*/
    public function MOD_DELETE_CATEGORY($id)
    {
        $sql = "DELETE FROM `tbl_webjdreamcorp_categories` WHERE `id` = ?";

        $this->db->query($sql, array($id));
    }
}
