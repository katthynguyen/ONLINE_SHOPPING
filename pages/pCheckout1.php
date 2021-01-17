<!-- <--?php $public = 'http://localhost/ECOMERCIAl/'; ?> -->
<!-- //page -->
<!-- checkout page -->
<!-- <div class="privacy"> -->
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
										$query =   "SELECT *
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
										<td class="invert">
											<!-- <div class="quantity"> -->
												<!-- <div class="quantity-select"> -->
													<!-- <div class="entry value-minus">&nbsp;</div> -->
													<!-- <div class="entry value"> -->
														<input type="text" name="Number" id="Number" value="<?php echo $_SESSION["Number"][$i]; ?>" style="text-align: center;height:30px;" size="2">
														
														<!-- <input type="text" name="Number" value="<?php echo $_SESSION["Number"][$i]; ?>" width="45" size="5" /> -->
														<input type="hidden" name="Position" value="<?php echo $i; ?>" />
														<!-- <input type="submit" value="SL" /> -->
														
													<!-- </div> -->
													<!-- <div class="entry value-plus active">&nbsp;</div> -->
												<!-- </div> -->
											<!-- </div> -->
										</td>
										<td class="invert"><?php echo $row["TenSanPham"] ?></td>
										<td class="invert"><?php echo $row["GiaSanPham"]?></td>
										<td class="invert">
											<div class="rem">
												<div class="close1"></div>
											</div>
										</td>
									</tr>
								</form>
							<?php 
							$sum += $_SESSION['Number'][$i]*$row["GiaSanPham"];
														
							}
						} 
					?>
						</tbody>
					</table>
					<div class="Price" style="margin-top: 30px; font-size:30px;">
					<u style="color:red">Totals: </u> <b> <?php echo $sum?> vnd</b>
					</div>
					
				</div>
			</div>
			<div class="checkout-left">
			<a class="btn btn-primary" href="#" role="button">Link</a>
					<?php
						if(isset($_SESSION["IdProduct"]) == true && count($_SESSION["IdProduct"]) != 0){?>
							<div class="checkout-right-basket">
							
						<a href="pages/XLDatHang.php?sum=<?php echo $sum?>" role="button" >Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
					<?php }?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- //checkout page -->