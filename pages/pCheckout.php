<?php $public = 'http://localhost/ECOMERCIAl/'; ?>
<!-- //page -->
<!-- checkout page -->
<div class="privacy">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">Card
			<span class="heading-style">
				<i></i>
				<i></i>
				<i></i>
			</span>
		</h3>
		<!-- //tittle heading -->
		<div style="margin-left: 320px; margin-top:-850px">
			<div class="checkout-right">
				<h4>Your shopping cart contains:
					<span>Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($_SESSION["IdProduct"]) == true){
								$sum = 0;
								for ($i=0; $i <count($_SESSION["IdProduct"]) ; $i++) { 
									$id = $_SESSION["IdProduct"][$i];
									$query = "SELECT *
									  FROM SanPham
                                      WHERE MaSanPham = $id";
									$Checkout = DataProvider::ExecuteQuery($query);
									$row = mysqli_fetch_array($Checkout);								
						
							?>
								<form name = "frmCard"action="pages/XLRemoveProduct.php" method="post"></form>
								<tr class="rem1">
									<td class="invert"><?php echo $i + 1; ?></td>
									<td class="invert-image">
										<a href="index.php?act=ProductDetail&id=<?php echo $id;?>">
											<img src="<?php $public ?>images/<?php echo $row["HinhURL"] ?>"  class="img-responsive" style="width:80px; height:50px;">
										</a>
									</td>
									<td class="invert"><?php echo $row["TenSanPham"] ?></td>
									<td class="invert"><?php echo $row["Giaban"] ?></td>
									<td class="invert">
										<div class="quantity">
											<div class="quantity-select">
												<div class="entry value-minus">&nbsp;</div>
												<div class="entry value">
													<!-- <span><--?php echo $col["SoLuong"] ?></span> -->
													<span>
													<input type="text" name="Number" value="<?php echo $_SESSION["Number"][$i]; ?>" width="45" size="5" />
                                   					<input type="hidden" name="Position" value="<?php echo $i; ?>" />
													<input type="submit" value="SL" />
													</span>
												</div>
												<div class="entry value-plus active">&nbsp;</div>
											</div>
										</div>
									</td>
									
									<td class="invert">
										<div class="rem">
											<div class="close1"></div>
										</div>
									</td>
								</tr>
							<?php 
							$sum += $_SESSION['Number'][$i]*$row["GiaSanPham"];
							}
						} 
					?>
						</tbody>
					</table>
					<div class="Price">
					Totals: <?php echo $sum?> đ
					</div>
					<?php
						if(isset($_SESSION["IdProduct"]) == true && count($_SESSION["IdProduct"]) != 0)
						{
							?>
								<a href="../pages/"></a>
							<?php
						}
					?>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile" style="margin-left: 200px;margin-right:200px">
					<h4 style="text-align: center;">Add a new Details</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- //checkout page -->