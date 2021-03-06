<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php 
        /**
        Задание 1

        С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. 
        */

        $i = 0;
        while ($i < 101) {
            echo "$i <br/>";
            $i++;
        }

        /**
        Задание 2

        С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так: 
        0 – это ноль.
        1 – нечётное число.
        2 – чётное число.
        3 – нечётное число.
        …
        10 – чётное число.
        */

        function verify($number) {
            if ($number === 0) return 'это ноль.';
            if (($number % 2) === 0) return 'чётное число.';
            return 'нечётное число.';
        }
        $i = 0;
        do {
            echo "$i - ".verify($i)."<br/>";
            $i++;
        } while ($i < 11);

        /**
        Задание 3

        Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
        а в качестве значений – массивы с названиями городов из соответствующей области.
        Вывести в цикле значения массива, чтобы результат был таким:
        Московская область:
        Москва, Зеленоград, Клин.
        Ленинградская область:
        Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
        Рязанская область…(названия городов можно найти на maps.yandex.ru)
        */

        $regions = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин',],
            'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт',],
            'Рязанская область' => ['Рязань', 'Касимов', 'Кораблино',],
        ];
        foreach ($regions as $key => $cities) {
            echo "$key: <br/> ";
            foreach ($cities as $city) {
                if ($cities[count($cities) - 1] == $city) echo $city;
                else echo "$city, ";
            }
            echo ".<br/>";
        }

        /**
        Задание 4

        Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания 
        (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
        Написать функцию транслитерации строк.
        */

        function translite($str) {
            $letters = [
                'а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 
                'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
                'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shh', 'ъ' => '#', 'ы' => 'y', 'ь' => '\'', 
                'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
            ];
            return strtr($str, $letters);
        }

        /**
        Задание 5

        Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
        */

        function changeSpaces($str) {
            $template = [' ' => '_',];
            return strtr($str, $template);
        }

        /**
        Задание 7

        Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. 
        */

        for ($i = 0; $i < 10; print_r($i++)) {}

        /**
        Задание 8

        Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». 
        */

        $regions = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин',],
            'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт',],
            'Рязанская область' => ['Рязань', 'Касимов', 'Кораблино',],
        ];
        foreach ($regions as $key => $cities) {
            echo "$key: <br/> ";
            foreach ($cities as $city) {
                if (mb_substr($city, 0, 1) === 'К') echo "$city ";
            }
            echo "<br/>";
        }

        /**
        Задание 9

        Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
        производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается 
        при конструировании url-адресов на основе названия статьи в блогах). 
        */

        function urlEncoder($str) {
            $template = [
                'а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 
                'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
                'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shh', 'ъ' => '#', 'ы' => 'y', 'ь' => '\'', 
                'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '_',
            ];
            return strtr($str, $template);
        }
    
        /**
        Задание 6

        В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. 
        Необходимо представить пункты меню как элементы массива и вывести их циклом. 
        Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
        */

    ?>
    <ul>
        <?php 
            $menu = [
                'main' => [],
                'first' => ['sub1', 'sub2', 'sub3',],
                'second' => [],
            ];
            foreach ($menu as $key => $value) {
                echo "<li>$key</li>";
                if (count($value) != 0) {
                    echo "<ul>";
                    foreach ($value as $sub) {
                        echo "<li>$sub</li>";
                    }
                    echo "</ul>";
                }
            }  
        ?>
    </ul>
</body>
</html>