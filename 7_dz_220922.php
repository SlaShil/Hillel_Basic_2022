<?php

/* Создать родительский (главный класс)
Класс должен содержать 2 свойства
Каждое свойство должно иметь геттеры и сеттеры
должен содержать абстрактную функцию возведения в степень */
 abstract class ClassName_Main
 {
     public int $test;
     public function set_test (int $t): void
     {
         $this->test = $t;
     }

     public function tt ($test)
     {
         return $this->test*$test;
     }

     public function get_test(): int
     {
         return $this->test;
     }

     public string $string = 'test';
     public function set_string (int $s): void
     {
         $this->test = $s;
     }

     public function get_string(): int
     {
         return $this->test;
     }

     abstract public function square ($num);
 }
/* Создать 3 наследника родительского класса, Каждый наследник должен содержать одно свойство
Каждое свойство должно иметь геттер и сеттер, Наследники должны реализовать по одному методу
который выполняет одно математическое действие с данными родителя и своими данными
Один наследник не должен быть наследуемым */
class ClassName_1 extends ClassName_Main
{
    public int $test_1=100;
    public function set_test_1 (int $t_1): void
    {
        $this->test_1 = $t_1;
    }

    public function get_test_1(): int
    {
        return $this->test_1;
    }

    public function square($num)
    {
        $square = $num*$num;
        return $square;
    }
}
$obj1 = new ClassName_1;
    echo $obj1->square(2)+$obj1->test_1;

class ClassName_2 extends ClassName_Main
{
    public int $test_2=200;
    public function set_test_2 (int $t_2): void
    {
        $this->test_2 = $t_2;
    }

    public function get_test_2(): int
    {
        return $this->test_2;
    }

    public function square($num)
    {
        $square = $num*$num;
        return $square;
    }
}
$obj2 = new ClassName_1;
    echo $obj2->square(3)+$obj2->test_1;

final class ClassName_3 extends ClassName_Main
{
    public int $test_3 = 300;
    public function set_test_3 (int $t_3): void
    {
        $this->test_3 = $t_3;
    }

    public function get_test_3(): int
    {
        return $this->test_3;
    }

    public function square($num)
    {
        $square = $num*$num;
        return $square;
    }
}

$obj3 = new ClassName_1;
    echo $obj3->square(4)+$obj1->test_1;