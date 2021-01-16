<?php
	include("../../../code/DataProvider.php");
	if(isset($_GET["txtTen"]) == true)
	{
		$ten = $_GET["txtTen"];
		
		$sql = "INSERT INTO HangSanXuat(TenHangSanXuat) VALUES('$ten')";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=2');
?>