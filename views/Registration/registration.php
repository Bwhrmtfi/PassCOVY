<!DOCTYPE html>
<html lang="">
<?php 
require_once __DIR__."/../../mysqli.php";
include(__DIR__.'/../static_header.php'); 
?>

<script>
    var loadingImg = "<img class='loading-img' src = 'assets/images/loading.gif' ?>";
</script>

<body id="page-top">
    <?php
    include(__DIR__.'/../nav.php');
    ?>
    <div class="main">
        <div class="container">
            <h2>Đăng ký khám bệnh</h2>
            <form method="POST" id="registration" class="signup-form" enctype="multipart/form-data" action="views/Registration/imputKB.php">
                <h3 class="titleName">
                    Đăng ký khám bệnh cho tài khoản: <span class="titleSpan"><?php echo $data["name"] ?></span>
                </h3>
                <div class="form-row"style="margin-top: 10px">
                    <div class="form-group-flex-registration">
                        <div class="inputTitle">
                            <h3 class="titleName">
                                Đăng ký chuyên khoa khám bệnh:
                            </h3>
                        </div>
                        <select id="faculty" name="faculty" class="inputInfoS2 custom-select custom-select-lg mb-3" required>
                            <option value="">Chọn Khoa bạn muốn đăng ký khám</option>
                            <option value="Thần kinh">Thần kinh</option>
                            <option value="Tai mũi họng">Tai mũi họng</option>
                            <option value="Tim mạch">Tim mạch</option>
                            <option value="Khoa tiêu hóa">Khoa tiêu hóa</option>
                            <option value="Sản phụ khoa">Sản phụ khoa</option>
                            <option value="Phổi">Phổi</option>
                            <option value="Da Liễu dị ứng">Da Liễu dị ứng</option>
                            <option value="Nhi">Nhi</option>
                            <option value="Mắt">Mắt</option>
                        </select>
                    </div>
                    <div class="form-group-flex-registration">
                        <div class="inputTitle">
                            <h3 class="titleName">
                                Nếu bạn không biết mình cần khám ở khoa nào:
                            </h3>
                            <button type="button" class="btn btn-tv">Nhận tư vấn</button>
                        </div>
                        
                    </div>
                    <div class="form-group-flex-registration">
                        <div class="inputTitle">
                            <h3 class="titleName">
                                Đăng ký lịch khám:
                            </h3>
                        </div>
                        <select id="date" name="date" class="inputdate custom-select custom-select-lg mb-3" required>
                            <option value="">Chọn ngày</option>
                            <?php
                                $nextweek  = mktime(0, 0, 0, date("m")  , date("d")+7, date("Y")); 
                                $t2=intval(date("d",$nextweek));
                                $t=intval(date("d",time()));
                                $m=intval(date("m",time()));
                                $m2=intval(date("m",$nextweek));
                                if($m2!=$m){
                                    for($i=$t; $i<=$t+7-$t2; $i++){
                                        echo '<option value="Ngày '.$i.' Tháng '.$m.'">Ngày '.$i.' Tháng '.$m.'</option>';
                                    }
                                    for($i=1; $i<=$t2; $i++){
                                        echo '<option value="Ngày '.$i.' Tháng '.$m.'">Ngày '.$i.' Tháng '.$m2.'</option>';
                                    }
                                }
                            ?>
                        </select>
                        <select id="year" name="year" class="inputyear custom-select custom-select-lg mb-3">
                            <option value="">Năm 2020</option>
                        </select>
                        <select id="time" name="time" class="inputtime custom-select custom-select-lg mb-3" required>
                            <option value="">Chọn khung giờ</option>
                        </select>
                    </div>
                </div>
                <div class="containerbtn">
                    <div class="center">
                    <button type="submit" name="submit" class="btn btn-sumit">Đăng ký</button>
                    </div>
                </div>
            </form>
        
        </div>

    </div>

</body>

</html>

<script>
document.getElementById("registration").className += " active";
$('#date').on('change', function(){
        var date = $(this).val();
        var faculty = $("#faculty").val();
        if(date){
            $.ajax({
                type: 'POST',
                url: 'views/Registration/ajaxData.php',
                data: {
                    "checkTime": true,
                    "date" : date,
                    "faculty": faculty,
                },
                success:function(res){
                    $('#time').html(res);
                    console.log(res);
                }
            }); 
        }
    });
$('#faculty').on('change', function(){
    var date = $("#date").val();
    var faculty = $(this).val();
    if(date){
        $.ajax({
            type: 'POST',
            url: 'views/Registration/ajaxData.php',
            data: {
                "checkTime": true,
                "date" : date,
                "faculty": faculty,
            },
            success:function(res){
                $('#time').html(res);
                console.log(res);
            }
        }); 
    }
});
</script>
