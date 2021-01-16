<div style='margin:auto;width:250px;text-align:left;'>
    <a href="index.php?act=2&sub=4">
        <img src="img/Folder-New-icon.png" width="35" />
    </a>
</div>
<table>
	<tr>
    	<th width="50">Mã hãng</th>
        <th width="50">Tên hãng</th>
        <th width="50">Tình trạng</th>
        <th width="100">Thao tác</th>
    </tr>
    <?php
		$sql = "SELECT * FROM HangSanXuat";
		$bang = DataProvider::ExecuteQuery($sql);
		while($row = mysqli_fetch_array($bang))
		{
			?>
            	<tr>
                   	<td>
                    	<?php echo $row["MaHangSanXuat"]; ?>
                    </td>
                    <td>
                    	<?php echo $row["TenHangSanXuat"]; ?>
                    </td>
                    <td>
                    	<?php
							if($row["BiXoa"] == 1)
								echo "Bị xóa";
							else
								echo "Hoạt động";
						?>
                    </td>
                    <td>
                        <a href="index.php?act=2&sub=2&id=<?php echo $row["MaHangSanXuat"]; ?>">
                        	<?php
								if($row["BiXoa"] == 0)
									echo '<img src="img/icontexto-webdev-cancel-048x048.png" width="16" />';
								else
									echo '<img src="img/icontexto-webdev-ok-048x048.png" width="16" />';		
							?>     
                        </a>
                        <a href="index.php?act=2&sub=3&id=<?php echo $row['MaHangSanXuat'];?>">
                            <img src="img/edit-icon.png" width="16">
                        </a>
                    </td>
               	</tr>
            <?php
		}
	?>	
</table>