<?php
if (isset($_GET["id"]) == false)
	DataProvider::ChangeURL("index.php");

$id = $_GET["id"];
$query = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.SoLuongTon, s.SoLuocXem, s.MoTa, s.SoLuongBan, s.NgayNhap,l.TenLoaiSanPham, h.TenHangSanXuat, h.LogoURL
			FROM SanPham s, LoaiSanPham l, HangSanXuat h
			WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaSanPham = $id";
$Product = DataProvider::ExecuteQuery($query);
$row = mysqli_fetch_array($Product);
if ($row == null)
	DataProvider::ChangeURL("index.php");

?>
<!-- <--?php include "header.php" ?> -->
<!-- Single Page -->
<div id="containerProduct" style="margin-left: 500px; margin-top:-100px;">
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 style="margin-left:100px; font-size:40px">Product details</h3>
			<!-- //tittle heading -->
			
			<div class="col-md-12 single-right-left">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<div class="thumb-image">
								<img src="images/<?php echo $row["HinhURL"]?>" 
								d data-imagezoom="true" class="img-responsive" alt="" 
								style="	padding-top: 50px; 
										width:450px; 
										height:300px;
										padding-bottom:50px;">
							</div>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?php echo $row["TenSanPham"]?></h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<p>
					<span class="item_price"><?php echo $row["GiaSanPham"]?></span>
					<del>$1300.00</del>
				</p>
				<div class="single-infoagile">
					<ul>

						<li>
							Sold out : <b style="font-size: 18px;color:red"><?php echo $row["SoLuongBan"]?></b>
						</li>
						<li>
							visited : 
							<b style="font-size: 18px;color:red">
								<?php 
									$soluocxem = $row["SoLuocXem"] + 1;
									echo $soluocxem;

									$query = 	"UPDATE SanPham 
												SET SoLuotXem = $soluocxem 
												WHERE MaSanPham = $id";
									DataProvider::ExecuteQuery($query);
								?>
							</b>
						</li>
						<li>
							Quantity: <b style="font-size: 18px;color:red"><?php echo $row["SoLuongTon"]?></b>
						</li>

					</ul>
				</div>
				
				<div class="occasion-cart" style="margin-top: 30px; margin-left:120px; margin-bottom:30px;">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
								<input type="hidden" name="amount" value="950.00" />
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>
				<div id="Infor-Product" style="margin-left:-300px">

					<div class="product-single-w3l">
						<span style="color: black;">
						<a href=""><img src="images/<?php echo $row["LogoURL"] ?>" style="width:40px; height:30px">
						<?php echo $row["TenHangSanXuat"]?></a>
						</span>
					</div>
					<div class="product-single-w3l">
						<p>
							<b style="padding-left: 300px; font-size:30px">Describers</b>
						<ul>
							<li>
								Category: <?php echo $row["TenLoaiSanPham"]?>
							</li>
							<li>
								Time Date: <?php echo $row["NgayNhap"]?>
							</li>
							<li>
								Describer details: 
								<ul>
								<li>
								<?php echo $row["MoTa"]?>
								</li>
								</ul>
								
							</li>
						</ul>
						</p>
					</div>
				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- special offers -->
	<div id="Special-offer" style="margin-left:-500px">
		<div class="featured-section" id="projects">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Special Offers
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<div class="content-bottom-in">
					<ul id="flexiselDemo1">
						<li>
							<div class="w3l-specilamk">
								<div class="speioffer-agile">
									<a href="single.html">
										<img src="<?php $public ?>images/s1.jpg" alt="">
									</a>
								</div>
								<div class="product-name-w3l">
									<h4>
										<a href="single.html">Aashirvaad, 5g</a>
									</h4>
									<div class="w3l-pricehkj">
										<h6>$220.00</h6>
										<p>Save $40.00</p>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
												<input type="hidden" name="amount" value="220.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- //special offers -->

	</div>