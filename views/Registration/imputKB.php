<?php
require_once "../../core/functions/helper.php";
require_once "../../mysqli.php";
require_once "../../core/functions/auth.php";
const FILE_PATH_BHYT = "../../uploads/BHYT/";
const FILE_PATH_ID = "../../uploads/id/";
if(isset($_POST['submit'])){
    $faculty = $_POST['faculty'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $id = $_SESSION['login_id'];
    $query = 'SELECT * FROM registration WHERE faculty="'.$faculty.'" AND time="'.$time.'" AND date = "'.$date.'"'; 
    $result = $connection->query($query); 
    // Generate HTML of state options list
    $stt=($result->num_rows)+1; 
    //`faculty`, `date`, `month`, `users_id`, `time`, `create_at`
    $query = 'INSERT INTO registration (faculty, date, users_id,time,stt,create_at) VALUES (?, ?,?,?,?,NOW())';
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssisi", $faculty, $date,$id,$time,$stt); 
    $stmt->execute();
    $_SESSION["registration"]="true";
    header('Location: /form'); 
}
?>