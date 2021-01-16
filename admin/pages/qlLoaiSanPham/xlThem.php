<?php
	include("../../../code/DataProvider.php");
	if(isset($_GET["txtTen"]) == true)
	{
		$ten = $_GET["txtTen"];
		
		$sql = "INSERT INTO LoaiSanPham(TenLoaiSanPham) VALUES('$ten')";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=3');
?>