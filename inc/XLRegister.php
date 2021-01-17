<?php
    include "../db/DB.php";
    $username = "";
    $displayname = "";
    $password = "";
    $password1="";
    $address = "";
    $phone="";
    $email="";
  
    // kiểm tra thông tin đầy đủ các trường 
        if( isset($_POST["username"]) 
        && isset($_POST["displayname"]) 
        && isset($_POST["email"])    
        && isset($_POST["password"]) 
        && isset($_POST["password1"]) 
        && isset($_POST["address"])
        && isset($_POST["phone"]))
        {                 
                $username=$_POST['username'];
                $displayname=$_POST['displayname'];
                $address = $_POST['address'];
                $email=$_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];    
                $password1 = $_POST['password1'];
             
            // cắt bỏ khoảng trắng trong chuỗi  và kiểm tra chuỗi rỗng
            if(!empty(trim($username)) 
            && !empty(trim($email)) 
            && !empty(trim($phone))
            && !empty($displayname)
            && !empty($password)
            && !empty($password1)
            && !empty($address))           
            {   
                
                // kiểm tra email đã tồn tại 
                $query =   "SELECT Email
                            FROM TaiKhoan 
                            WHERE BiXoa = 0" ;                            
                $account1 = DataProvider::ExecuteQuery($query); 
                
                static $checkemail = null;
                while( $row = mysqli_fetch_array($account1))
                {
                   if($row["Email"] == $email)
                   {                   
                       $checkemail = 1;                   
                   }else
                   {                    
                       $checkemail = 0;               
                   }                    
                }
                
                //kiểm tra email thành công == 0
                if($checkemail ==0)
                {       
                    if($password === $password1)
                    {
                        $password = md5($password1);
                        $input= "INSERT INTO taikhoan (TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email)
                                 VALUES ('$username', '$password', '$displayname', '$address', '$phone', '$email')";
                        $kq = DataProvider::ExecuteQuery($input);   

                        if ($kq) 
                        {             
                            // echo "Đăng ký thành công ";                                    
                            DataProvider::ChangeURL("../index.php?act=sRegister");
                        }
                        else
                        {
                            echo "Đăng ký thất bai.";
                            DataProvider::ChangeURL("../index.php?act=Register");
                        }   
                    }else{
                        echo "lỗi password";
                        DataProvider::ChangeURL("../index.php?act=Register");
                    }                    
                
                }else{
                    echo "lỗi email";
                    DataProvider::ChangeURL("../index.php?act=Register");
                }                
            }  
            else{
                echo "lỗi kt";
                DataProvider::ChangeURL("../index.php?act=Register");
            } 
        }
        else{
            DataProvider::ChangeURL("../index.php?act=Register");
        }
?>