<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
$userId = mysqli_fetch_assoc(mysqli_query($link, "SELECT id FROM users WHERE username = '$_SESSION[username]'"));
$productId = $_POST['product_id'];
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
mysqli_query($link, $query);
$response = mysqli_fetch_assoc(mysqli_query($link, "SELECT product_id, quantity FROM cart WHERE product_id = '$productId' AND user_id = $userId[id]"));
if (!isset($response)) $response = ['del' => $productId];
echo json_encode($response);
mysqli_close($link);
die;