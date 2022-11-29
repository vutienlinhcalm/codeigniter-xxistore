<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
                    if($this->cart->contents()){
                ?>
                <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Sản Phẩm</td>
							<td class="price">Đơn giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        
                        <?php 
                            $itemtotal = 0;
                            $carttotal = 0;
                            foreach($this->cart->contents() as $items){  
                                $itemtotal = $items['qty'] * $items['price']; 
                                $carttotal += $itemtotal;
                        ?>
						<tr>
							<td class="cart_product">
								<a  href=""><img width="150" height="150" src="<?php echo base_url('uploads/imageproduct/'.$items['options']['image']) ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $items['name']  ?></a></h4>
								
							</td>
							<td class="cart_price">
								<p><?php echo number_format($items['price'],0,',','.') ?> VNĐ</p>
							</td>
							<td class="cart_quantity">
                                <form action="<?php echo base_url('update-cart-item')?>" method="POST">
								<div class="cart_quantity_button d-flex">
									<input type="hidden" value="<?php echo $items['rowid'] ?>" name="rowid" />
									<input class="cart_quantity_input" type="number" name="quantity" value="<?php echo $items['qty'] ?>">
                                    <input type="submit" name="capnhat" class="btn btn-info" value="cập nhật">
									
								</div>
                                </form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($itemtotal,0,',','.') ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url('delete-item/'.$items['rowid']) ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                            
                        <?php 
                            }
                        ?>
                            <tr>
                                <td colspan="4"> Tổng Tiền <p class="cart_total_price"><?php echo number_format($carttotal,0,',','.') ?> VNĐ</p></td>
                                <td><a href="<?php echo base_url('delete-all-cart') ?>" class="btn btn-danger">Xóa tất cả</a></td>
                                <td><a href="<?php echo base_url('checkout') ?>" class="btn btn-success">Mua hàng</a></td>
                            </tr>
					</tbody>
                    
				</table>
                <?php
                    } else{
                        echo '<span>giỏ hàng của bạn còn trống</span>';
                    }
                ?>
			</div>
		</div>
	</section> <!--/#cart_items-->