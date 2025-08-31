<style type="text/css">
	.row1 .col-lg-8,.col-lg-4{
		border: 2px solid skyblue ;
		border-radius: 10px;
	}
	.row1 .col-lg-8 .row .form-group label,.col-md-12 span,.col-md-12 label{
		font-weight: bold !important;
	}
</style>
	<div id="page">
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="<?=base_url()?>user/index">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>

	<form method="post" action="<?=base_url()?>user/place_order">
		<div class="colorlib-product">
			<div class="container">
				
				<div class="row row1">
					<div class="col-lg-8 bg-light">
							<h2 class="m-2 font-weight-bold text-primary">Billing Details</h2><br>
		              	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name :-</label>
										<input  type="text" value="<?=$profile_data['customer_name']?>" class="form-control" name="full_name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Mobile :-</label>
										<input  type="number" value="<?=$profile_data['customer_mobile']?>" class="form-control" name="billing_mobile">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>area :-</label>
										<input  type="text" value="<?=$profile_data['area']?>" class="form-control" name="area">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>city :-</label>
										<input  type="text" value="<?=$profile_data['city']?>" class="form-control" name="city">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>district :-</label>
										<input  type="text" value="<?=$profile_data['district']?>" class="form-control" name="district">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>state :-</label>
										<input  type="text" value="<?=$profile_data['state']?>" class="form-control" name="state">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>pincode :-</label>
										<input  type="number" value="<?=$profile_data['pincode']?>" class="form-control" name="pincode" >
									</div>
								</div>
								
		               </div>
					</div>

					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12 ">
								<div class="cart-detail bg-light">
									<h2 class=" text-success">Cart Total</h2>
									<ul>
										<li>
											<ul>
												<?php
												$sum=0;
												foreach($products as $row){
												$sum+= $row['quantity'] * $row['product_price']
												?>
												<li>
													<span><?=$row['quantity']?> x <?=$row['product_name']?></span>

													<span>&#8377; <?=number_format($row['quantity'] * $row['product_price'])?></span>
												</li>
												<?php
												}
												?>
												<li>
													<span>Total :-</span> 
													<span>&#8377; <?=number_format($sum)?></span>
												</li>
											</ul>
										</li>
									</ul>
								</div>
						   </div>

						   <div class="w-100"></div>

						   <div class="col-md-12">
								<div class="cart-detail bg-light">
									<h2 class=" text-success">Payment Method</h2>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_method" value="cash"> Cash </label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_method" checked="" value="online"> Online</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<p>
							<button class="btn btn-success">Place an order</button>
						</p>
					</div>
				</div>
			</div>
		</div>
</form>

