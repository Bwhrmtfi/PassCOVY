<?php 
require_once "../../mysqli.php";
if(isset($_POST["checkTime"])){ 
    $faculty = $_POST['faculty'];
    $date = $_POST['date'];
    $time=[
        "1"=>"Từ 7h00 đến 8h30",
        "2"=>"Từ 8h30 đến 10h00",
        "3"=>"Từ 10h00 đến 11h30",
        "4"=>"Từ 13h00 đến 14h30",
        "5"=>"Từ 14h30 đến 16h00",
    ];
    foreach($time as $time){
        $query = 'SELECT * FROM registration WHERE date= "'.$date.'" AND faculty ="'.$faculty.'" AND time = "'.$time.'"'; 
        $result = $connection->query($query); 
        if($result->num_rows <=3){ 
            echo '<option value="'.$time.'">'.$time.'</option>';
        }
    }
}
?>