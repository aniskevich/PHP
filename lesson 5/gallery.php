<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 

//Берем id необходимого изображения из GET

        $idx = $_GET['id'];
        $link = mysqli_connect("localhost", "user", "x4kbTNyvus4XNGxa", "PHP");
        if (!$link) {
            echo "Error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//Увеличиваем количество просмотров

        mysqli_query($link, "UPDATE gallery SET views = views + 1 WHERE id = $idx");

//Выборка изображения из БД по id

        $result = mysqli_query($link, "SELECT * FROM gallery WHERE id = $idx");
        mysqli_close($link);
        $result = mysqli_fetch_assoc($result);
        echo "
            <div class='container'>
                <img src='img/gallery/$result[link]' class='fs'>
                <div>
                    Views: $result[views]
                </div>
            </div>
        ";
    ?>
</body>
</html>