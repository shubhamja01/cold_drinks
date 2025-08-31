<br>	
<style type="text/css">
	.row1{
    border-radius: 10px;
    border: 2px solid <?=$product_details["product_color"]?>;
  }
  img{
    border-radius: 10px;

  }
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">

		<a href="<?= base_url('user/product_list?category=' . $product_details['product_category']) ?>" class="btn btn-success mb-3">Back</a></div>
	
		<div class="col-md-5 p-3">
  <div id="productCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner rounded shadow">
      
          <img src="<?= base_url().$product_details["product_image"] ?>" style="border:2px solid <?=$product_details["product_color"] ?>" class="d-block w-100 p-5 img-fluid" alt="Product Image?>">
    </div>
  </div>
</div>

		<div class="col-md-7">
			<div class="row1 p-2">
				<table width="100%" class="table table-hover table-success font-weight-bold text-dark text-center" style="text-transform: capitalize;">
					<tr>
						<td>
							<big>
								Name :- <?=$product_details['product_name']?></td>
							</big>
					</tr>
					<tr>
						<td>Category :- <?=$product_details['product_category']?></td>
					</tr>
					<tr>
						<td>Type :- <?=$product_details['product_type']?></td>
					</tr>
					<tr>
						<td>
							Color :- <button class="btn" style="background-color: <?=$product_details["product_color"]?>">
								<?=$product_details["product_color"]?>
							</button>
						</td>
					</tr>
					<tr>
						<td>
							Price :- &#8377; 
								<?=number_format($product_details['product_market_price'])?>
						</td>
					</tr>
					
					<tr>
						<td>
							<?php
							if (count($cart)>0) {
							?>
								<a href="<?=base_url()?>user/my_cart">
									<button class="btn btn-primary">My cart</button>
								</a>
							<?php
							}else{
							?>
								<a href="<?=base_url()?>user/add_to_cart/<?=$product_details['product_id']?>">
									<button class="btn btn-primary">Add to cart</button>
								</a>
							<?php
							}
							// echo "<pre>";
							// print_r($cart);
							?>
						</td>
					</tr>

					
				</table>
			</div>
		</div>
	</div>
</div>
<!-- <?php
echo "<pre>";
print_r($product_details);
?> -->