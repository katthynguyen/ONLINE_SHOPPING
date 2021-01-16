<?php
	session_start();
	include("../../code/DataProvider.php");
	if(isset($_POST["txtUS"]) == true && isset($_POST["txtPS"]) == true)
	{
		$us = $_POST["txtUS"];
		$ps = $_POST["txtPS"];
		
		$sql = "SELECT * FROM TaiKhoan WHERE TenDangNhap = '$us' AND MatKhau = '$ps' AND BiXoa = 0";
		$bang = DataProvider::ExecuteQuery($sql);
		$dong = mysql_fetch_array($bang);
		
		//Kiem tra tai khoan co ton tai khong?
		if($dong != null)
		{
			$_SESSION["MaTaiKhoan"]	= $dong["MaTaiKhoan"];	
			$_SESSION["TenHienThi"] = $dong["TenHienThi"];
			$_SESSION["MaLoaiTaiKhoan"] = $dong["MaLoaiTaiKhoan"];
		DataProvider::ChangeURL("../index.php");
		}
		else
			DataProvider::ChangeURL("../login.php?error=1");
	}
	else
		DataProvider::ChangeURL("../login.php?error=1");
?>