<h1>Quản lý tài khoản</h1>
<?php
	if(isset($_GET['sub']) == false)
		$sub = 1;
	else
		$sub = $_GET['sub'];
	
	switch($sub)
	{
		case 1: //Liệt kê danh sách
			include('pages/qlTaiKhoan/pDanhSach.php');
			break;
		case 2: //Xử lý xóa
			include('pages/qlTaiKhoan/xlXoa.php');
			break;
	}
?>