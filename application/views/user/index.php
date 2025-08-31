<!DOCTYPE HTML>
<html>
	<head>
	<title>Cold Drinks</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
	<body>
		
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center colorlib-heading p-4">
			<h2>New Products</h2>
		</div>
	</div>
	<div class="row row-pb-md mt-5">
					<?php
					foreach ($top_products as $key => $row) {
						?>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="<?=base_url()?>user/product_details/<?=$row['product_id']?>" class="prod-img">
								<img src="<?=base_url().$row['product_image']?>" alt="not found" class="img-fluid p-4" style="border: 2px solid <?=$row['product_color']?>;border-radius: 10px;" width="100%">
							</a>
							<div class="desc mt-2 pb-2">
								<h4 style="text-transform: capitalize;"><?=$row['product_name']?></h4>
								<span class="price">&#8377; <?=number_format($row['product_market_price'])?></span>
							</div>
						</div>
					</div>
						<?php
					}
					?>
				</div>
</div>
	
	
	</body>
</html>

