<nav class="navbar navbar-light" style="background-color: #fff;">
    <a class="nar-brand navbar-brand  " href="home" style="margin-left: 150px">
        <img src="coronavirus.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Pass COVY
    </a>
    <ul class="nav" id="myTab" style="margin-right: 150px">
        <li class="nav-item">
            <a class="nar-text nav-link" id="home" href="home">Tin COVY</a>
        </li>
        <li class="nav-item">
            <a class="nar-text nav-link" id="registration" href="#">Đăng ký khám bệnh</a>
        </li>
        <?php         
        if (isAuth()) {
            if($_SESSION["declaration"]=="false"){
                $declaration="✖️";
            }else{
                $declaration="✔️";
            }
            echo '
            <li class="nav-item dropdown">
                <a class="nar-text nav-link dropdown-toggle" id="infor" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION["name"].'</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 10px">
                    <a class="dropdown-item" href="declaration">Tờ khai y tế    '.$declaration.'</a>
                    <a class="dropdown-item" id="form" href="#">Phiếu đăng ký khám bệnh</a>
                    <a class="dropdown-item" href="note">Sổ khám bệnh</a>
                    <a class="dropdown-item" href="changeinfo">Thay đổi thông tin</a>
                    <div class="dropdown-divider">Thay đổi thông tin</div>
                    <a class="dropdown-item" href="logout">Đăng xuất</a>
                </div>
            </li>
            ';
        }else {
            echo '
                <li class="nav-item">
                <a class="nar-text nav-link" id="login" href="login">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nar-text nav-link" id="registrationAccout" href="registrationAccout">Đăng Ký</a>
                </li>
            ';
        }
        ?>
    </ul>
</nav>

<script>
    $("#registration").click(function(){
        $.ajax({
                type: 'POST',
                url: 'views/ajaxData.php',
                data: 'checkRegistration=true',
                success:function(res){
                    console.log(res);
                    if(res=="login"){
                        alert("Bạn cần đăng nhận để đăng ký khám bệnh!");
                        window.location="/login";
                    }else if(res=="khaibao"){
                        alert("Trước tiên bạn cần phải khai báo y tế");
                        window.location="/declaration";
                    }else if(res=="dangkyroi"){
                        alert("Bạn đã đăng ký khám bệnh rồi");
                    }else if(res=="true"){
                        window.location="/registration";
                    }
                }
            }); 
    });
    $("#form").click(function(){
        $.ajax({
                type: 'POST',
                url: 'views/ajaxData.php',
                data: 'checkForm=true',
                success:function(res){
                    console.log(res);
                    if(res!="true"){
                        alert(res);
                    }else{
                        window.open('/form');
                    }
                }
            }); 
    });

</script>

