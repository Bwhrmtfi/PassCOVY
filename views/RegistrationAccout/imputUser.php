<?php
require_once "../../core/functions/helper.php";
require_once "../../mysqli.php";
const FILE_PATH_BHYT = "../../uploads/BHYT/";
const FILE_PATH_ID = "../../uploads/id/";
if(isset($_POST['submit'])){
    $submit = $_POST['submit'];
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
    $rePassword = $_POST['retype_password'];
    $userName = $_POST['name'];
    $phone = $_POST['phone'];
    $proId = $_POST['pro'];
    $holId = $_POST['hol'];
    $imgId = $_FILES['id_picture']['name'];
    $imgBH = $_FILES['BHYT_picture']['name'];
    $idImgfor = "id/".$email."/".$imgId;
    $BHYTImgfor = "BHYT/".$email."/".$imgBH;
    mkdir( FILE_PATH_BHYT . $email);
    mkdir( FILE_PATH_ID . $email);
    upfile($_FILES['id_picture'],$idImgfor);
    upfile($_FILES['BHYT_picture'],$BHYTImgfor);
    //`user_name`, `email`, `password`, `phone`, `cmnd`, `bhyt`
    $query = 'INSERT INTO users (user_name, email, password, phone,cmnd,bhyt) VALUES (?, ?, ?,?,?,?)';
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssssss", $userName, $email,$password,$phone,$imgId,$imgBH); 
    $stmt->execute();
}
?>