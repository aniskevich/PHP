<?php

$query = "SELECT username FROM users WHERE username = '{$_SESSION['username']}'";
$user = mysqli_fetch_assoc(mysqli_query($link, $query));
