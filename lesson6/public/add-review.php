<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$userId = mysqli_fetch_assoc(mysqli_query($link, "SELECT id FROM users WHERE username = '$_SESSION[username]'"));
$query = "INSERT INTO reviews (user_id, date, text) VALUES ('$userId[id]', now(), '$_POST[review]')";
mysqli_query($link, $query);
mysqli_close($link);
header('Location: ../reviews.php');
die;
