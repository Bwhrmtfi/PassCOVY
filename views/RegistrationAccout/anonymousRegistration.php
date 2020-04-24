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
            <h2>TẠO TÀI KHOẢN</h2>
            <form method="POST" id="registration-form" class="signup-form" enctype="multipart/form-data" action="views/RegistrationAccout/imputUser.php">
                <h3>
                    Tạo tài khoản
                </h3>
                <div>
                    <div class="form-row">
                        <div class="form-group-flex-registration">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div id="email-message">
                                <p id="email-mes" class="invalid">Tài khoản này đã được dùng</p>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="retype_password" id="retype_password" placeholder="Nhập lại mật khẩu" required/>
                            </div>
                            <div id="message">
                                <p id="letter" class="invalid">Mật khẩu phải bao gồm :<b> Ký tự in thường</b></p>
                                <p id="capital" class="invalid">Mật khẩu phải bao gồm :<b>Ký tự in HOA</b></p>
                                <p id="number" class="invalid">Mật khẩu phải bao gồm :<b> Số</b></p>
                                <p id="length" class="invalid">Mật khẩu phải có nhiều hơn<b> 8 ký tự</b></p>
                            </div>
                            <div id = "password-re">
                                <p id="message-re" class="invalid"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>
                    Thông tin cá nhân
                </h3>
                <div>
                    <div class="form-row"style="margin-top: 10px">
                        <div class="form-group-flex-registration">
                            <div class="form-group2">
                                <input type="text" class="inputInfo" name="name" id="name" placeholder="Họ và tên" required/>
                                <input type="text" class="inputInfoR" name="phone" id="phone" placeholder="Số điện thoại" required/>
                            </div>                
                        </div>
                        <div class="form-group-flex-registration form-group2">
                            <select id="pro" name="pro" class="inputInfoS custom-select custom-select-lg mb-3" required>
                                <option value="">Chọn tỉnh thành bạn đang ở</option>
                                <option value="1">Tỉnh test</option>
                                
                            </select>
                            <select id="hol" name="hol" class="inputInfoRS custom-select custom-select-lg mb-3" required>
                                <option value="test">Vui lòng chọn nơi bạn ở trước</option>
                                <option value="1">Bệnh viện test</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h3>
                    Liên kết với BHYT
                </h3>
                <div>
                    <p class="text_picture">Vui lòng tải lên ảnh mặt trước của chứng minh nhân dân và thẻ bảo hiểm y tế </p>
                    <div>
                        <input type="file" class="inputfile2" name="id_picture" id="id_picture" onchange="readId(this);" data-multiple-caption="{count} files selected" multiple required/>
                        <label for="id_picture" class="id_picture">
                            <figure>
                                <img src="views/RegistrationAccout/images/passport.png" alt="" class="id_image">
                            </figure>
                            <span class="file-button">Tải lên CMND</span>
                        </label>
                        <div class="form-file3">
                            <input type="file" class="inputfile2" name="BHYT_picture" id="BHYT_picture" onchange="readBHYT(this);" data-multiple-caption="{count} files selected" multiple required/>
                            <label for="BHYT_picture"  class="BHYT_picture">
                                <figure>
                                    <img src="views/RegistrationAccout/images/doctor.png" alt="" class="BHYT_image">
                                </figure>
                                <span class="file-button">Tải lên thẻ BHYT</span>
                            </label>
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

    <script src="assets/js/registration.js"></script>
    <script src="assets/js/checkPassword.js"></script>
</body>

</html>

<script>
document.getElementById("registrationAccout").className += " active";

$('#email').on('change', function(){
        var email = $(this).val();
        if(email){
            $.ajax({
                type: 'POST',
                url: 'views/RegistrationAccout/ajaxData.php',
                data: 'email='+email,
                success:function(res){
                    if(res==1){
                        document.getElementById("email-message").style.display = "block";
                    }else{
                        document.getElementById("email-message").style.display = "none";
                    }
                }
            }); 
        }
    });

function readId(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(".id_image").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
function readBHYT(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $(".BHYT_image").attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

</script>
