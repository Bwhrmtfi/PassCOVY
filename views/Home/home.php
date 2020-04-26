<!DOCTYPE html>
<html lang="">
<?php
 include(__DIR__.'/../static_header.php'); 
?>
<script>
    var loadingImg = "<img class='loading-img' src = 'assets/images/loading.gif' ?>";
</script>

<body id="page-top">
    <?php
    include(__DIR__.'/../nav.php');
    ?>
    <div style="width:100%; background-color:#fff">
        <div class="mau-trang">
            <h1 class="text-k">KHÔNG SỢ</h1>
            <h1 class="text-kham">KHÁM</h1>
            <h1 class="text-m">Mùa COVID</h1>
        </div>
        <div class="mau-den">
            <button id="d" class="btn btn-outline-success text-l">Đặt lịch</button>
            <h1 class="text-at">NHANH</h1>
            <h1 class="text-n">AN TOÀN</h1>
            <h1 class="text-p">Phân luồng</h1>
            <img src="assets/images/tachnen.png" alt="" class="img-home">
        </div>
    </div>
    <button id="u" class="btn btn-danger text-d">Sử dụng ngay</button>
    <div style="width:100%; text-align: center;     position: absolute;margin-top: 50px;">
        <h3 class="pass">Pass COVY là website cho phép người dùng có thể đăng ký và làm các thủ tục khám bệnh online, giúp bệnh viện phân luồng người bệnh để giảm thiêu nguy cơ lây lan COVID-19.</h3>
    </div>
    <div class="home2">
         <img src="assets/images/vong.png" alt="" class="img-vong">
            <h3 class="text-cac">Quy trình đăng ký khám bệnh qua website</h3>
         <img src="assets/images/cacbuoc.png" alt="" class="img-cac">
    </div>

</body>

</html>
<script>
    document.getElementById("home").className += " active";
    window.onload = function(){
        if(sessionStorage.getItem("form")=="true"){
            window.open("/form", "_blank");
            sessionStorage.setItem("form", "false"); 
        }
    }
    $("#d").click(function(){
        window.location="/registration";
    });
    $("#u").click(function(){
        window.location="/registration";
    });
    
</script>