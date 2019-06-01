<?php
    $products = [];
    $result = mysqli_query($link, "SELECT * FROM Products");
    while($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }