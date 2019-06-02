<?php
session_start();
$link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
$query = "SELECT id, username, pass FROM users WHERE username = '{$_POST['login']}'";
$user = mysqli_fetch_assoc(mysqli_query($link, $query));
if ($user['username']) {
    if (password_verify($_POST['password'], $user['pass'])) {
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $user['username'];
        header('Location: ../cabinet.php');
    }
    else {
        header('Location: ../login.php?error=2');
    }
}
else {
    header('Location: ../login.php?error=1');
}