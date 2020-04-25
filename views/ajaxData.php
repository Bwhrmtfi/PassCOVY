<?php 
require_once "../core/functions/auth.php";
if(isset($_POST["checkRegistration"])){
    $tb="";
    if(!isAuth()){
        $tb="Bạn chưa đăng nhập";
    }else if($_SESSION["declaration"]=="false"){
        $tb="Bạn cần khai báo y tế trước khi đăng ký khám bệnh";
    }else if($_SESSION["registration"]=="true"){
        $tb="Bạn đã đăng ký khám bệnh rồi";
    }else{
        $tb="true";
    } 
    echo $tb;
}
if(isset($_POST["checkForm"])){
    $tb="";
    if($_SESSION["registration"]=="false"){
        $tb="Bạn Chưa đăng ký khám bệnh";
    }else{
        $tb="true";
    } 
    // header('Location: /registration');
    echo $tb;
}
?>