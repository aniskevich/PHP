<?php
    if (isset($_SESSION['auth'])) {
        $userId = mysqli_fetch_assoc(mysqli_query($link, "SELECT id FROM users WHERE username = '$_SESSION[username]'"));
        $query_cart = "SELECT quantity, Products.id, Products.name, Products.price, Products.link, Products.color, 
    Products.size FROM cart INNER JOIN Products ON cart.product_id = Products.id WHERE cart.user_id = '$userId[id]'";
        $result = mysqli_query($link, $query_cart);
        $goods = array();
        while($row = mysqli_fetch_assoc($result)) {
            $goods[] = $row;
        }
    }