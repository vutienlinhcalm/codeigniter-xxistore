<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Brand</h2>
						<div class="panel-group category-products" id="accordian"><!--brand-product-->
							
						<?php 
							foreach($brand as $key => $valuebrand){
						?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url('brand/'.$valuebrand->brandid) ?>"><?php echo $valuebrand->brandname ?></a></h4>
								</div>
							</div>
						<?php 
							}
						?>
						</div><!--/brand-product-->
			
						
						<!-- price-range -->
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">

					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm nổi bật</h2>
						<?php 
							foreach($allproduct_pagination as $key => $valuepro){
						?>
						<div class="col-sm-4">
							<a href="<?php echo base_url('product-detail/'.$valuepro->productid) ?>">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url("uploads/imageproduct/".$valuepro->image)?>" alt="<?php echo $valuepro->productname ?>" />
										<h2><?php echo $valuepro->price ?> VND</h2>
										<p><?php echo $valuepro->productname ?></p>
									</div>
									
								</div>
								
							</div>
							</a>
							
						</div>
						<?php 
							}
						?>
						
					</div><!--features_items-->
					<?php echo $links ?>
				</div>
			</div>
		</div>
	</section>