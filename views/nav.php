<nav class="navbar navbar-light" style="background-color: #fff; position: fixed; top: 0; width: 100%;   z-index: 3; box-shadow: 0 4px 4px 0 rgba(0,0,0,.1);">
    <a class="nar-brand navbar-brand  " href="home">
        <img src="coronavirus.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Smart Water Trash Collection
    </a>
    <ul class="nav" id="myTab">
        <li class="nav-item">
            <a class="nar-text nav-link" id="home" href="home">Giới thiệu</a>
        </li>
        <li class="nav-item">
            <a class="nar-text nav-link" id="param" href="param">Dọn rác</a>
        </li>
        <li class="nav-item">
            <a class="nar-text nav-link" id="registration" href="#">Thông số nước</a>
        </li>
        <li class="nav-item">
            <a class="nar-text nav-link" id="registration" href="#">Lịch sử</a>
        </li>

    </ul>
</nav>

<script>
    $("#registration").click(function() {
        $.ajax({
            type: 'POST',
            url: 'views/ajaxData.php',
            data: 'checkRegistration=true',
            success: function(res) {
                console.log(res);
                if (res == "login") {
                    alert("Bạn cần đăng nhận để đăng ký khám bệnh!");
                    window.location = "/login";
                } else if (res == "khaibao") {
                    alert("Trước tiên bạn cần phải khai báo y tế");
                    window.location = "/declaration";
                } else if (res == "dangkyroi") {
                    alert("Bạn đã đăng ký khám bệnh rồi");
                } else if (res == "true") {
                    window.location = "/registration";
                }
            }
        });
    });
    $("#form").click(function() {
        $.ajax({
            type: 'POST',
            url: 'views/ajaxData.php',
            data: 'checkForm=true',
            success: function(res) {
                console.log(res);
                if (res != "true") {
                    alert(res);
                } else {
                    window.open('/form');
                }
            }
        });
    });
</script>