<!DOCTYPE html>
<html lang="">
<?php include(__DIR__.'/../static_header.php'); ?>
<?php
    require_once __DIR__."/../../mysqli.php";
    require_once __DIR__."/../../core/functions/auth.php";

    $query = 'SELECT user_name,time,dich_te,trieu_chung,cmnd,bhyt,registration.id,email, date,stt FROM registration,users WHERE users.id=users_id AND users_id = '.$_SESSION["login_id"]; 
    $result = $connection->query($query); 
    // Generate HTML of state options list 
    if($result->num_rows > 0){
        $result = $result->fetch_assoc();
    }
?>
<script>
    var loadingImg = "<img class='loading-img' src = 'assets/images/loading.gif' ?>";
</script>
    <div class="form">
            <h2 style="font-size: 30px">Phiếu đăng ký khám bệnh</h2>
            <div class="form-group-flex-registration2">
                <div class="formTitle">
                    <h3 class="titleName text-form" style="margin-top: 50px;">
                        <?php
                        echo $result["user_name"];
                        ?>
                    </h3>
                </div>
                <div class="formTitle">
                    <h3 class="titleName text-form" style="margin-top: 35px;">
                        <?php
                        echo $result["time"]."<br/>".$result["date"];
                        ?>
                    </h3>
                </div>
                <div class="formTitle">
                    <h3 class="titleName text-form">
                        Số thứ tự:
                        <h1>
                        <?php
                        echo $result["stt"];
                        ?>
                        </h1> 
                    </h3>
                </div>
                <div class="formTitle">
                    <h3 class="titleName text-form">
                        Mã phiếu: 
                        <h1>
                        <?php
                        echo $result["id"];
                        ?>
                        </h1>
                    </h3>
                </div>
            </div>
            <div  style="margin-top: 200px">
                <img src="
                <?php
                    echo "uploads/id/".$result["email"]."/".$result["cmnd"];
                ?>
                " alt="" class="image_form">
                <img src="
                <?php
                    echo "uploads/BHYT/".$result["email"]."/".$result["bhyt"];
                ?>
                " alt="" class="image_form_BHYT">
            </div>
            <div class="inputTitle" style="text-align: center; width: 100%; margin-top: 30px">
                <h3 class="titleName text-form" >
                    Sơ đồ hướng dẫn đường đi trong bệnh viên khi khám bệnh.
                </h3>
            </div>
            <div>
                <img src="
                <?php
                    if($result["trieu_chung"]=="true"){
                        echo "uploads/Map/benhvientest/trieuchung.png";
                    }else if($result["dich_te"]=="true"){
                        echo "uploads/Map/benhvientest/dichte.png";
                    }else{
                        echo "uploads/Map/benhvientest/bt.png";
                    }
                ?>
                " alt="" class="image_form_map">
            </div>
            
    </div>

</html>

<script>
document.getElementById("infor").className += " active";

</script>
