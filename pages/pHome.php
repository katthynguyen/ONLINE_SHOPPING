


<h3 style="text-align: center; font-size:50px;">Our Top Products
</h3>
</br>
<!-- //tittle heading -->
<!-- product right -->
<div class="agileinfo-ads-display col-md-9">
	<div class="wrapper">
		<!-- first section (nuts) -->
		<div class="product-sec1">
			<h3 class="heading-tittle">Top 10 Best Seller</h3>
			<?php
			$query = "  SELECT * 
						FROM SanPham
						ORDER BY NgayNhap DESC 
						limit 10";
			$Top10BestSeller = DataProvider::ExecuteQuery($query);
			while ($row = mysqli_fetch_array($Top10BestSeller)) {
				include('pages/pTempleProduct.php');
			}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //first section (nuts) -->
	<!-- second section (nuts special) -->
	<div class="product-sec1 product-sec2">
		<div class="col-xs-7 effect-bg">
			<h3 class="">Pure Energy</h3>
			<h6>Enjoy our all healthy Products</h6>
			<p>Get Extra 10% Off</p>
		</div>
		<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
		<div class="col-xs-5 bg-right-nut">
			<img src="<?php $public ?>images/nut1.png" alt="">
		</div>
		<div class="clearfix"></div>
	</div>

	<!-- //second section (nuts special) -->
	<!-- third section (oils) -->
	<div class="product-sec1">
		<h3 class="heading-tittle">Top 10 Lastest</h3>
		<?php
		$query = "SELECT *
                        FROM SanPham
                        ORDER BY SoLuongBan DESC 
                        limit 10";
		$Top10NewLatest = DataProvider::ExecuteQuery($query);
		while ($row = mysqli_fetch_array($Top10NewLatest)) {
			include('pages/pTempleProduct.php');
		} ?>
		<div class="clearfix"></div>
	</div>
	<!-- //third section (oils) -->
  
</div>
</div>
<!-- //product right -->
</div>
</div>
</div>
