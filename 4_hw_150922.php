<?php
/* Создать функцию принимающую массив произвольной вложенности
и определяющий любой элемент номер которого передан параметром
во всех вложенных массивах */
$arr = [15,[10,20,[1,2,3,4,5],30,40,50],25,35,45,55];
function arrayParse(array $arr, int $externalKey): array
{
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
 //             $result = array_merge($result, arrayParse($value, $externalKey));
                $result = arrayParse($value, $externalKey);
        } else {
            if ($key === $externalKey) {
                $result[] = $value;
            }
        }
    }
    return $result;
}
var_dump(arrayParse($arr, 4));
echo '<br>';

/* Создать функцию которая считает все буквы b в переданной строке,
в случае если передается не строка функция должна возвращать false */
function count_b($str) {
    if(is_string($str)){
        echo substr_count($str, 'b');}
             else
             {   echo 'false';
        }
}
count_b('Bob was born in Berlin');
echo '<br>';
count_b(22.15);
echo '<br>';

// Вариант 2
$testStr = 'Bob was born in Berlin';
$subStr = 'b';

function searchSubStr($needle, $haystack): int|bool
{
    if (is_string($needle)) {
        return substr_count($needle, $haystack);
    } else {
        return false;
    }
}
var_dump(searchSubStr($testStr, $subStr));
echo '<br>';

/* Создать функцию которая считает сумму значений всех элементов массива произвольной глубины */
$massive = [15,[10,20,[1,2,3,4,5],30,40,50],25,35,45,55];
function summary($massive): int
{
    $summa=0;
    foreach ($massive as $value) {
        if(is_array($value)){
            $summa += summary($value);
        }
        else $summa += $value;
    }
    return $summa;
}
echo summary($massive);
echo '<br>';

/* Создать функцию которая определит сколько квадратов меньшего размера
можно вписать в квадрат большего размера размер возвращать в float */
function square(int $big, int $small): float
{
    $area_big=$big*$big;
    $area_small=$small*$small;
    $diff=$area_big/$area_small;
    return $diff;
}
$answer=square(19, 9);
var_dump($answer);