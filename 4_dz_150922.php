<?php
/* Создать функцию принимающую массив произвольной вложенности
и определяющий любой элемент номер которого передан параметром
во всех вложенных массивах */


/* Создать функцию которая считает все буквы b в переданной строке,
в случае если передается не строка функция должна возвращать false */
function count_b($str) {
    if(is_string($str)){
        echo substr_count($str, 'b');}
             else
             {   echo 'false';
        }
}
count_b('Mary born in Berlin in november');
echo '<br>';
count_b(22.15);
echo '<br>';

/* Создать функцию которая считает сумму значений всех элементов массива произвольной глубины */
function summary($arr) {
    $summa=0;
    foreach ($arr as $value) {
        $summa += $value;
    }
    return $summa;
}
 $massive=array(30,20,10);
echo summary($massive);
echo '<br>';

/* Создать функцию которая определит сколько квадратов меньшего размера
можно вписать в квадрат большего размера размер возвращать в float */
function square($big, $small){
    $area_big=$big*$big;
    $area_small=$small*$small;
    $diff=$area_big/$area_small;
    return $diff;
}
$answer=square(18, 12);
var_dump($answer);