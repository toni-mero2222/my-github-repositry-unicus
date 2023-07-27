<?php
session_start();
if (isset($_POST['register'])) {
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
    $emai = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $passwors = $_POST['password'];
    $confirmpassword = $_POST['confirm-password'];

    if (empty($fullname) || strlen($fullname) <3) {
        $_SESSION['errorMsg'] = 'Enter your Fullname';
        echo "<script>window.history.back()</script>";

    }elseif (strlen($password) <6) {
        $_SESSION['errorMsg'] = 'password too short. Min. 6 character expected';
        echo "<script>window.history.back()</script>";
    }elseif (!preg_match_all("/[0-9]/i", $password)) {
        $_SESSION['errorMsg'] = 'Atleast one digit between 0-9 expected';
        echo "<script>window.histroy.back()</script>";
    }elseif ($password = $confirmpassword) {
        $_SESSION['errorMsg'] != 'Password dont match';
        echo "<script>window.history.back()</script>";
    }else{
        $sql="";
        $run="";
    }    

}



?>