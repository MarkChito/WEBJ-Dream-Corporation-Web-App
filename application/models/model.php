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

    public function MOD_GET_PRODUCT_SUPPLIER($supplier_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_categories` WHERE `id` = ?";
        $query = $this->db->query($sql, array($supplier_id));

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

    public function MOD_GET_MY_ORDERS($customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($customer_id));

        return $query->result();
    }
    
    public function MOD_GET_CART_DETAILS($customer_id, $item_id, $status)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? AND `item_id` = ? AND `status` = ?";
        $query = $this->db->query($sql, array($customer_id, $item_id, $status));

        return $query->result();
    }

    public function MOD_GET_CURRENT_ORDERS($customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? AND (`status` = 'Cart' OR `status` = 'To Approve' OR `status` = 'To Receive') ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($customer_id));

        return $query->result();
    }

    public function MOD_GET_TO_RATE_ORDERS($customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? AND `status` = 'To Rate' ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($customer_id));

        return $query->result();
    }
    
    public function MOD_GET_COMPLETED_ORDERS($customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? AND `status` = 'Completed' ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($customer_id));

        return $query->result();
    }
    
    public function MOD_GET_COMPLETED_UNREAD_ORDERS($customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? AND `status` = 'Completed' AND `completed_status` = 'unread' ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($customer_id));

        return $query->result();
    }

    public function MOD_GET_ORDERS($status, $customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `status` = ? AND `customer_id` = ? ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($status, $customer_id));

        return $query->result();
    }

    public function MOD_GET_PENDING_ORDERS()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `status` = 'To Approve'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_ORDERS_FROM_IDS($order_ids)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `id` IN (" . $order_ids . ")";
        $query = $this->db->query($sql);

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

    public function MOD_GET_SEARCH_PRODUCTS($search_query)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_products` WHERE `name` LIKE '%" . $search_query . "%'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_CHECK_ORDER($customer_id, $item_id, $status)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `customer_id` = ? AND `item_id` = ? AND `status` = ? ";
        $query = $this->db->query($sql, array($customer_id, $item_id, $status));

        return $query->result();
    }

    public function MOD_GET_ORDER_DETAILS($id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `id` = ?";
        $query = $this->db->query($sql, array($id));

        return $query->result();
    }

    public function MOD_GET_DELIVERIES()
    {
        $sql = "SELECT DISTINCT `tracking_id`, `customer_id` FROM `tbl_webjdreamcorp_orders` WHERE `status` != 'Cart' AND `status` != 'To Approve' AND `status` != 'Rejected' AND `status` != 'Delivered'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_DELIVERY_ORDERS($tracking_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `tracking_id` = ?";
        $query = $this->db->query($sql, array($tracking_id));

        return $query->result();
    }

    public function MOD_GET_ORDER_DATA($tracking_id, $customer_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_orders` WHERE `tracking_id` = ? AND `customer_id` = ?";
        $query = $this->db->query($sql, array($tracking_id, $customer_id));

        return $query->result();
    }

    public function MOD_GET_TRACKING_DATA($tracking_id)
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_tracker` WHERE `tracking_id` = ? ORDER BY `id` DESC";
        $query = $this->db->query($sql, array($tracking_id));

        return $query->result();
    }

    public function MOD_GET_SALES()
    {
        $sql = "SELECT `tracking_id`, `customer_id`, `transaction_date`, SUM(`amount`) AS `total_amount` FROM `tbl_webjdreamcorp_sales` GROUP BY `tracking_id`, `customer_id`, `transaction_date` ORDER BY MAX(`id`) DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_TOTAL_SALES()
    {
        $sql = "SELECT SUM(`amount`) as `total_sales` FROM `tbl_webjdreamcorp_sales`";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_MESSAGES()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_messages` ORDER BY `id` DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function MOD_GET_UNREAD_MESSAGES()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_messages` WHERE `status` = 'unread' ORDER BY `id` DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_RATED_ITEMS()
    {
        $sql = "SELECT * FROM `tbl_webjdreamcorp_ratings` ORDER BY `id` DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_FILTERED_SALES($from_date, $to_date)
    {
        $sql = "SELECT `tracking_id`, `customer_id`, `transaction_date`, SUM(`amount`) AS `total_amount` FROM `tbl_webjdreamcorp_sales` WHERE `transaction_date` BETWEEN ? AND ? GROUP BY `tracking_id`, `customer_id`, `transaction_date` ORDER BY MAX(`id`) DESC";
        $query = $this->db->query($sql, array($from_date, $to_date));

        return $query->result();
    }
    
    public function MOD_GET_SALES_DATA($currentMonth, $currentYear)
    {
        $sql = "SELECT DATE_FORMAT(transaction_date, '%Y-%m-%d') AS day_of_month, SUM(amount) AS total_sales
        FROM tbl_webjdreamcorp_sales
        WHERE MONTH(transaction_date) = ? AND YEAR(transaction_date) = ?
        GROUP BY day_of_month
        ORDER BY day_of_month";
        $query = $this->db->query($sql, array($currentMonth, $currentYear));

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

    public function MOD_ADD_CONTACT_MESSAGE($message_date, $name, $mobile_number, $email, $subject, $message)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_messages` (`id`, `message_date`, `name`, `mobile_number`, `email`, `subject`, `message`, `status`) VALUES (NULL, ?, ?, ?, ?, ?, ?, 'unread')";

        $this->db->query($sql, array($message_date, $name, $mobile_number, $email, $subject, $message));
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

    public function MOD_ADD_TO_CART($transaction_date, $customer_id, $item_id, $quantity, $total_amount, $status)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_orders` (`id`, `transaction_date`, `customer_id`, `item_id`, `quantity`, `total_amount`, `status`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";

        $this->db->query($sql, array($transaction_date, $customer_id, $item_id, $quantity, $total_amount, $status));
    }

    public function MOD_ADD_TRACKING_DATA($transaction_date, $tracking_id, $status, $description)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_tracker` (`id`, `transaction_date`, `tracking_id`, `status`, `description`) VALUES (NULL, ?, ?, ?, ?)";

        $this->db->query($sql, array($transaction_date, $tracking_id, $status, $description));
    }

    public function MOD_ADD_TO_SALES($transaction_date, $tracking_id, $customer_id, $total_amount)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_sales` (`id`, `transaction_date`, `tracking_id`, `customer_id`, `amount`) VALUES (NULL, ?, ?, ?, ?)";

        $this->db->query($sql, array($transaction_date, $tracking_id, $customer_id, $total_amount));
    }
    
    public function MOD_ADD_RATINGS($order_id, $rating, $feedback)
    {
        $sql = "INSERT INTO `tbl_webjdreamcorp_ratings` (`id`, `order_id`, `rating`, `feedback`) VALUES (NULL, ?, ?, ?)";

        $this->db->query($sql, array($order_id, $rating, $feedback));
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

    public function MOD_UPDATE_PRODUCT_QUANTITY($new_quantity, $item_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_products` SET `quantity` = ? WHERE `id` = ?";

        $this->db->query($sql, array($new_quantity, $item_id));
    }

    public function MOD_UPDATE_CUSTOMER($first_name, $middle_name, $last_name, $mobile_number, $email, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code, $useraccount_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_customers` SET `first_name` = ?, `middle_name` = ?, `last_name` = ?, `mobile_number` = ?, `email` = ?, `house_number` = ?, `subdivision_zone_purok` = ?, `city` = ?, `province` = ?, `country` = ?, `zip_code` = ? WHERE `useraccount_id` = ?";

        $this->db->query($sql, array($first_name, $middle_name, $last_name, $mobile_number, $email, $house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code, $useraccount_id));
    }

    public function MOD_UPDATE_USERACCOUNT_NAME($name, $useraccount_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_useraccounts` SET `name` = ? WHERE `id` = ?";

        $this->db->query($sql, array($name, $useraccount_id));
    }

    public function MOD_UPDATE_CART($transaction_date, $quantity, $total_amount, $customer_id, $item_id, $status)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `transaction_date` = ?, `quantity` = ?, `total_amount` = ? WHERE `customer_id` = ? AND `item_id` = ? AND `status` = ?";

        $this->db->query($sql, array($transaction_date, $quantity, $total_amount, $customer_id, $item_id, $status));
    }

    public function MOD_UPDATE_ORDER($quantity, $total_amount, $id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `quantity` = ?, `total_amount` = ? WHERE `id` = ?";

        $this->db->query($sql, array($quantity, $total_amount, $id));
    }

    public function MOD_UPDATE_ORDER_STATUS($transaction_date, $order_ids)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `transaction_date` = '" . $transaction_date . "', `status` = 'To Approve' WHERE `id` IN (" . $order_ids . ")";

        $this->db->query($sql);
    }

    public function MOD_UPDATE_SINGLE_ORDER_STATUS($transaction_date, $order_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `transaction_date` = '" . $transaction_date . "', `status` = 'To Rate' WHERE `id` = ?";

        $this->db->query($sql, array($order_id));
    }
    
    public function MOD_UPDATE_SINGLE_ORDER_STATUS_COMPLETED($transaction_date, $order_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `transaction_date` = '" . $transaction_date . "', `status` = 'Completed', `completed_status` = 'unread' WHERE `id` = ?";

        $this->db->query($sql, array($order_id));
    }

    public function MOD_UPDATE_ORDER_STATUS_AND_TRACKING_ID($transaction_date, $tracking_id, $status, $order_ids)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `transaction_date` = ?, `tracking_id` = ?, `status` = ? WHERE `id` IN (" . $order_ids . ")";

        $this->db->query($sql, array($transaction_date, $tracking_id, $status));
    }

    public function MOD_UPDATE_DELIVERY_STATUS($status, $tracking_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `delivery_status` = ? WHERE `tracking_id` = ? ";

        $this->db->query($sql, array($status, $tracking_id));
    }

    public function MOD_UPDATE_MESSAGE_STATUS($id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_messages` SET `status` = 'read' WHERE `id` = ? ";

        $this->db->query($sql, array($id));
    }
    
    public function MOD_UPDATE_UNREAD_RATED_ORDERS($customer_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `completed_status` = 'read' WHERE `completed_status` = 'unread' AND `customer_id` = ?";

        $this->db->query($sql, array($customer_id));
    }
    
    public function MOD_UPDATE_ORDER_QUANTITY($quantity, $total_amount, $order_id)
    {
        $sql = "UPDATE `tbl_webjdreamcorp_orders` SET `quantity` = ?, `total_amount` = ? WHERE `id` = ?";

        $this->db->query($sql, array($quantity, $total_amount, $order_id));
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

    public function MOD_DELETE_ORDER($id)
    {
        $sql = "DELETE FROM `tbl_webjdreamcorp_orders` WHERE `id` = ?";

        $this->db->query($sql, array($id));
    }

    public function MOD_DELETE_MESSAGE($id)
    {
        $sql = "DELETE FROM `tbl_webjdreamcorp_messages` WHERE `id` = ?";

        $this->db->query($sql, array($id));
    }
}
