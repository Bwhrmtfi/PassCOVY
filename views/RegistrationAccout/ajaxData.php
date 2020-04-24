<?php 
require_once "../../mysqli.php";
if(isset($_POST["email"])){ 
    // Fetch state data based on the specific country 
    $query = 'SELECT email FROM users WHERE email = "'.$_POST['email'].'"'; 
    $result = $connection->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo 1;
    }else{ 
        echo 0; 
    } 
}
?>