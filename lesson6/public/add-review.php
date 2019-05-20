<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$currentUserId = 1; //времянка пока нет авторизации
$query = "INSERT INTO reviews (user_id, date, text) VALUES ('$currentUserId', now(), '$_POST[review]')";
mysqli_query($link, $query);
mysqli_close($link);
header('Location: ../reviews.php');
die;
