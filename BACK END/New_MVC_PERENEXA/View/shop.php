<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Shop</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>

<div class="untree_co-section product-section before-footer-section">
	<div class="container">
		<div class="row">

			<?php

			foreach ($response['data'] as $value) {

				?>
				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="cart-section?<?php echo 'Product_ID=' . $value->Product_ID; ?>">
						<img src="Uploaded_Product/<?php echo $value->Product_Image?>" class="img-fluid product-thumbnail">
						<h3 class="product-title"><?php echo $value->Product_Name;?></h3>
						<strong class="product-price"><?php echo $value->Product_Price;?></strong>

						<span class="icon-cross">
							<img src="Assets/images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<?php
			}
			?>
		</div>
	</div>
</div>