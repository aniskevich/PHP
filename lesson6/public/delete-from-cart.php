<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$userId = mysqli_fetch_assoc(mysqli_query($link, "SELECT id FROM users WHERE username = '$_SESSION[username]'"));
$productId = $_GET['id'];
$cartProduct = mysqli_query($link, "SELECT * FROM cart WHERE product_id = '$productId' AND quantity > 1 AND user_id = '$userId[id]'");
$result = array();
    while($row = mysqli_fetch_assoc($cartProduct)) {
        $result[] = $row;
    }
if (!$result) { 
    $query = "DELETE FROM cart WHERE product_id = '$productId' AND user_id = '$userId[id]'";
} else {
    $query = "UPDATE cart SET quantity = quantity - 1 WHERE product_id = '$productId' AND user_id = '$userId[id]'";
}
echo $query;
mysqli_query($link, $query);
mysqli_close($link);
header('Location: ../index.php');
die;