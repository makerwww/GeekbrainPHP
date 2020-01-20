<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        footer {
            background-color: lightgrey;
            position: absolute;
            bottom: 0;
            left:0;
            width: 100%;
            min-height: 40px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h3>Task1</h3>
    <?php
    $a = 11;
    $b = 8;
    echo '$a = 11; $b = 8 <br/>'; 
    if($a >= 0 && $b >= 0){
        echo $a - $b;
    } else if($a < 0 && $b < 0){
        echo $a * $b;
    } else echo $a + $b;
?>

    <h3>Task2</h3>
    <?php
        // $arr = range(0, 15, 1);
        $arr = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
        // echo $arr;
        $c = array_rand($arr);
        echo $c.'<br>';
        switch ($c) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
                foreach (array_slice($arr, $c) as $value) {
                    echo $value . ' ';
                };
            break;
        } 
    ?>

    <h3>Task3</h3>
    <?php
        function summ($a, $b){
            return $a + $b;
        }
        function diff($a, $b){
            return $a - $b;
        }
        function mult($a, $b){
            return $a * $b;
        }
        function division($a, $b){
            if($b != 0){
              return $a / $b;  
            } else {
               echo 'На 0 не делим, поэтому '; 
               return '???';
            }
            
        }

        echo 'Сумма 12 и 4 = ' . summ(12, 4) . '<br>';
        echo 'Разность 5 и 1 = ' . diff(5, 1) . '<br>';
        echo 'Произведение 6 на 6 = ' . mult(6, 6) . '<br>';
        echo 'Деление 15 на 5 = ' . division(15, 0) . '<br>';
    ?>

    <h3>Task 4</h3>
    <?php
        function calculate($arg1, $arg2, $operation){
            switch ($operation){
                case '+':
                    return summ($arg1, $arg2);
                break;
                case '-':
                    return diff($arg1, $arg2);
                break;
                case '*':
                    return mult($arg1, $arg2);
                break;
                case '/':
                    return division($arg1, $arg2);
                break;
                default:
                echo $arg1 .' '. $arg2;
            }
        };

        echo 'Summary of 21 and 4 = ' . calculate(21,4,'+') . '<br>';
        echo 'Division of 36 and 4 = ' . calculate(36,4,'/');
    ?>
    
    <h3>Task 6</h3>
    <?php
        function power($arg, $pow){
            if($pow == 1){
                return $arg;
            }
            $answer = $arg * power($arg,$pow-1);

            return $answer;
        }

        echo 'Power(3,4) = ' . power(3,4) . '<br>';
        echo 'Power(2,10) = ' . power(2,10);
    ?>

    <footer>
        <p>Current Year is <?php  echo date('Y')?></p>
    </footer>
</body>
</html>