<?php
/* Создать функцию формирования html списков для массива (списка).
Функция принимает одномерный массив (список), заголовок списка,
тип списка (обычный или нумерованный). Функция должна вернуть
html список указанного типа (ul или ol) с заголовком (h3)*/

$array=['red', 'black', 'green', 'blue'];
$h3='header';
function generateList(array $array, string $header, string $type): string
{
    if ($type !=='ol' && $type !=='ul')
    {
        return false;
    }

    $html= "<h3>$header</h3>";
    $html .="<$type>";
    foreach ($array as $itemList)
    {
        $html .="<li>$itemList</li>";
    }
    $html .="</$type>";
    return $html;
}
 echo generateList($array, $h3, 'ol');

