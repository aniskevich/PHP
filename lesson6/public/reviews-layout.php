<?php
    $query = "SELECT reviews.id, reviews.text, reviews.date, users.username FROM reviews INNER JOIN users ON reviews.user_id = users.id";
    $result = mysqli_query($link, $query);
    $reviews = array();
    while($row = mysqli_fetch_assoc($result)) {
        $reviews[] = $row;
    }