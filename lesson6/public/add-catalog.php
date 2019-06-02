<?php
$query = "INSERT INTO Products ";
$query .= "(name, category, type, color, size, amount, price, link, about) ";
$query .= "VALUES ('$_POST[name]', '$_POST[category]', '$_POST[type]','$_POST[color]', '$_POST[size]', '$_POST[amount]', '$_POST[price]', '$_POST[link]', '$_POST[about]')";
mysqli_query($link, $query);
header('Location: ../index.php');