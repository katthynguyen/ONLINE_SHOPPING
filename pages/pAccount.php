<?php
if (isset($_SESSION["MaTaiKhoan"]) == false)
	DataProvider::ChangeURL("index.php");
$user_id = $_SESSION["MaTaiKhoan"];
$query = "	SELECT TenHienThi, DienThoai, DiaChi, Email, MatKhau, TenDangNhap
			FROM TaiKhoan  
			WHERE MaTaiKhoan = $user_id";
$account = DataProvider::ExecuteQuery($query);
$row = mysqli_fetch_assoc($account);
if ($row == null)
	DataProvider::ChangeURL("index.php");
?>
<div class="account">
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">

		<!-- tittle heading -->
		<h3 class="tittle-w3l">Account</h3>

		<!-- //tittle heading -->

		<div id="containerProduct" style="margin-left: 10px; margin-top:-850px">
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2" style="margin-left: 250px; margin-right:-400px;">
					<div class="flexslider">
						<ul class="slides">
							<div class="thumb-image">
								<img src="images/2.jpg" data-imagezoom="true" class="img-responsive" alt="" style="width:400px; height:300px;">
							</div>
						</ul>
						</br>

						<form>
							<div class="form-group">
								<label for="exampleFormControlFile1">Upload Profile image</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</form>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				</hr>

				<h3 style="margin-left: 400px; margin-right:-150px"><?php echo $row["TenDangNhap"] ?></h3>
				<div class="rating1" style="margin-left: 400px; margin-right:-150px">
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
				</br>
				<div id="mota" style="margin-left: 100px;">

					<div class="product-single-w3l" style="text-align: center;font-size:35px; ">
						</br>
						<a>Informations Account</a>
					</div>
					</br>
					</br>
					<div class="product-single-w3l">

						<form style="margin-top:50px;">
							<div class="form-group">
								<label for="displayname">Displayname </label>
								<input class="form-control" type="text" name="displayname" id="displayname" placeholder="displayname" value="<?php echo $row["TenHienThi"] ?>">
							</div>
							<div class="form-group">
								<label for="phone">Phone Numbers</label>
								<input class="form-control" type="text" name="phone" id="phone" placeholder="your phone numbers" value="<?php echo $row["DienThoai"] ?>">
							</div>
							<div class="form-group">
								<label for="address">
									<Address>Address</Address>
								</label>
								<input class="form-control" type="text" name="address" id="address" placeholder="your address" value="<?php echo  $row["DiaChi"] ?>">
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $row["Email"] ?>">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $row["MatKhau"] ?>">
							</div>


							<div class="container bg-light">
								<div class="col-md-4 text-center">
									<input type="submit" class="btn btn-primary" value="edit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>