<?php
include "../db/DB.php";
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password1"])){
  
    if(!empty(trim($_POST["username"])) && !empty(trim($_POST["password"])) 
    && !empty(trim($_POST["password1"]))){

        $username = $_POST["username"];
        $password = $_POST["password"];
        $password1 = $_POST["password1"];

        // kiểm tra mật khẩu trùng khớp
        if($password === $password1){
            $password = md5($password);
            $query = "UPDATE TaiKhoan
                      SET MatKhau = '$password'
                      WHERE TenDangNhap = '$username'";
            $result = DataProvider::ExecuteQuery($query);
            if($result){
                echo "Cập nhật thành công";
                DataProvider::ChangeURL("../index.php?act=Account");
            }
            else{
                echo "cập nhật mật khẩu không thành công";
                DataProvider::ChangeURL("index.php?act=ChangePassword");
            }

        }else{
            echo "lỗi mật khẩu xác nhận";
            DataProvider::ChangeURL("index.php?act=ChangePassword");
        }
        
    } 
}
?>