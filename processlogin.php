<?php

session_start();

$email = $_POST['email'];
$pwd = $_POST['pwd'];

if(isset($email) && isset($pwd)){
    if ($email=='as@as.as'&& $pwd=='0000'){
        $_SESSION['user']="as";
        header("location:home.php");
    }
    else{
        $_SESSION['errorMessage']="veuillez verifier vos infos!";
        header("location:login.php");
    }
}
else{
    $_SESSION['errorMessage']="veuillez verifier vos infos!";
    header("location:login.php");
}

