<?php
    session_start();
    include("../db/DB.php");
  
 
	if(isset($_POST["username"]) == true && isset($_POST["password"]) == true)
	{
		$us = $_POST["username"];
		$ps = $_POST["password"];
		
		$sql = "SELECT * FROM TaiKhoan 
				WHERE TenDangNhap = '$us' 
				AND MatKhau = '$ps' 
				AND BiXoa = 0";
		$bang = DataProvider::ExecuteQuery($sql);
		$dong = mysqli_fetch_array($bang);
		
		//Kiem tra tai khoan co ton tai khong?
		if($dong != null)
		{
			$_SESSION["MaTaiKhoan"]	= $dong["MaTaiKhoan"];	
			$_SESSION["TenHienThi"] = $dong["TenHienThi"];
            $_SESSION["MaLoaiTaiKhoan"] = $dong["MaLoaiTaiKhoan"];
			// DataProvider::ChangeURL($_SESSION["url"]);
			DataProvider::ChangeURL("../index.php?act=Index");
		}
		else
			DataProvider::ChangeURL("../index.php?act=pError&id=2");
	}
	else
		DataProvider::ChangeURL("../index.php?act=pError&id=1");
