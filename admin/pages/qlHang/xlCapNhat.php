<?php
	include("../../../code/DataProvider.php");
	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
		$ten = $_GET["txtTen"];
		
		$sql = "UPDATE HangSanXuat SET TenHangSanXuat = '$ten' WHERE MaHangSanXuat = $id";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=2');
?>