<?php
//Variables for the task 4
    $header1 = 'Start of task 4';
    $title = 'Title of the page';
    $currYear = getdate()['year'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?echo $title?></title>
</head>
<body>
<h3>Task 2</h3>
<?php
    // Task 2
    $a = 4;
    $b = 5;
    echo $a + $b . '<br>';    // сложение
    echo $a * $b . '<br>';    // умножение
    echo $a / $b . '<br>';  // деление
    echo $a % $b . '<br>'; // остаток от деления
    echo $a ** $b . '<br>'; // возведение в степень
    echo '-----------------' . '<br>';

    $c = 4;
    $d = 5;
    $c += $d;
    echo 'c = ' . $c . '<br>';
    $c = 0;
    echo $c++ . '<br>';     // Постинкремент
    echo ++$c . '<br><br>';    // Преинкремент
    // echo $c­­-- . '<br>';     // Постдекремент
    // echo ­­--$c;    // Предекремент

    var_dump($a == $b);  // Сравнение по значению
    var_dump($a === $b); // Сравнение по значению и типу
    var_dump($a > $b);    // Больше
    var_dump($a < $b);    // Меньше
    var_dump($a <> $b);  // Не равно
    var_dump($a != $b);   // Не равно
    var_dump($a !== $b); // Не равно без приведения типов
    var_dump($a <= $b);  // Меньше или равно
    var_dump($a >= $b);  // Больше или равно
    
?>

    <hr>

    <h3>Task 3</h3>
    <?php
        $a = 5;
        $b = '05';
        var_dump($a == $b);                             // Почему true? -- Это сравнение значений без сравнения типов, если было бы ===, то было бы false
        var_dump((int)'012345');                        // Почему 12345? -- приведение строки к целочисленному
        var_dump((float)123.0 === (int)123.0); // Почему false? -- так как используется строгое равенство ===, то они не равны, так как int приводит число к виду 123
        var_dump((int)0 === (int)'hello, world'); // Почему true? -- если бы в начале строки была цифра, было бы false. В данном случае строка преобразуется в 0
    ?>
<hr>
<h3>Task 4</h3>

<h1><?echo $header1?></h1>
<strong>Now is <?echo $currYear?></strong>
</body>
</html>