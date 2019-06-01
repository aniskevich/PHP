<?php
$userId = mysqli_fetch_assoc(mysqli_query($link, "SELECT id FROM users WHERE username = '$_SESSION[username]'"));
$query = "INSERT INTO reviews (user_id, date, text) VALUES ('$userId[id]', now(), '$_POST[review]')";
mysqli_query($link, $query);
header('Location: ../reviews.php');
