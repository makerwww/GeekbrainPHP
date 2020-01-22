<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

	<h3>Task 1</h3>
	<?php
		$i = 0;

		while($i < 100){
			if($i%3 == 0){
				echo $i . ' ';
			}	$i++;;
			
		}
	?>

	<h3>Task 2</h3>
	<?php
		$j = 0;

		do{
			if($j == 0){
			echo $j . ' - ноль <br>';
			$j++;
			} elseif($j%2 == 0){
				echo $j . ' - четное число <br>';
				$j++;
			} else {echo $j . ' - нечетное число <br>'; $j++;}
		} while($j < 10);

	?>

	<h3>Task 3</h3>
	<?php
		$russia = [
		'Московская область' => ['Москва', 'Зеленоград', 'Клин', 'Коломна'],
		'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск'],
		'Рязанская область' => ['Рязань', 'Касимов', 'Скопин'],
		];

		foreach($russia as $key => $val){
		echo '<br>' . $key . ': ' . implode(', ', $val) . ';<br>';
	}
	?>

	<h3>Task 4</h3>
	<?php
		mb_internal_encoding("UTF-8");

		$string = 'New string to check' ;
		

		// function transliteStr($str){
		// 	$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
		// 	$lettersArr = ['а' => 'a', 'б' => 'b', 'в' => 'v','г' => 'g', 'д' => 'd', 'е' => 'e','ж' => 'zh', 'з' => 'z', 'и' => 'i','й' => 'j', 'к' => 'k', 'л' => 'l','м' => 'm', 'н' => 'n', 'о' => 'o','п' => 'p', 'р' => 'r', 'с' => 's','т' => 't', 'у' => 'u', 'ф' => 'f','х' => 'h', 'ц' => 'ts', 'ч' => 'ch','ш' => 'sh', 'щ' => 'shch', 'ы' => 'y','э' => 'e', 'ю' => 'yu', 'я' => 'ya'];

		// 	foreach($chars as $val){
		// 		print_r($val);
		// 		if(array_key_exists($val, $lettersArr)){
		// 		$val = $lettersArr[$val];
		// 		} echo 'error';
		// 	}
		// 	return implode('' ,$chars);
		// }
		// echo transliteStr($string);
	?>

	<h3>Task 5</h3>
	<?php
		function replaceSpace($str){
			echo 'Input string: ' . $str . '<br>';
			// $strToArr = mb_ereg_replace('/\s/','/_/',$str);
			$strToArr = str_replace(' ', '_', $str);
			return $strToArr;
		}
		echo replaceSpace($string);
	?>

	<h3>Task 6</h3>
	<?php
	$webMenu = [
		'Level1.1' => [],
		'Level1.2' => ['Level2.1', 'Level2.2'],
		'Level1.3' => []
	];
		echo '<ul>';
				foreach ($webMenu as $key => $value) {
					if(count($value) > 0){
						echo '<li><a href=\'#\'>' .$key. '</a><ul>';
							foreach($value as $val) {
								echo '<li><a href=\'#\'>' . $val . '</a></li>';
							}
						echo '</ul></li>';
							
					}else {
						echo '<li><a href=\'#\'>' . $key . '</a></li>';
					}
				}
		echo '</ul>';
	?>

	<h3>Task 7</h3>
	<?php
		for($k = 0; $k < 10; print($k++ . ' ')){
			//Empty empty empty
		};
	?>

	<h3>Task 8</h3>
	<?php
	foreach($russia as $key => $val){
		echo $key . ': ';
		foreach($val as $cityName){
			if(mb_substr($cityName, 0, 1) == 'К') echo $cityName . ', ';
		}
		echo ';<br>';
	}
	?>

	<h3>Task 9</h3>
	<?php

	?>

</body>
</html>