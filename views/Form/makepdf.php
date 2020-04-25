<?php
require_once 'vendor/autoload.php';

require_once __DIR__."/../../mysqli.php";
require_once __DIR__."/../../core/functions/auth.php";

$query = 'SELECT user_name,time,dich_te,trieu_chung,cmnd,bhyt,registration.id,email, date,stt,faculty FROM registration,users WHERE users.id=users_id AND users_id = '.$_SESSION["login_id"]; 
$result = $connection->query($query); 
// Generate HTML of state options list 
if($result->num_rows > 0){
    $result = $result->fetch_assoc();
}
if($result["trieu_chung"]=="true"){
    $map= "uploads/Map/benhvientest/trieuchung.png";
    $khu="E";
    $car="Bải đổ xe thứ 2";
}else if($result["dich_te"]=="true"){
    $map= "uploads/Map/benhvientest/dichte.png";
    $khu="A8";
    $car="Bải đổ xe thứ 2";
}else{
    $map= "uploads/Map/benhvientest/bt.png";
    $khu="D";
    $car="Bải đổ xe thứ 1";
}
$romMap=["Thần kinh"=>1,"Tai mũi họng"=>2,"Tim mạch"=>3,"Khoa tiêu hóa"=>4,"Sản phụ khoa"=>5,"Phổi"=>6,"Da Liễu dị ứng"=>7,"Nhi"=>8,"Mắt"=>9];
$rom="Phòng ".$khu."-".$romMap[$result['faculty']];
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [200, 236]]);
$mpdf->WriteHTML('
<body style="background-color: rgb(231,255,250);">
    <h1 style="text-align: center;">Phiếu đăng ký khám bệnh</h1>
    <div style="width: 100%;">
        <div style="float: left; width: 27%; text-align: center;">
            <h3  style="margin-top: 20px">
            '.$result["user_name"].'
            </h3>
        </div>
        <div style="float: left; width: 30%; text-align: center;">
            <h3>
            '.$result["time"]."<br/>".$result["date"].'
            </h3>
        </div>
        <div style="float: right; width: 18%; text-align: center;">
            <h3>
            Số thứ tự:
                <h1   style="margin-top: -10px">
                '.$result["stt"].'
                </h1>
            </h3>
        </div>
        <div style="float: right; width: 22%; text-align: center;">
            <h3>
            Mã phiếu:
                <h1   style="margin-top: -10px">
                '.$result["id"].'
                </h1>
            </h3>
        </div>
        <div style="width: 100%;">
            <img src="uploads/id/'.$result["email"].'/'.$result["cmnd"].'" alt="" 
            style="  
                width: 300px;
                height: 190px;
                border-radius: 20px;
            "
            >
            
            <img src="uploads/BHYT/'.$result["email"].'/'.$result["bhyt"].'" alt="" 
            style="  
                border-radius: 20px;
                width: 300px;
                height: 190px;
                float: right;
            ">
        </div>
        <div style="text-align: center; width: 100%; margin-top: 30px">
        <h3>
            Sơ đồ hướng dẫn đường đi trong bệnh viên khi khám bệnh.
        </h3>
        <div>
            <img src="'.$map.'" alt="" 
            style="  
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            border-radius: 20px;">
        </div>
        <div style="float: right; width: 20%; text-align: left; margin-top: -100px;margin-right: 80px">
            <div>
                <h5>'.$car.'</h5>
            </div>
            <div style="margin-top: -30px;">
                <h5 >Khu '.$khu.'</h5>
            </div>
            <div style="margin-top: -35px;">
                <h5>'.$rom.'</h5>
            </div>
        </div>
    </div>
    </div>
</body>

');
$mpdf->Output();

?>

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