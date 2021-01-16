<?php
	session_start();
	include("../code/DataProvider.php");
	
	//Kiểm tra có đăng nhập với quyền Admin chưa?
	if(isset($_SESSION["MaTaiKhoan"]) != true)
		DataProvider::ChangeURL('login.php');
	if($_SESSION["MaLoaiTaiKhoan"] != 2)
		DataProvider::ChangeURL('login.php?error=3');
		
	//Đã đăng nhập thành công với quyền Admin rồi

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Quản lý hệ thống</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<div id="container">
    	<div id="banner">
    		<?php include("inc/incBanner.php"); ?>
        </div>
        <ul id="menu">
        	<?php 
			if(isset($_REQUEST["act"]) == true)
				$act = $_REQUEST["act"];
			else
				$act = 1;
			include("inc/incMenu.php"); 
			?>
        </ul>
        <div id="content">
        	<?php
				if(isset($_GET['act']) == false)
					$act = 1;
				else
					$act = $_GET['act'];
				
				switch($act)
				{
					case 1: //QL Tai Khoan
						include('pages/qlTaiKhoan/pIndex.php');
						break;	
					case 2: //QL Hang
						include('pages/qlHang/pIndex.php');
						break;
					case 3: //QL LoaiSanPham
							include('pages/qlLoaiSanPham/pIndex.php');
						break;
				}
			?>
        </div>
        <div id="footer">
        	<?php include("inc/incFooter.php"); ?>
        </div>
    </div>
</body>
</html>