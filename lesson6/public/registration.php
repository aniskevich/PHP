<?php
session_start();
$link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
$user = mysqli_fetch_assoc(mysqli_query($link, "SELECT username FROM users WHERE username = '$_POST[login]'"));
if (!$user['username']) {
    if ($_POST['password'] === $_POST['repassword']) {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO users (username, pass) VALUES ('$_POST[login]', '$password')";
        mysqli_query($link, $query);
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $_POST['login'];   
        header('Location: ../cabinet.php');
    }
    else {
        header('Location: ../register.php?error=2');
    }
}
else {
    header('Location: ../register.php?error=1');
}
die;


 
    
 
