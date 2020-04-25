<!DOCTYPE html>
<html lang="">
<?php
include('static_header.php');

?>
<script>
    var loadingImg = "<img class='loading-img' src = 'assets/images/loading.gif' ?>";
</script>

<body id="page-top">
    <?php
    include('nav.php');
    ?>
    <h1>Home</h1>
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
    
</script>