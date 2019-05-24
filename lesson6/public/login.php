<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$user = mysqli_fetch_assoc(mysqli_query($link, "SELECT id, username, pass FROM users WHERE username = '$_POST[login]'"));
if ($user['username']) {
    if (password_verify($_POST['password'], $user['pass'])) {
        mysqli_close($link);
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $user['username'];
        header('Location: ../cabinet.php');
    }
    else {
        mysqli_close($link);
        header('Location: ../login.php?error=2');
    }
}
else {
    mysqli_close($link);
    header('Location: ../login.php?error=1');
}
die;