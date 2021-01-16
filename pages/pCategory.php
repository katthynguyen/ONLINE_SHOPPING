<?php
if (isset($_GET["id"]) == false)
	DataProvider::ChangeURL("index.php");

$id = $_GET["id"];
$sql = "SELECT * FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
$category = DataProvider::ExecuteQuery($query);
$row = mysqli_fetch_array($category);
if ($row == null)
	DataProvider::ChangeURL("index.php");
?>

<h3 style="text-align: center; font-size:50px">Categories
</h3>
</br>
</br>
<!-- //tittle heading -->
<!-- product right -->
<div class="agileinfo-ads-display col-md-9">
	<div class="wrapper">


		<!-- first section (nuts) -->
		<div class="product-sec1">
	
		<h3 class="heading-tittle" style="margin-bottom:auto; margin-top:auto">		
			All Products In 
		</h3>
	
			<?php
			$query = "	SELECT * 
						FROM SanPham 
						WHERE MaLoaiSanPham = $id
					 ";
			$product = DataProvider::ExecuteQuery($query);
			while ($row = mysqli_fetch_array($product)) {
				include('pages/pTempleProduct.php');
			} ?>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //first section (nuts) -->
</div>
</div>
<!-- //product right -->
</div>
</div>
<!-- //top products -->
<!-- special offers -->
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