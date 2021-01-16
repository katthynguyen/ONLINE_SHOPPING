<?php
    session_start();
    include("../db/DB.php");

    if(isset($_GET["id"]) == false)
        DataProvider::ChangeURL("../index.php?act=Login&id=3");

    $id = $_GET["id"];

    // chưa có tài khoản và giỏ hàng
    if(isset($_SESSION["IdProduct"])==false || count($_SESSION["IdProduct"]) == 0)
    {
        $_SESSION["IdProduct"][]=$id;
        $_SESSION["Number"][] = 1;
    }
    else{
        // Đã có giỏ hàng
        // kiểm tra giỏ hàng có tồn tại sản phẩm co mã là $id chưa?
        for ($i=0; $i < count($_SESSION["IdProduct"]); $i++) { 
            if($_SESSION["IdProduct"][$i] == $id )
                break;                                                                                                    
        }

        // trong giỏ hàng đã tồn tại sản phẩm có mã là $id--> tăng số lượng sản phẩm 
        if($i < count($_SESSION["IdProduct"])){
            $_SESSION["Number"][$i] +=1;
        }else{
            // trong giỏ hàng chưa có sanrphaamr có mã là $id
            $_SESSION["IdProduct"][] = $id;
            $_SESSION["Number"][] = 1;
        }
        DataProvider::ChangeURL("../index.php?act=Checkout");
        
    }
?>