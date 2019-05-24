<?php
	
	        $idx = $_GET['id'];
	        $link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
	        if (!$link) {
     echo "Error: " . mysqli_connect_error() . PHP_EOL;
     exit;
}
$result = mysqli_query($link, "SELECT * FROM Products WHERE id = $idx");
mysqli_close($link);
$result = mysqli_fetch_assoc($result);