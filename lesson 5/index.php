<?php 

//Загрузка изображений на сервер

    $uploaddir = 'img/gallery/';
    $uploadfile = $uploaddir . $_FILES['image']['name'];
    $name = $_FILES['image']['name'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_FILES['image']['type'] === 'image/jpeg') {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                echo "Image uploaded.\n";

//Запись в БД имени изображения, ставим 0 просмотров

                $link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
                    if (!$link) {
                        echo "Error: " . mysqli_connect_error() . PHP_EOL;
                        exit;
                    }
                mysqli_query($link, "INSERT INTO gallery (link, views) VALUES ('$name', 0)");
                mysqli_close($link);

//Создаем превью изображения, сохраняем на сервер

                $pwidth = 320;
                $pheight = 240;
                list($width, $height) = getimagesize($uploadfile);
                $preview = imagecreatetruecolor($pwidth, $pheight);
                $source = imagecreatefromjpeg($uploadfile);
                imagecopyresized($preview, $source, 0, 0, 0, 0, $pwidth, $pheight, $width, $height);
                imagejpeg($preview, 'img/preview/' . $_FILES['image']['name']); 
            } 
            else {
                echo "Error!\n";   
            } 
        } 
        else {
            echo "Please upload image.\n";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="addImage">
        <form enctype="multipart/form-data" action="" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            Upload image: <input name="image" type="file" required />
            <input type="submit" value="upload" />
        </form>
    </div>
    <div class="layout">
        <?php

//Подключение к БД

            $link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
            if (!$link) {
                echo "Error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

//Выборка из БД с сортировкой по просмотрам

            $result = mysqli_query($link, "SELECT * FROM gallery ORDER BY views DESC");
            $images = array();
            while($row = mysqli_fetch_assoc($result)) {
                $images[] = $row;
            }
            mysqli_close($link);

//Рендер галереи с присвоением id из базы в id тега (для передачи в дальнейшем через GET)

            foreach ($images as $image) {     
                echo "
                    <div class='imgLayout'>
                        <img src='img/preview/$image[link]' class='img' id='$image[id]'>
                        <div class='fade hidden'>
                            <a href='gallery.php?id=$image[id]'><button>Enlarge</button></a>
                        </div>
                        <div class='views'>
                        <i class='fas fa-eye'></i><span>$image[views]</span>
                        </div>
                    </div>
                ";
            }
        ?>
    </div>   
    </div>
</body>
</html>