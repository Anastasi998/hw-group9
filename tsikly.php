<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="keywords" content="курсы, php, html">
    <meta name="deskription" content="Циклы, php, html">
    <link rel="stylesheet" href="style/style.css">
	<title>Циклы</title>
</head>
<body>
<?php include 'header.php';?> 

<main style="color: black;">
    <div>
        <h3>Задача 1</h3>
        <p>Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10?</p>
        <?  
			 $i = 1;
			 $count=0;
            for($x = 1, $y=1, $s=0; $s<=10; $i++){
                $s+=$x/$y;
                $x+=3;
                $y++;
				$count++;
            }
             echo "Ответ: $count <br>";
        ?>
    </div>
    <div>
        <h3>Задача 2</h3>
        <p>Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого 
		(итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</p>
		

        <? 
            $num=1000;
            $counter = 0;
            while($num>50){
                $num = $num/2;
                $counter++;
            }
		    echo "Ответ: ";
            echo "Через while: $counter <br>";
            $num=0;
               for ($n=1000;$n>50;$n/=2) {
               $num++;
               }

			echo 'Через for: '.$num; 
            echo "<br>";
	    ?>
    </div>
	
    <div>
        <h3>Задача 3</h3>
        <p>Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». 
		Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». 
		Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</p>
        <?
            $i=mt_rand(0,9);
			echo "i= $i";
            echo "<br>";
            for($b=0; $b<=10-$i; $b++){
                $b==10-$i; 
				echo "$b, ";
            }
        ?>
    </div>
	
    <div>
        <h3>Задача 4 (Вариативная часть) </h3>
        <p> Дана  последовательность,  состоящая из дробей: 1/1, 3/2, 5/3, 7/4, ... 
		Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10?</p>
        
		<?
            $i = 1;
            for($x = 1, $y=1, $s=0; $s<=10; $i++){
                $s = $x/$y + $s;
                $x+=2;
                $y++;
            }
            echo "Ответ: $i <br>";
        ?>
    </div>
	
	<div>
	<h3> 13 слайд 1 задача </h3>
	<p>Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную result.<p>
	
	<?php
	$arr=array(50, 45, 40, 35, 30);
	$result=array_sum($arr);
	print "Результат ";
	echo  $result ;
	?>
	</div>
	
	<div>
	<h3> 13 слайд 2 задача </h3>
	<p>Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.<p>
	
	<?php
	$numbers = array();
	for ($i=0; $i < 10; $i++) {
    $numbers[$i] = rand(-100,500);
    }
	$reversed = array_reverse($numbers);
	$numbers= implode(', ',$numbers);
	$reversed = implode(', ',$reversed);
	print "Массив: ";
	print_r($numbers);
	print "<br/> Массив в противоположном порядке: ";
	print_r($reversed);
	?>
	</div>
	
	<div>
	<h3> 13 слайд 3 задача </h3>
	<p>Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.<p>
	
	<?php
	$input = array("cat.png", "dog.png", "people.png", "tank.png", "flowers.png");
	$rand_keys = array_rand($input, 2);
	print "Картинка: ";
	echo $input[$rand_keys[0]] . "\n";
	?>
	</div>
	
	<div>
	<h3> 13 слайд 4 задача </h3>
	<p>Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.<p>
	
	<?php
$array = array();

for ($i=0; $i < 10; $i++) {
$array[$i] = rand(-100,100);
}
$result = implode(',',$array );
echo $result;

foreach($array as $key => $value)
    if($value >= 0)
        unset($array[$key]);
echo "<br/>";
echo empty($array) ? 'Чисел меньше 0 нет.' : 'Максимальное отрицательное число: ' . min($array);
echo "<br/>";
echo "<br/>";

$array = array();

for ($i=0; $i < 10; $i++) {
$array[$i] = rand(-100,100);
}
$result = implode(',',$array );
echo $result;

foreach($array as $key => $value)
    if($value <= 0)
        unset($array[$key]);
echo "<br/>";
echo empty($array) ? 'Чисел больше 0 нет.' : 'Минимальное положительное число: ' . min($array);
	?>
	</div>
	
	<div>
	<h3>14 слайд 1 задача </h3>
	<p>Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. 
	Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.<p>
	
	<?php
    $matematica=array();
for ($i=0; $i < 10; $i++) {
$matematica[$i] = rand(2,5);
}
if(count($matematica)) {
    $matematica = array_filter($matematica);
	echo "Средняя оценка: " . $average = array_sum($matematica)/count($matematica) . "<br/>";
}
echo "Сумма оценок по математике: " . array_sum($matematica) . "<br/>";
$matematica = implode(',',$matematica );
echo "Математика: ";
echo $matematica;
echo "<br/> <br/>";

$fizica=array();
for ($i=0; $i < 10; $i++) {
$fizica[$i] = rand(2,5);
}
if(count($fizica)) {
    $fizica = array_filter($fizica);
	echo "Средняя оценка: " . $average = array_sum($fizica)/count($fizica) . "<br/>";
}
echo "Сумма оценок по физике: " . array_sum($fizica) . "<br/>";
$fizica = implode(',',$fizica );
echo "Физика: ";
echo $fizica;
echo "<br/> <br/>";

$ximia=array();
for ($i=0; $i < 10; $i++) {
$ximia[$i] = rand(2,5);
}
echo "Сумма оценок по химии: " . array_sum($ximia) . "<br/>";
if(count($ximia)) {
    $ximia = array_filter($ximia);
	echo "Средняя оценка: " . $average = array_sum($ximia)/count($ximia) . "<br/>";
}
$ximia = implode(',',$ximia );
echo "Химия: ";
echo $ximia;
echo "<br/> <br/>";

$informatica = array();
for ($i=0; $i < 10; $i++) {
$informatica[$i] = rand(2,5); 
}

echo "Сумма оценок по информатике: " . array_sum($informatica) . "<br/>";
if(count($informatica)) {
    $informatica = array_filter($informatica);
	echo "Средняя оценка: " . $average = array_sum($informatica)/count($informatica) . "<br/>";
}
$informatica = implode(',',$informatica );
echo "Информатика: ";
echo $informatica;

	?>
	</div>
	
	<div>
	<h3>14 слайд 2 задача </h3>
	<p>Известна среднемесячная температура воздужа на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити.
Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.<p>
	
	<?php
    $sred_temp = ['Куба'=>[], 'Тринидад'=>[], 'Ямайка'=>[], 'Гаити'=>[]];
    foreach($sred_temp as $count=>$temp){
        for($i=0; $i<12; $i++){
            $sred_temp[$count][]  = mt_rand(-15,35);
        }
    }
    $max_temp = ['Куба'=>[], 'Тринидад'=>[], 'Ямайка'=>[], 'Гаити'=>[]];
    foreach($sred_temp as $count=>$temps){
        $max=[0,0];
        foreach($temps as $key=>$temp){
            if($max[1]<$temp){
                $max[1] = $temp;
                $max[0] = $key;
            }
        }
        $max_temp[$count]=$max;
    }
    foreach($max_temp as $count=>$info){
        echo "Максимальная температура в $count достигала $info[1] градусов в ".$info[0]+1 ." месяце <br>";
    }

	?>
	</div>
	
	<div>
	<h3>14 слайд 3 задача </h3>
	<p>Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.<p>
	
	<?php
    $array1 = array(
    0 => array(34, 45, 54, 35, 75, 12),
    1 => array(56, 76, 38, 13, 82, 18),
    2 => array(45, 35, 98, 16, 85, 35),
    3 => array(45, 89, 34, 14, 97, 46),
	4 => array(23, 12, 89, 23, 56, 86),
);
echo "1: ";
$x = max(array(34, 45, 54, 35, 75, 12));
echo $x;
echo "<br/> 2: ";
$y = max(array(45, 35, 98, 16, 85, 35));
echo $y;
echo "<br/> 3: ";
$z = max(array(23, 12, 89, 23, 56, 86));
echo $z;
$i = $x+$y+$z;
echo "<br/> Сумма:" . $i . "<br/>";
?>
	</div>
	
	<div>
	<h3>15 слайд 1 задача </h3>
	<p>Создать двумерный массив произвольной длины, содержащий стоковые значения. Необходимо вывести все Элементы массива, начинающиеся на А.</p>
	
	<?php
    $arr = [
    'Имя женское'=> ['Анна', 'Женя','Лидия','Мария', 'Алия','Снежана'],
    'Имя мужское'=> ['Марк','Андрей','Рустам','Артём','Егор','Николай'],
    'Фамилия' => ['Аксёнов','Солдатов','Шастун','Новикова','Серова','Щербаков']
    ];
    echo '<pre>';
    print_r($arr);

    foreach ($arr as $key => $value) {
	foreach ($value as $a) {
		if (mb_strpos($a,'А') === 0) {
			echo "<br> Слова на букву А $a <br>";
		}
	}
    }
    ?>
	</div>
    
	<div>
	<h3>15 слайд 2 задача </h3>
	<p>Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива для каждого измерения.</p>
	
	<?php
    $arr = array(
    0 => array(34, 45, 54, 35, 75, 12, 45, 54, 35),
    1 => array(56, 76, 38, 13, 82, 18),
    2 => array(45, 35, 98, 16, 85, 35,12, 89,12, 89,12, 89,12, 89,12, 89,12, 89,),
    3 => array(45, 89, 34, 14, 97, 46, 45, 54, 35, 45, 54, 35,),
	4 => array(23, 23, 56, 86),
);
$a = 0;
for ($i = 0;$i < count($arr) ;$i++) {
 for ($j = 0;$j < count($arr[$i]);$j++) {
       echo $arr[$i][$j]; 
       $a++;
    }
    echo '<br>';
}
echo "Общее количество элементов = $a";
for ($i = 0;$i < count($arr) ;$i++) {
	$b = 0;
 for ($j = 0;$j < count($arr[$i]);$j++) {
       $a++;
       $b++;
    }
    echo "<br>Количество элементов в $i-том измерении =$b";
}
    ?>

	<h3>2 задача </h3>
	<p>Дано N целых случайных чисел в диапазоне от 1 до 100.  Найти сумму четных и количество нечетных чисел.</p>
	
	<?php
    $array  = array();
	 for ($i=0; $i < 10; $i++) {
    $array[$i] = rand(1,100);
	}
	print_r($array);
    $sum = array_sum(array_filter($array, fn($x) => ($x % 2 == 0)));
    echo "<br> Сумма четных значений массива:  " . $sum;
	
	$odd = array_filter($array, function($x) { return $x & 1;});

echo "<br> Нечетные:\n";
print_r($odd);
echo "<br> <br>";
    ?>
	<?php include 'footer.php';?> 
</body>
</html>
	

	
