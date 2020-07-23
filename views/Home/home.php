<!DOCTYPE html>
<html lang="">
<?php
include(__DIR__ . '/../static_header.php');
?>
<script>
    var loadingImg = "<img class='loading-img' src = 'assets/images/loading.gif' ?>";
</script>

<body id="page-top">
    <?php
    include(__DIR__ . '/../nav.php');
    ?>
    <div class="home2">
        <img src="assets/images/home.png" alt="" class="img-vong">
    </div>

</body>

</html>
<script>
    document.getElementById("home").className += " active";
    window.onload = function() {
        if (sessionStorage.getItem("form") == "true") {
            window.open("/form", "_blank");
            sessionStorage.setItem("form", "false");
        }
    }
    $("#d").click(function() {
        window.location = "/registration";
    });
    $("#u").click(function() {
        window.location = "/registration";
    });
</script>