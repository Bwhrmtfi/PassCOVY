<?php 
require_once "../core/functions/auth.php";
if(isset($_POST["checkRegistration"])){
    $tb="";
    if($_SESSION["declaration"]=="false"){
        $tb="Bạn cần khai báo y tế trước khi đăng ký khám bệnh";
    }else if($_SESSION["registration"]=="true"){
        $tb="Bạn đã đăng ký khám bệnh rồi";
    }else{
        $tb="true";
    } 
    echo $tb;
}
?>