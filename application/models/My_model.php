<?php
class My_model extends CI_model{
    function insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    function select($table){
        return $this->db->get($table)->result_array();
    }
    function delete($table,$cond){
        $this->db->where($cond)->delete($table);
    }
    function select_where($table,$cond){
        return $this->db->where($cond)->get($table)->result_array();
    }
    function update($table,$cond,$data){
        $this->db->where($cond)->update($table,$data);
    }
    function top_products(){
        $sql="SELECT * FROM `products` ORDER BY product_id DESC LIMIT 8";
        return $this->db->query($sql)->result_array();
    }
    function get_cart_data(){
        $customer_id=$_SESSION['customer_id'];
        $sql="SELECT * FROM cart,products WHERE cart.product_id = products.product_id AND cart.customer_id = '$customer_id'";
        return $this->db->query($sql)->result_array();
    }
    function get_cart_count(){
        if (isset($_SESSION['customer_id'])) {
            $customer_id = $_SESSION['customer_id'];
            $sql = "SELECT * FROM cart, products WHERE cart.product_id = products.product_id AND cart.customer_id = '$customer_id'";
            return $this->db->query($sql)->result_array();
        } else {
            return array();
        }
    }
    function search_products($find){
        $sql="
                SELECT * FROM products WHERE
                product_name LIKE '%$find%' OR
                product_category LIKE '%$find%' OR
                product_type LIKE '%$find%' OR
                product_market_price LIKE '%$find%' OR
                product_type LIKE '%$find%' OR
                product_size LIKE '%$find%'
        ";
        return $this->db->query($sql)->result_array();
    }

    function get_products_with_admin_info(){
        $sql="SELECT products.*, admin.admin_name FROM products JOIN admin ON products.by_admin = admin.admin_id";
        return $this->db->query($sql)->result_array();
    }
    function get_cart(){
    	$sql="SELECT * FROM cart,customer,products WHERE cart.customer_id=customer.customer_id AND cart.product_id=products.product_id";
        return $this->db->query($sql)->result_array();

    }

}

?>