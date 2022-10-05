<?php

for($i = 1; $i <= 50; $i++)
{
    $arr[] = rand(1,200);
}

//Сумма всех элементов массива
echo array_sum($arr);
echo '<br>' . '<br>';

//Среднее всех элементов массива (среднее арифметическое)
$countArr = count($arr);
$sumArr = array_sum($arr);
echo $sumArr/$countArr;
echo '<br>' . '<br>';

//Вывести 5 минимальных чисел из массива
sort($arr);
$minFirst = array_splice($arr, 0,5);
print_r($minFirst);
echo '<br>' . '<br>';

//Вывести 5 максимальных чисел из массива.
rsort($arr);
$maxFirst = array_splice($arr, 0,5);
print_r($maxFirst);
echo '<br>' . '<br>';

//Отсортированный массив по возрастанию
sort($arr);
print_r($arr);
echo '<br>' . '<br>';

//Отсортированный массив по убыванию
rsort($arr);
print_r($arr);
echo '<br>' . '<br>';

