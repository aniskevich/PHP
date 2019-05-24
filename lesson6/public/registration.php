<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$result = mysqli_fetch_assoc(mysqli_query($link, "SELECT username FROM users WHERE username = '$_POST[login]'"));
if (!$result['username']) {
    if ($_POST['password'] === $_POST['repassword']) {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO users (username, pass) VALUES ('$_POST[login]', '$password')";
        mysqli_query($link, $query); 
        mysqli_close($link);   
        header('Location: ../cabinet.php');
    }
    else {
        mysqli_close($link);
        header('Location: ../register.php?error=2');
    }
}
else {
    mysqli_close($link);
    header('Location: ../register.php?error=1');
}
die;


 
    
 
