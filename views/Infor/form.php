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
            <h2>Thông tin tài khoản</h2>
            <form method="POST" id="registration-form" class="signup-form" enctype="multipart/form-data" action="views/RegistrationAccout/imputUser.php">
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
            </form>
        </div>

    </div>

</body>

</html>

<script>
document.getElementById("infor").className += " active";

</script>
