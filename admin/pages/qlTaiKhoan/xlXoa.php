<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "SELECT BiXoa FROM TaiKhoan WHERE MaTaiKhoan = $id";
		$bang = DataProvider::ExecuteQuery($sql);
		$dong = mysqli_fetch_array($bang);
		$bixoa = $dong['BiXoa'];
		if($bixoa == 0)
			$bixoa = 1;
		else
			$bixoa = 0;
		$sql = "UPDATE TaiKhoan SET BiXoa = $bixoa WHERE MaTaiKhoan = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL('index.php');
?>