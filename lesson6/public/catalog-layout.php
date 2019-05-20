<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/engine/init.php";
    $query_catalog = "SELECT * FROM Products";
    $result = mysqli_query($link, $query_catalog);
    $products = array();
    while($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    mysqli_close($link);