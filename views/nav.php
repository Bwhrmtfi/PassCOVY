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
            <a class="nar-text nav-link" id="registration" href="registration">Đăng ký khám bệnh</a>
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
                    <a class="dropdown-item" href="form">Phiếu đăng ký khám bệnh</a>
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
                    if(res!="true"){
                        alert(res);
                    }
                }
            }); 
    });
</script>