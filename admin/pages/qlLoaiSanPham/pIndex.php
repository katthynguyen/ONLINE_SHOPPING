<h1>Quản lý Loại sản phẩm</h1>
<?php
	if(isset($_GET['sub']) == false)
		$sub = 1;
	else
		$sub = $_GET['sub'];
	
	switch($sub)
	{
		case 1: //Liệt kê danh sách
			include('pages/qlLoaiSanPham/pDanhSach.php');
			break;
		case 2: //Xử lý xóa
			include('pages/qlLoaiSanPham/xlXoa.php');
			break;
		case 3: //Cập nhật
			include('pages/qlLoaiSanPham/pCapNhat.php');
			break;
		case 4: //Thêm mới
			include('pages/qlLoaiSanPham/pThem.php');
			break;
	}
?>