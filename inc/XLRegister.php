<?php
    include "../db/DB.php";

   // kiểm tra thông tin đầy đủ các trường 
    if( isset($_POST["username"]) && isset($_POST["displayname"]) 
     && isset($_POST["email"])    && isset($_POST["password"]) 
     && isset($_POST["password1"]))
    {            
        $username = $_POST["username"];
        $displayname=$_POST["displayname"];
        $address = $_POST["address"];
        $email=$_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];    
        $password1 = $_POST["password1"];
        
        // kiểm tra xác nhận password trùng khớp.
        if($password !== $password1){
            die('');
        }        
        // mã hóa password
        $hash_password = md5($password);
    
        // kiểm tra username tồn tại
        $query = "  SELECT * 
                    FROM TaiKhoan 
                    WHERE BiXoa = 0 
                    AND TenDangNhap = $username";
        $account = DataProvider::ExecuteQuery($query);
        $row = mysqli_fetch_array($account);    
        for ($i=0; $i < count($row); $i++) { 
            if($row[$i] != null){      
                echo "Đã Tồn tại username: " + ". $username ."  + "này";
                DataProvider::ChangeURL("../index.php?act=Register");
            }
        }
        // kiểm tra email đúng định dạng
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)) {
            return true; 
        }
        // kiểm tra email đã có tồ tại
        $query2 = " SELECT * 
                    FROM TaiKhoan 
                    WHERE BiXoa = 0 
                    AND Email = $email";
        $account2 = DataProvider::ExecuteQuery($query2);
        $row2 = mysqli_fetch_array($account2);    
        for ($i=0; $i < count($row2) ; $i++) { 
            if($row[$i] != null){
                echo "Đã tồn tại email: " + ". $email ." + "này";
                DataProvider::ChangeURL("../index.php?act=Register");
            }
        }
           
        echo 'begin';

                // $insert="INSERT INTO TaiKhoan(TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan)
                //          VALUES ('$username','$password', '$displayname ', '$address', '$phone', '$email', 0 , 1)";
                // $register = DataProvider::ExecuteQuery($insert);
                // if($register){
                //     echo "Register successfully";
                //     DataProvider::ChangeURL("../index.php?act=sRegister");
                // }else{
                //     echo "Register fail";
                //     DataProvider::ChangeURL("../index.php?act=Register");
                
                // }
                }  

?>