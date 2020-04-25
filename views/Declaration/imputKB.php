<?php
require_once "../../core/functions/helper.php";
require_once "../../mysqli.php";
require_once "../../core/functions/auth.php";
const FILE_PATH_BHYT = "../../uploads/BHYT/";
const FILE_PATH_ID = "../../uploads/id/";
if(isset($_POST['submit'])){
    $go = $_POST['go'];
    $sot = $_POST['sot'];
    $ho = $_POST['ho'];
    $khotho = $_POST['khotho'];
    $viemphoi = $_POST['viemphoi'];
    $dauhong = $_POST['dauhong'];
    $nghingo = $_POST['nghingo'];
    $nuocngoai = $_POST['nuocngoai'];
    $bieuhien = $_POST['bieuhien'];
    $id = $_SESSION['login_id'];
    if(($sot+$ho+$khotho+$viemphoi+$dauhong)==10){
        $trieuchung="false";
    }else{
        $trieuchung="true";
    }
    if(($nghingo+$nuocngoai+$bieuhien)==6){
        $go=strtoupper($go);
        if(strtoupper($go)==strtoupper("không")){
            $dichte="false";
        }else{
            $dichte="true";
        }
    }else{
        $dichte="true";
    }
    $query = 'UPDATE users SET dich_te = "'.$dichte.'", trieu_chung = "'.$trieuchung.'", declaration = "true" WHERE (id = '.$id.')';
    $connection->query($query);
    $_SESSION['declaration'] = "true";
    header('Location: /home');
}
?>