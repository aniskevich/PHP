<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $header = '<h1>Заголовок</h1>';
        $title = 'Document';
        $year = getdate();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
    <?php   
        echo $header;
        echo $year[year];
            
        // 2* задание
        $a = 1;
        $b = 2;
        [$a, $b] = [$b, $a];
    ?>   
</body>
</html>
