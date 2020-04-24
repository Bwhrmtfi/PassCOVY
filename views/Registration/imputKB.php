<?php
require_once "../../core/functions/helper.php";
require_once "../../mysqli.php";
const FILE_PATH_BHYT = "../../uploads/BHYT/";
const FILE_PATH_ID = "../../uploads/id/";
if(isset($_POST['submit'])){
    $faculty = $_POST['faculty'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $id = "1";
    //`faculty`, `date`, `month`, `users_id`, `time`, `create_at`
    $query = 'INSERT INTO registration (faculty, date, users_id,time,create_at) VALUES (?, ?,?,?,NOW())';
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssis", $faculty, $date,$id,$time); 
    $stmt->execute();
}
?>