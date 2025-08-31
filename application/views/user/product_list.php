<style type="text/css">
	.row1 img{
    border-radius: 10px;
    /*border: 2px solid <?=$products['product_color']?>;*/
  }
  /*.row h2{
  	text-align: center;
  }*/
</style>
<div class="colorlib-product">
			<div class="container">
				<div class="row m-4">
					<h2 class="text-center p-0">Product List</h2>
				</div>
				<div class="row mb-4">
  <div class="col text-center">
    <button class="btn btn-outline-primary filter-btn" data-category="All">All</button>
    <button class="btn btn-outline-dark filter-btn" data-category="Carbonated">Carbonated</button>
    <button class="btn btn-outline-success filter-btn" data-category="Non-Carbonated">Non-Carbonated</button>
  </div>
</div>

				<div class="row row-pb-md">
					<?php
					// echo "<pre>";
						// print_r($products['product_color'])
					// print_r($products);
					?>
					<?php
        if (count($products)>0) {
          ?>
<?php
foreach ($products as $key => $row) {
?>
  <div class="col-lg-3 row1 mb-4 text-center product-card" data-category="<?=$row['product_category']?>">
    <div class="product-entry border">
      <a href="<?=base_url()?>user/product_details/<?=$row['product_id']?>" class="prod-img">
        <img src="<?=base_url().$row['product_image']?>" class="img-fluid p-4" style="border: 2px solid <?=$row['product_color']?>">
      </a>
      <div class="desc mt-1">
        <h2>
          <a style="text-decoration: none;text-transform: capitalize;color: <?=$row['product_color']?>" href="<?=base_url()?>user/product_details/<?=$row['product_id']?>"><?=$row['product_name']?></a>
        </h2>
        <span class="price">&#8377; <?=number_format($row['product_market_price'])?></span>
      </div>
    </div>
  </div>
<?php } ?>

					<?php
        }else{
          ?>
          <div class="col-md-12 p-2 bg-success row1">
              <h2 class="">Product List is empty !</h2>
          </div>

          <?php
        }

        ?>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('.filter-btn').click(function(){
      var selectedCategory = $(this).data('category');
      
      if (selectedCategory == 'All') {
        $('.product-card').show();
      } else {
        $('.product-card').each(function(){
          if ($(this).data('category') == selectedCategory) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      }
    });
  });
</script>
