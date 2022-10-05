<?php
//посчитать длину массива
$arr_1 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr_1);
echo '<br>';

//переместить первые 4 элемента массива в конец массива
$arr_2 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$arr_2[] = array_shift($arr_2);
$arr_2[] = array_shift($arr_2);
$arr_2[] = array_shift($arr_2);
$arr_2[] = array_shift($arr_2);
var_dump($arr_2);
echo '<br>';




function slice(array $arr, int $start, int $count)
{
    for ($i = 0; $i < $count; $i++) {
        $arr[] = $arr[$i + $start - 1];
        unset($arr[$i + $start - 1]);
        echo '<br>';
    }
    return $arr;
}

$arr1 = slice([1,2,3,4,5,6,7,8,9,10], 3, 2);







//получить сумму 4,5,6 элемента
$arr_3 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sum = $arr_3[3]+$arr_3[4]+$arr_3[5];
echo $sum;
echo '<br>';

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$firstArr_1 = ['one' => 1,'two' => 2,'three' => 3, 'four' => 5,'five' => 12];
$secondArr_1 = ['one' => 1,'seven' => 22,'three' => 32,'four' => 5,'five' => 13,'six' => 37];
$result_1=array_diff($secondArr_1, $firstArr_1);
var_dump($result_1);
echo '<br>';

//найти все элементы которые присутствую в первом и отсутствуют во втором
$firstArr_2 = ['one' => 1,'two' => 2,'three' => 3, 'four' => 5,'five' => 12];
$secondArr_2 = ['one' => 1,'seven' => 22,'three' => 32,'four' => 5,'five' => 13,'six' => 37];
$result_2=array_diff($firstArr_2, $secondArr_2);
var_dump($result_2);
echo '<br>';

//найти все элементы значения которых совпадают
$firstArr_3 = ['one' => 1,'two' => 2,'three' => 3, 'four' => 5,'five' => 12];
$secondArr_3 = ['one' => 1,'seven' => 22,'three' => 32,'four' => 5,'five' => 13,'six' => 37];
$result_3=array_intersect($firstArr_3, $secondArr_3);
var_dump($result_3);
echo '<br>';

//найти все элементы значения которых отличается
$firstArr_4 = ['one' => 1,'two' => 2,'three' => 3, 'four' => 5,'five' => 12];
$secondArr_4 = ['one' => 1,'seven' => 22,'three' => 32,'four' => 5,'five' => 13,'six' => 37];
$result_4=array_diff($firstArr_4, $secondArr_4);
$result_5=array_diff($secondArr_4, $firstArr_4);
var_dump($result_4);
var_dump($result_5);
echo '<br>';







//получить все вторые элементы вложенных массивов


$ogran = [];
foreach ($firstArr1 as $value) {
    if (is_array($value)) {
        $counter = 0;
        foreach ($value as $itog) {
            $counter++;
            if ($counter == 2) {
                $ogran[] = $itog;
            }
        }
    }
}




$firstArr_5 = ['one' => 1,'two' => ['one' => 1,'seven' => 22,'three' => 32],'three' => ['one' => 1,'two' => 2],
    'four' => 5,'five' => ['three' => 32,'four' => 5,'five' => 12]];
//function arrRecursiveSum_1(array $firstArr_5)
//{
//    $result=0;
    foreach ($firstArr_5 as $key) {
        if (is_array($key)) {
            echo $firstArr_5[1];
//            $result += arrRecursiveSum_1($key);
//        } else {
//            $result += $key;
//        }
    }
//    return $result;
}
//var_dump(arrRecursiveSum_1($firstArr_5));
echo '<br>';









//получить общее количество элементов в массиве
$firstArr_6 = ['one' => 1,'two' => ['one' => 1,'seven' => 22,'three' => 32],'three' => ['one' => 1,'two' => 2],
    'four' => 5,'five' => ['three' => 32,'four' => 5,'five' => 12]];
var_dump(count($firstArr_6, COUNT_RECURSIVE));
echo '<br>';

//получить сумму всех значений в массиве
$firstArr_7 = ['one' => 1,'two' => ['one' => 1,'seven' => 22,'three' => 32],'three' => ['one' => 1,'two' => 2],
    'four' => 5,'five' => ['three' => 32,'four' => 5,'five' => 12]];
function arrRecursiveSum_2(array $firstArr_7)
{
    $result=0;
    foreach ($firstArr_7 as $value) {
        if (is_array($value)) {
            $result += arrRecursiveSum_2($value);
        } else {
            $result += $value;
        }
    }
    return $result;
}
var_dump(arrRecursiveSum_2($firstArr_7));





