<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$currentUserId = 1; //времянка пока нет авторизации
$productId = $_GET['id'];
$cartProduct = mysqli_query($link, "SELECT * FROM cart WHERE product_id = '$productId' AND quantity > 1");
$result = array();
    while($row = mysqli_fetch_assoc($cartProduct)) {
        $result[] = $row;
    }
if (!$result) { 
    $query = "DELETE FROM cart WHERE product_id = '$productId'";
} else {
    $query = "UPDATE cart SET quantity = quantity - 1 WHERE product_id = '$productId'";
}
echo $query;
mysqli_query($link, $query);
mysqli_close($link);
header('Location: ../index.php');
die;