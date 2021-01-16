<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "SELECT BiXoa FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
		$bang = DataProvider::ExecuteQuery($sql);
		$dong = mysqli_fetch_array($bang);
		$bixoa = $dong['BiXoa'];
		if($bixoa == 0)
			$bixoa = 1;
		else
			$bixoa = 0;
		$sql = "UPDATE LoaiSanPham SET BiXoa = $bixoa WHERE MaLoaiSanPham = $id";
		DataProvider::ExecuteQuery($sql);
		
		if($bixoa = 1)
			$sql = "UPDATE SanPham SET BiXoa = 1 WHERE MaLoaiSanPham = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL('index.php?act=3');
?>