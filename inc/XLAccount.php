<?php
include "../db/DB.php";

if(isset($_POST["Id"]) || isset($_POST["phone"]) || isset($_POST["displayname"])
&& isset($_POST["address"])){

    $userId = $_POST["Id"];
    $displayname = $_POST["displayname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if(!empty(trim($userId)) && !empty(trim($phone)) && !empty($displayname) && !empty($address)){

        $query = "UPDATE TaiKhoan 
                  SET TenHienThi = '$displayname' ,
                      DiaChi = '$address',
                      DienThoai = '$phone'
                  WHERE MaTaiKhoan = '$userId'";
        $update = DataProvider::ExecuteQuery($query);
        if($update){
            echo "Cập nhật thành công";
            DataProvider::ChangeURL("../index.php?act=Account");
        }
        else{
            echo "Cập nhật không thành công";
            echo $userId;
            echo $displayname;
            echo $phone;
            echo $address;
            // DataProvider::ChangeURL("../index.php?act=Account");
        }
    }else{
        echo "kt không thành công";
        //DataProvider::ChangeURL("../index.php?act=Account");
    }


}else{
    echo "loi dữ liệu";
}


?>