<?php
	if(isset($_GET['id']) == false)
		DataProvider::ChangeURL('index.php?act=3');
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
	$bang = DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($bang);
?>
<form action="pages/qlLoaiSanPham/xlCapNhat.php" method="get">
	<fieldset>
    	<legend>Thông tin loại sản phẩm</legend>
        Tên loại sản phẩm:
        <input type="text" name="txtTen" value="<?php echo $dong["TenLoaiSanPham"]; ?>" />
        <input type="hidden" name="id" value="<?php echo $id;?>" />
       <input type="submit" value="Cập nhật" />
       <input type="button" value="Hủy" onClick="location = 'index.php?act=3';" />
    </fieldset>
</form>