<?php 
require_once "../../mysqli.php";
require_once "../../core/functions/auth.php";
if (isset($_POST['submit']) && $_POST['submit'] == 'do-login') {
    $password = md5(htmlspecialchars($_POST['password']));
    $email = htmlspecialchars($_POST['email']);
    // Fetch state data based on the specific country 
    $query = 'SELECT * FROM users WHERE email = "'.$email.'" AND password = "'.$password.'"'; 
    $result = $connection->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        $result = $result->fetch_assoc();
        saveUserSession($result['id'],$email,$result['user_name']);
        clearError();
        header('Location: /home');
    }else{ 
        setError('Tài khoản hoặc mật khẩu không đúng');
        header('Location: /login'); 
    } 
}
?>