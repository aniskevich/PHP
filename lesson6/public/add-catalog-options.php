<?php
    $category = "SELECT category FROM categories";
    $type = "SELECT `type` FROM product_types";
    $size = "SELECT size FROM size";
    $color = "SELECT color FROM colors";
    $queries = [
        $category, $type, $size, $color
    ];
    $options = array();
    foreach ($queries as $query) {
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $options[] = $row;
        }
    }