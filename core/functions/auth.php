<?php
session_start();

function isAuth()
{
    return (isset($_SESSION['login_id'])) ? true : false;
}

function saveUserSession($id, $email, $name,$phone,$declaration,$registration)
{
    $_SESSION['login_id'] = $id;
    $_SESSION['login_email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['name'] = $name;
    $_SESSION['declaration'] = $declaration;
    $_SESSION['registration'] = $registration;
}

function saveUserPermissionSession($permissions)
{
    $obj = json_decode($permissions);
    $jso = json_encode($obj);
    $permissions = json_decode($jso, true);
    $_SESSION['permissions'] = $permissions;
}

function getUserPermission()
{
    return (isset($_SESSION['permissions'])) ? json_encode($_SESSION['permissions']) : null;
}

function getSessionId()
{
    return (isset($_SESSION['login_id'])) ? $_SESSION['login_id'] : null;
}

function isAdmin()
{
    return (isset($_SESSION['login_id']) && $_SESSION['login_role'] == 1) ? true : false;
}

function fbUid()
{
    return (isset($_SESSION['fb_id'])) ? $_SESSION['fb_id'] : '';
}

function clearSession()
{
    session_unset();
    session_destroy();
    $_SESSION = array();
}

function setError($error)
{
    $_SESSION['error'] = $error;
}

function getError()
{
    return (isset($_SESSION['error'])) ? $_SESSION['error'] : '';
}

function clearError()
{
    unset($_SESSION['error']);
}
