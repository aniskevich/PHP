<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$user = mysqli_fetch_assoc(mysqli_query($link, "SELECT username, info FROM users WHERE username = '$_SESSION[username]'"));
