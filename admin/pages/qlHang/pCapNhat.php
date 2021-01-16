<?php
	if(isset($_GET['id']) == false)
		DataProvider::ChangeURL('index.php?act=2');
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM HangSanXuat WHERE MaHangSanXuat = $id";
	$bang = DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($bang);
?>
<form action="pages/qlHang/xlCapNhat.php" method="get">
	<fieldset>
    	<legend>Thông tin hãng sản xuất</legend>
        Tên hãng sản xuất:
        <input type="text" name="txtTen" value="<?php echo $dong["TenHangSanXuat"]; ?>" />
        <input type="hidden" name="id" value="<?php echo $id;?>" />
       <input type="submit" value="Cập nhật" />
       <input type="button" value="Hủy" onClick="location = 'index.php?act=2';" />
    </fieldset>
</form>