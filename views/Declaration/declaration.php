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
        <div class="container">
            <h2>TỜ KHAI Y TẾ</h2>
            <form method="POST" id="registration-form" class="signup-form" enctype="multipart/form-data" action="views/Declaration/imputKB.php">
                <h3>
                    Thông tin cá nhân
                </h3>
                <div>
                    <div class="form-row"style="margin-top: 10px">
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                                <input type="text" class="inputInfo" name="name" id="name" placeholder="Họ và tên" value="họ và tên: <?php echo $_SESSION['name'] ?>" required/>
                                <input type="text" class="inputInfoR" name="CMND" id="CMND" placeholder="Số hộ chiếu / CMND / CCCD" required/>
                            </div>                
                        </div>
                        <div class="form-group-flex-registration form-group2" style="padding-bottom: 0px; margin-top: 10px;">
                            <select id="namsinh" name="namsinh" class="inputInfo31 custom-select custom-select-lg mb-3" required>
                                <option value="">Năm sinh</option>
                                <?php
                                    for($i=2020; $i>=1900; $i--){
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                            <select id="gioitinh" name="gioitinh" class="inputInfo32 custom-select custom-select-lg mb-3" required>
                                <option value="">Giới thính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                            <select id="quoctich" name="quoctich" class="inputInfo33 custom-select custom-select-lg mb-3" required>
                                <option value="">Quốc tịch</option>
                                <option value="1">Việt Nam</option>
                            </select>
                        </div>
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                                <input type="text" class="inputInfo21" name="BHYT" id="BHYT" placeholder="Số thẻ bảo hiểm y tế " required/>
                                <button type="button" id="tracuu" class="btn btn-sumit inputInfo22" >Tra cứu</button>
                            </div>                
                        </div>
                    </div>
                </div>
                <h3>
                    Địa chỉ liên lạc
                </h3>
                <div>
                    <div class="form-row"style="margin-top: 10px">
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                                <input type="text" class="input-Info31" name="tinh" id="tinh" placeholder="Tỉnh thành" required/>
                                <input type="text" class="input-Info32" name="huyen" id="huyen" placeholder="Quận / huyện" required/>
                                <input type="text" class="input-Info33" name="xa" id="xa" placeholder="Phường / xã" required/>
                            </div>                
                        </div>
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                                <input type="text" style="margin-top: 20px" name="diachi" id="diachi" placeholder="Số nhà, phố, tổ dân phố/thôn/đội" required/>
                            </div>                
                        </div>
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                                <input type="text" class="inputInfo21" name="email" id="email" placeholder="Email" value="email: <?php echo $_SESSION['login_email'] ?>" required/>
                                <input type="text" class="inputInfo22" name="phone" id="phone" placeholder="Số điện thoại" value="số điện thoại: <?php echo $_SESSION['phone'] ?>" required/>
                            </div>                
                        </div>
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                            <textarea class="form-control valid" id="go" style="height:200pxpx;" name="go" aria-invalid="false" placeholder="Trong vòng 14 ngày qua, Anh/Chị có đến quốc gia/vùng lãnh thổ nào (Có thể đi qua nhiều quốc gia) Nếu không trả lời: 'Không'"></textarea>
                            </div>                
                        </div>
                    </div>
                </div>
                <h3>
                    Trong vòng 14 ngày qua Anh/Chị có thấy xuất hiện dấu hiệu nào sau đây không ?
                </h3>
                <div class="form-group2"style="margin-top: 10px">
                    <div class="tableChoiceData mb-20">
                        <div class="cols-left">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th class="text-center">Triệu chứng</th>
                        <th width="100" class="text-center">Có</th>
                        <th width="100" class="text-center">Không</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>Sốt <span class="text-required"></span></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="sot" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="sot" value="2" ></td>
                        </tr>
                        <tr>
                        <td>Ho <span class="text-required"></span></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="ho" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="ho" value="2" ></td>
                        </tr>
                        <tr>
                        <td>Khó thở <span class="text-required"></span></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="khotho" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="khotho" value="2" ></td>
                        </tr>
                        <tr>
                        <td>Viêm phổi <span class="text-required"></span></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="viemphoi" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="viemphoi" value="2" ></td>
                        </tr>
                        <tr>
                        <td>Đau họng <span class="text-required"></span></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="dauhong" value="1" data-msg-required="Bạn chưa chọn triệu chứng"></td>
                        <td class="text-center"><input type="Radio" class="style-radio" name="dauhong" value="2" ></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <h3>
                Trong vòng 14 ngày qua, Anh/Chị có tiếp xúc với
                </h3>
                <div class="form-group2"style="margin-top: 10px">
                        <div class="   col-xs-12 ">
                        <table class="table table-bordered tableData2">
                        <thead>
                        <tr>
                        <th></th>
                        <th width="100" class="text-center">Có</th>
                        <th width="100" class="text-center">Không</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>Người bệnh hoặc nghi ngờ, mắc bệnh COVID-19 <span class="text-required"></span></td>
                        <td class="text-center">
                        <input type="Radio" class="style-radio" name="nghingo" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                        </td>
                        <td class="text-center">
                        <input type="Radio" class="style-radio" name="nghingo" value="2" >
                        </td>
                        </tr>
                        <tr>
                        <td>Người từ nước có bệnh COVID-19 <span class="text-required"></span></td>
                        <td class="text-center">
                        <input type="Radio" class="style-radio" name="nuocngoai" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                        </td>
                        <td class="text-center">
                        <input type="Radio" class="style-radio" name="nuocngoai" value="2" >
                        </td>
                        </tr>
                        <tr>
                        <td>Người có biểu hiện (Sốt, ho, khó thở , Viêm phổi) <span class="text-required"></span></td>
                        <td class="text-center">
                        <input type="Radio" class="style-radio" name="bieuhien" value="1" data-msg-required="Bạn chưa chọn lịch sử tiếp xúc">
                        </td>
                        <td class="text-center">
                        <input type="Radio" class="style-radio" name="bieuhien" value="2" >
                        </td>
                        </tr>
                        </tbody>
                        </table>
                        </div> 
                </div>
                <h3>
                Hiện tại Anh/Chị có các bệnh nào dưới đây
                </h3>
                <div class="form-group2"style="margin-top: 10px">
                    <div class="   col-xs-12 ">
                    <table class="table table-bordered tableData2">
                    <thead>
                    <tr>
                    <th class="text-center">Tên bệnh</th>
                    <th width="100" class="text-center">Có</th>
                    <th width="100" class="text-center">Không</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Bệnh gan mãn tĩnh <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicLiver]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicLiver]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Bệnh máu mãn tính <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicBlood]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicBlood]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Bệnh phổi mãn tính <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicLung]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicLung]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Bệnh thận mãn tĩnh <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicKidney]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasChronicKidney]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Bệnh tim mạch <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasHeartrelated]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasHeartrelated]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Huyết áp cao <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasHighBloodPressure]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasHighBloodPressure]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Suy giảm miễn dịch <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasHIV]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasHIV]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Người nhận ghép tạng , Thủy xương <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasOrganTransplant]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasOrganTransplant]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Tiểu đường <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasDiabet]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasDiabet]" value="2" >
                    </td>
                    </tr>
                    <tr>
                    <td>Ung thư <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasCancer]" value="1" data-msg-required="Bạn chưa chọn lịch sử phơi nhiễm">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasCancer]" value="2" >
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    </div>

                    <table class="table table-bordered tableData2">
                    <thead>
                    <tr>
                    <th class="text-center"></th>
                    <th width="100" class="text-center">Có</th>
                    <th width="100" class="text-center">Không</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Bạn có đang trong thời gian thai kỳ hay không? <span class="text-required">(*)</span></td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasPregnant]" value="1">
                    </td>
                    <td class="text-center">
                    <input type="Radio" class="style-radio" name="fields[hasPregnant]" value="2" >
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <div class="containerbtn">
                    <div class="center">
                    <button type="submit" name="submit" class="btn btn-sumit">Gửi tờ khai</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</body>

</html>

<script>
document.getElementById("infor").className += " active";
$("#tracuu").click(function(){
    window.open('https://baohiemxahoi.gov.vn/tracuu/Pages/tra-cuu-ho-gia-dinh.aspx', '_blank', 'toolbar=0,location=0,menubar=0');
});

</script>
