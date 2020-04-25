<!DOCTYPE html>
<html lang="">
<?php include(__DIR__.'/../static_header.php'); ?>
<script>
    var loadingImg = "<img class='loading-img' src = 'assets/images/loading.gif' ?>";
</script>

<body id="page-top">
    <?php
    include(__DIR__.'/../nav.php');
    ?>
    <div class="main">
        <div class="container" style="height: 550px">
            <h2>Sổ khám bệnh</h2>
            <div id="note">
                <div  class="form-row"style="margin-top: 10px">
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 100px;float: left; width:150px">
                            <h3 id="title">Viêm phế quản </h3> 
                        </div>
                        <div style="float: left; width:70%">
                            <p id="date">22/04/2020</p>
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 100px;float: left; width:150px">
                            <h3>Chuẩn đoán: </h3> 
                        </div>
                        <div style="float: left; width:65%">
                            <h6 >Viêm phế quản dạng hen. Mề đay mãn tính vô căn. Thiếu Protein Calo mãn</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 100px;float: left; width:150px">
                            <h3>Lời khuyên: </h3> 
                        </div>
                        <div style="float: left; width:65%">
                            <h6 >Uống thuốc theo toa -  Tránh ăn thực phẩm lạ - Tránh ngủ nơi ẩm, lạnh.</h6>
                        </div>
                    </div>
                    
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 100px;float: left; width:150px">
                            <h3>Toa thuốc: </h3> 
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 140px;float: left; width:500px">
                            <h3>1. Claritek(Clarithromycin), 500mg Viên--Uống </h3> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số lượng: 14 viên</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration" style="margin-top: -10px; height: 27px;">
                        <div style="margin-left: 160px;float: left; width:300px">
                            <h6>Sáng: 1 viên - Chiều: 1 viên </h6> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số ngày: 7</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 140px;float: left; width:500px">
                            <h3>2. Telfast(Fexofenadine), 60mg Viên--Uống </h3> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số lượng: 14 viên</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration" style="margin-top: -10px; height: 27px;">
                        <div style="margin-left: 160px;float: left; width:300px">
                            <h6>Sáng: 1 viên - Chiều: 1 viên </h6> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số ngày: 7</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 140px;float: left; width:500px">
                            <h3>3. Acemuc, 200mg Gói--Uống </h3> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số lượng: 14 gói</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration" style="margin-top: -10px; height: 27px;">
                        <div style="margin-left: 160px;float: left; width:300px">
                            <h6>Sáng: 1 gói - Chiều: 1 gói </h6> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số ngày: 7</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div style="margin-left: 140px;float: left; width:500px">
                            <h3>4. Terpin, Viên--Uống </h3> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số lượng: 21 gói</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration" style="margin-top: -10px;height: 27px;">
                        <div style="margin-left: 160px;float: left; width:300px">
                            <h6>Sáng: 1 viên - Trưa: 1 viên - Chiều: 1 viên </h6> 
                        </div>
                        <div style="float: right; width:30%">
                            <h6 style="float: left;">Số ngày: 7</h6>
                        </div>
                    </div>
                    <div class="form-group-flex-registration">
                        <div class="form-group2">
                            <button type="button" id="quaylai" class="btn btn-sumit" style="margin-left: 40%">quay lại sổ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="notes">
                <div class="form-row"style="margin-top: 20px">
                    <div class="form-group-flex-registration">
                        <div class="form-group2">
                            <button type="button" id="tracuu1" class="btn btn-sumit inputInfo" ><b style="font-size: 20px">Khám thần kinh</b><p>26/03/2020</p></button>
                            <button type="button" id="tracuu2" class="btn btn-sumit inputInfoR" ><b style="font-size: 20px">Viêm phế quản</b><p>22/04/2020</p></button>
                        </div>                
                    </div>
                    <div class="form-group-flex-registration" style="margin-top: 40px">
                        <div class="form-group2">
                            <button type="button" id="tracuu3" class="btn btn-sumit inputInfo" ><b style="font-size: 20px">Khám mắt</b><p>26/12/2019</p></button>
                            <button type="button" id="tracuu4" class="btn btn-sumit inputInfoR" ><b style="font-size: 20px">Viêm phế quản</b><p>22/04/2019</p></button>
                        </div>                
                    </div>
                    <div class="form-group-flex-registration" style="margin-top: 40px">
                        <div class="form-group2">
                            <button type="button" id="tracuu5" class="btn btn-sumit inputInfo" ><b style="font-size: 20px">Khám phổi</b><p>26/03/2019</p></button>
                            <button type="button" id="tracuu6" class="btn btn-sumit inputInfoR" ><b style="font-size: 20px">Khám họng</b><p>22/04/2018</p></button>
                        </div>                
                    </div>
                </div>
            </div>
        </div>  
    </div>
</body>

</html>

<script>
document.getElementById("infor").className += " active";
$("#tracuu1").click(function(){
    clickTracuu();
    $("#title").text("Khám thần kinh");
    $("#date").text("26/03/2020");
});
$("#tracuu2").click(function(){
    clickTracuu();
    $("#title").text("Viêm phế quản");
    $("#date").text("22/04/2020");
});
$("#tracuu3").click(function(){
    clickTracuu();
    $("#title").text("Khám mắt");
    $("#date").text("26/12/2019");
});
$("#tracuu4").click(function(){
    clickTracuu();
    $("#title").text("Viêm phế quản");
    $("#date").text("22/04/2019");
});
$("#tracuu5").click(function(){
    clickTracuu();
    $("#title").text("Khám phổi");
    $("#date").text("26/03/2019");
});
$("#tracuu6").click(function(){
    clickTracuu();
    $("#title").text("Khám họng");
    $("#date").text("22/04/2018");
});
$("#quaylai").click(function(){
    document.getElementById("note").style.display = "none";
    document.getElementById("notes").style.display = "block";
});
function clickTracuu(){
    document.getElementById("note").style.display = "block";
    document.getElementById("notes").style.display = "none";
}

</script>
