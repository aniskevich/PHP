<?php
    $link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
    $query_cart = "SELECT quantity, Products.id, Products.name, Products.price, Products.link, Products.color, Products.size FROM cart INNER JOIN Products ON cart.product_id = Products.id WHERE cart.user_id = 1";
    $result = mysqli_query($link, $query_cart);
    $goods = array();
    while($row = mysqli_fetch_assoc($result)) {
        $goods[] = $row;
    }
    mysqli_close($link);