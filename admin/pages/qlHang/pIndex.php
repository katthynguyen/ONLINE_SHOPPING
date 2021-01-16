<h1>Quản lýhãng sản xuất</h1>
<?php
	if(isset($_GET['sub']) == false)
		$sub = 1;
	else
		$sub = $_GET['sub'];
	
	switch($sub)
	{
		case 1: //Liệt kê danh sách
			include('pages/qlHang/pDanhSach.php');
			break;
		case 2: //Xử lý xóa
			include('pages/qlHang/xlXoa.php');
			break;
		case 3: //Cập nhật
			include('pages/qlHang/pCapNhat.php');
			break;
		case 4: //Thêm mới
			include('pages/qlHang/pThem.php');
			break;
	}
?>