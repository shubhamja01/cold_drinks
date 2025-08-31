<!-- <?php
// echo "<pre>";
// print_r($products);
?> -->
<style type="text/css">
	table tr td span{
		font-weight: bold;
	}
	.align-items-center button span{
		font-size: 20px;
	}
	.row1{
    border-radius: 10px;
    border: 1px solid black;
  }
  .row1 h2{
  	color: red;
    font-weight: bold;
    text-shadow: 1px 1px black;
    text-transform: uppercase;
  }
</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12 m-2">
					<b>Cart :-</b>
			</div>
		</div>
	</div>

<div class="colorlib-product">
	<div class="container">

		<div class="row pb-5">
			<div class="col-md-12">
				<?php
				if (count($products)>0) {
					?>
				<table class="table table-bordered table-hover text-center">
					<thead class="thead-dark text-center">
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Total</th>
							<th>Remove</th>
						</tr>
					</thead>
					
					<tbody>
					<?php 
					$sum=0;
					foreach ($products as $row){ 
						$sum+=($row['quantity'] * $row['product_market_price']);
						?>
						<tr>
							<td>
								<div class="d-flex align-items-center">
									<img src="<?= base_url() . $row['product_image'] ?>" width="100px" class="img-thumbnail" style="border-radius: 10px;border: 2px solid <?=$row['product_color']?>" alt="Product Image">
									<div class="ml-3">
										<h5><?= $row['product_name'] ?></h5>
									</div>
								</div>
							</td>
							<td>
								<span class="price">&#8377; <?= number_format($row['product_market_price']) ?></span>
							</td>
							<td>
								<span class="price">&#8377; <?= number_format($row['quantity'] * $row['product_market_price']) ?></span>
							</td>
							<td class="text-center">
								<a href="<?= base_url() ?>user/remove_cart/<?= $row['cart_id'] ?>" class="btn btn-danger btn-sm">Remove</a>
							</td>
						</tr>
					<?php 
						} 
					?>
					</tbody>
				</table>
			</div>
			<div class="row mt-2">
				<div class="total p-3 border rounded">
					<div class="grand-total mt-2 text-center">
						<p><strong>Total: </strong><span>&#8377; <?=number_format($sum)?></span></p>
					</div>
				</div>
			</div>
		</div> 
	</div> 
</div>
		</div>

	</div> 
</div> 
<script type="text/javascript">
	function incartqnt(btn,cart_id){
		$.ajax({
			"url":"<?=base_url()?>user/incartqnt/"+cart_id
		}).done(function(res){
			console.log(res);
			location.reload();
		});
	}
	function decartqnt(btn,cart_id){
		$.ajax({
			"url":"<?=base_url()?>user/decartqnt/"+cart_id
		}).done(function(res){
			console.log(res);
			location.reload();
		});
	}

</script>

					<?php
				}else{
					?>
					<div class="col-md-12 p-2 bg-warning row1">
						<marquee scrollamount="10" direction="right" behavior="alternate">
							<h2>Cart is empty !</h2>
						</marquee>
					</div>

					<?php
				}

				?>