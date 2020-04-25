<?php 
require_once "../core/functions/auth.php";
if(isset($_POST["checkRegistration"])){
    $tb="";
    if(!isAuth()){
        $tb="login";
    }else if($_SESSION["declaration"]=="false"){
        $tb="khaibao";
    }else if($_SESSION["registration"]=="true"){
        $tb="dangkyroi";
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
