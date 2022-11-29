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
							<td class="description">Sản phẩm</td>
							<td class="price">Đơn giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành Tiền</td>
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
								<div class="cart_quantity_button d-flex">
									<input type="hidden" value="<?php echo $items['rowid'] ?>" name="rowid" />
									<p disabled class="cart_quantity_input" name="quantity"><?php echo $items['qty'] ?></p>	
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($itemtotal,0,',','.') ?></p>
							</td>
						</tr>
                            
                        <?php 
                            }
                        ?>
                            <tr>
                                <td colspan="4"> Tổng Tiền <p class="cart_total_price"><?php echo number_format($carttotal,0,',','.') ?> VNĐ</p></td>
                            </tr>
					</tbody>
                    
				</table>
                <?php
                    } else{
                        echo '<span>giỏ hàng của bạn còn trống</span>';
                    }
                ?>
			</div> 

            <div class="container">
            <?php
                if($this->session->flashdata('success')){
            ?>
                <div class="alert alert-success"> <?php echo $this->session->flashdata('success') ?></div>
                <?php 
                    } elseif($this->session->flashdata('error')) {   
                ?>
                <div class="alert alert-danger"> <?php echo $this->session->flashdata('error') ?></div>
                    
                <?php
                    }
                ?>
            <form onsubmit="return confirm('Xác nhận thanh toán')" method="POST" action="<?php echo base_url('confirm-checkout')?>">
                <h1>Đia chỉ nhận hàng</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo "<span class ='text text-danger'>". form_error('name')."</span>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo "<span class ='text text-danger'>". form_error('phone')."</span>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo "<span class ='text text-danger'>". form_error('email')."</span>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1">   
                    <?php echo "<span class ='text text-danger'>". form_error('address')."</span>"; ?>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phương thức thanh toán</label>
                    <select name="paymethod">
                        <option value="cod">COD</option>
                        <option value="vnpay">VNPAY</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Đặt hàng</button>
                </form>
            </div>
		</div>
	</section> <!--/#cart_items-->