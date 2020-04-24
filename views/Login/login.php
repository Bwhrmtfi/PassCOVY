<!DOCTYPE html>
<html lang="">
<?php 
include(__DIR__.'/../static_header.php'); 
require_once __DIR__."/../../core/functions/auth.php";
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
            <h2>Đăng nhập</h2>
            <form method="POST" id="registration-form" class="signup-form" enctype="multipart/form-data" action="views/Login/check.php" style="margin-top: 20px">
                <div>
                    <div class="form-row">
                        <div class="form-group-flex-registration">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu" required/>
                            </div>
                            <span class="text-danger "><?php echo getError(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="containerbtn">
                    <div class="center">
                    <button type="submit" id="loginP" name="submit" class="btn btn-sumit" value="do-login">Đăng nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script>
  document.getElementById("login").className += " active";
</script>
