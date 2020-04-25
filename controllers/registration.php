<?php

// http://localhost/live/Home/Show/1/2

class Registration extends Controller
{

    function anonymous()
    {
        clearError();
        if (isAuth()){
            if($_SESSION['declaration']=='true'){
                if($_SESSION['registration']=='true'){
                    header('Location: /form');
                }else{
                    $this->view("Registration/registration", ["name"=>$_SESSION["name"],"id"=>$_SESSION["login_id"]]);            
                }
            }else{
                header('Location: /declaration'); 
            }
        }else{
            header('Location: /registrationAccout'); 
        }
    }
}
