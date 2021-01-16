<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "SELECT BiXoa FROM HangSanXuat WHERE MaHangSanXuat = $id";
		$bang = DataProvider::ExecuteQuery($sql);
		$dong = mysqli_fetch_array($bang);
		$bixoa = $dong['BiXoa'];
		if($bixoa == 0)
			$bixoa = 1;
		else
			$bixoa = 0;
		$sql = "UPDATE HangSanXuat SET BiXoa = $bixoa WHERE MaHangSanXuat = $id";
		DataProvider::ExecuteQuery($sql);
		
		if($bixoa = 1)
			$sql = "UPDATE SanPham SET BiXoa = 1 WHERE MaHangSanXuat = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL('index.php?act=2');
?>