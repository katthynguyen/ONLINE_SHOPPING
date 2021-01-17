<?php
session_start();
include "../db/DB.php";

if(isset($_GET["Number"]) == true)
{
    $number= $_GET["Number"];
    $position = $_GET["Position"];

    if(is_numeric($number) == true){
        if($number == 0){
            //xóa sản phảm
            array_splice($_SESSION['IdProduct'],$position,1);
            array_splice($_SESSION['Number'], $position,1);
        }
        else{
            if($number > 0){
                $_SESSION['Number'][$position] = $number;
            }
            else{
                echo "lỗi number > 0";
            }
        }
    }
    else{
        echo "lỗi number, position";
    }
}
DataProvider::ChangeURL("../index.php?act=Checkout");
?>