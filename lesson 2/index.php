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

            Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
            Затем написать скрипт, который работает по следующему принципу:
            Если $a и $b положительные, вывести их разность.
            Если $а и $b отрицательные, вывести их произведение.
            Если $а и $b разных знаков, вывести их сумму.
            Ноль можно считать положительным числом.
        */

        $a = -100;
        $b = 20;

        if ($a >= 0 && $b >= 0) {
            $result = $a - $b;
        }
        elseif ($a < 0 && $b < 0) {
            $result = $a * $b;
        }
        else {
            $result = $a + $b;
        }
        echo $result;

        /**
            Задание 2

            Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
            switch организовать вывод чисел от $a до 15.
        */

        $a = rand(0, 15);
        switch ($a) {
            case 0: echo 0;
            case 1: echo 1;
            case 2: echo 2;
            case 3: echo 3;
            case 4: echo 4;
            case 5: echo 5;
            case 6: echo 6;
            case 7: echo 7;
            case 8: echo 8;
            case 9: echo 9;
            case 10: echo 10;
            case 11: echo 11;
            case 12: echo 12;
            case 13: echo 13;
            case 14: echo 14;
            case 15: echo 15;
        }

        /**
            Задание 3

            Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
            Обязательно использовать оператор return.

            Задание 4

            Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
            где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
            В зависимости от переданного значения операции выполнить одну из арифметических операций
            (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). 
        */
        
        function addition ($arg1, $arg2) {
            return $result = $arg1 + $arg2;
        }
        function subtraction($arg1, $arg2) {
            return $result = $arg1 - $arg2;
        }
        function division ($arg1, $arg2) {
            if ($arg2 === 0) echo "error";
            else return $result = $arg1 / $arg2;
        }
        function multiplication ($arg1, $arg2) {
            return $result = $arg1 * $arg2;
            echo $result;
        }

        function mathOperation($arg1, $arg2, $operation) {
            switch ($operation) {
                case 'addition':
                return addition($arg1, $arg2);
                break;
                case 'subtraction':
                return subtraction($arg1, $arg2);
                break;
                case 'division':
                return division($arg1, $arg2);
                break;
                case 'multiplication':
                return multiplication($arg1, $arg2);
                break;
            }
        }

        /**
            Задание 6

            С помощью рекурсии организовать функцию возведения числа в степень.
            Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
        */

        function power($val, $pow) {
            if ($pow == 1) return $val;
            else {
                return $val * power($val, --$pow); 
            } 
        }

        /**
            Задание 7

            Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,
            например: 22 часа 15 минут, 21 час 43 минуты.
        */

        function timeFormatter() {
            $minuteDec = 12;
            $hour = date('h') % 10;
            $minute = date('i') % 10;
            if ($hour > 1 && $hour < 5) $hourFormatted = 'часа';
            elseif ($hour == 1) $hourFormatted = 'час';
            else $hourFormatted = 'часов';
            if (( date('i') > 10 ) && ( date('i') < 20 )) return 'минут';
            elseif ($minute > 1 && $minute < 5) $minuteFormatted = 'минуты';
            elseif ($minute == 1) $minuteFormatted = 'минута';
            else $minuteFormatted = 'минут';
            return 'текущее время: '.date('h').' '.$hourFormatted.' : '.date('i').' '.$minuteFormatted;
        }
        echo timeFormatter();

    ?>
    <footer>
        <?php
            /**
                Задание 5

                Посмотреть на встроенные функции PHP. 
                Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
            */

            echo date(Y);
        ?>       
    </footer>
</body>
</html>