<?php
class User extends CI_controller{
	function user_view($vname = "",$data=""){
		$cartdata["cartdata"]=$this->My_model->get_cart_count();
		$this->load->view("user/navbaar",$cartdata);
		$this->load->view("user/$vname",$data);
		$this->load->view("user/footer");
	}
	function index(){
		$data["top_products"]=$this->My_model->top_products();
		
		$this->user_view("index",$data);
	}
	function login(){
		$this->user_view("login");
	}
	function signup(){
		$this->user_view("signup");
	}
	function signup_data(){
		// echo "<pre>";
		// print_r($_POST);
		$this->My_model->insert("customer",$_POST);
		redirect("user/login");
	}
	function login_verify(){
		// echo "<pre>";
		// print_r($_POST);
		$cond=[
				"customer_mobile"=>$_POST["customer_mobile"],
				"customer_password"=>$_POST["customer_password"]
				];

		$data = $this->My_model->select_where("customer",$cond);

		if (count($data)>0) {
			// echo "login success";
			$customer=$data[0];
			// print_r($customer);
			$_SESSION["customer_id"]=$customer["customer_id"];
			redirect("user/index");
		}
		else{
			echo "login failed";
		}
		// print_r($data);
	}
	function product_details($id){
		if (isset($_SESSION['customer_id'])) {
		
			$cond=['product_id'=>$id];
			$cond2=['product_id'=>$id,"customer_id"=>$_SESSION['customer_id']];
			
			// print_r($cond);
			$data["product_details"]=$this->My_model->select_where("products",$cond)[0];
			$data["cart"]=$this->My_model->select_where("cart",$cond2);
			
			// print_r($data);
			$this->user_view("product_details",$data);
		
		}else{
		$this->user_view("login");

		}
	}
	function product_list(){
		// if (isset($_GET['category'])) {
		// 	$cond=["product_category"=>$_GET["category"]];
		// 	$data['products']=$this->My_model->select_where("products",$cond);
		// }else{
			$data['products']=$this->My_model->select("products");
		// }
			// echo "hi";

		$this->user_view("product_list",$data);
	}
	function profile(){
		$cond=["customer_id"=>$_SESSION["customer_id"]];
		$data["profile_data"]=$this->My_model->select_where("customer",$cond)[0];
		
		// print_r($data);
		$this->user_view("profile",$data);
	}
	function edit_profile(){
		$cond=["customer_id"=>$_SESSION["customer_id"]];
		$data["profile_data"]=$this->My_model->select_where("customer",$cond)[0];
		$this->user_view("edit_profile",$data);
	}
	function update_profile(){
		echo "<pre>";

		$cond['customer_id']=$_SESSION['customer_id'];
		// print_r($_POST);
		$this->My_model->update('customer',$cond,$_POST);
		redirect("user/profile");
	}
	function change_password(){
		$this->user_view("edit_password");
	}
	function update_password(){
		echo "<pre>";
		$cond=["customer_id"=>$_SESSION["customer_id"]];

		$data=$this->My_model->select_where("customer",$cond)[0];
		// print_r($data);
		
		if ($_POST['old_password']==$_POST['new_password']) {
			echo "same as old password";
		
		}else{
			if ($_POST['old_password']==$data['customer_password']) {
			// print_r($_POST['new_password']);
			$data2=["customer_password"=>$_POST['new_password']];
			
			$this->My_model->update('customer',$cond,$data2);
			// echo "success";
			redirect("user/profile");
		
		}else{
			echo "failed";
			}
		}
		// print_r($_POST);
	}
	function logout(){
    	unset($_SESSION['customer_id']); 
		// session_destroy();
		$this->index();
	}
	function add_to_cart($id){
		// print_r($_POST);
		// print_r($_GET);
		// print_r($_SESSION);

		$data=[
				"customer_id"=>$_SESSION["customer_id"],
				"product_id"=>$id,
				"quantity"=>1
				];
		
		$this->My_model->insert("cart",$data);
		redirect("user/product_details/$id");
	}
	function my_cart(){
		if (isset($_SESSION['customer_id'])) {

			$data["products"]=$this->My_model->get_cart_data();
			// echo "<pre>";
			// print_r($data);
			$this->user_view("my_cart",$data);
		}else{
		$this->user_view("login");

		}
	}
	function remove_cart($id){
		$cond=["cart_id"=>$id];
		$this->My_model->delete("cart",$cond);
		// echo "deleted";
		redirect("user/my_cart");

	}
	function search(){
		$data['products']=$this->My_model->search_products($_GET['keyword']);
		$this->user_view('product_list',$data);
	}
	
}

?>