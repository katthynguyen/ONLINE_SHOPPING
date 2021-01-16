<table>
	<tr>
    	<th width="50">Mã tài khoản</th>
        <th width="50">Loại tài khỏan</th>
        <th width="60">Tên đăng nhập</th>
        <th width="60">Mật khẩu</th>
        <th>Tên hiển thị</th>
        <th width="150">Địa chỉ</th>
        <th width="100">Điện thoại</th>
        <th width="150">Email</th>
        <th width="50">Tình trạng</th>
        <th width="100">Thao tác</th>
    </tr>
    <?php
		$sql = "SELECT t.*, l.TenLoaiTaiKhoan FROM TaiKhoan t, LoaiTaiKhoan l WHERE t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan";
		$bang = DataProvider::ExecuteQuery($sql);
		while($row = mysqli_fetch_array($bang))
		{
			?>
            	<tr>
                    <td><?php echo $row["MaTaiKhoan"]; ?></td>
                    <td><?php echo $row["TenLoaiTaiKhoan"]; ?></td>
                    <td><?php echo $row["TenDangNhap"]; ?></td>
                    <td><?php echo $row["MatKhau"]; ?></td>
                    <td><?php echo $row["TenHienThi"]; ?></td>
                    <td><?php echo $row["DiaChi"]; ?></td>
                    <td><?php echo $row["DienThoai"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td>
                    	<?php
							if($row["BiXoa"] == 1)
								echo "Bị xóa";
							else
								echo "Hoạt động";
						?>
                    </td>
                    <td>
                        <a href="index.php?act=1&sub=2&id=<?php echo $row["MaTaiKhoan"]; ?>">
                        	<?php
								if($row["BiXoa"] == 0)
									echo '<img src="img/icontexto-webdev-cancel-048x048.png" width="16" />';
								else
									echo '<img src="img/icontexto-webdev-ok-048x048.png" width="16" />';		
							?>     
                        </a>
                        <a href="#">
                            <img src="img/edit-icon.png" width="16">
                        </a>
                    </td>
               	</tr>
            <?php
		}
	?>	
</table>