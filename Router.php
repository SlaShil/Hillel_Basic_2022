<?php
//Необходимо создать в папке core класс Router
//В Router создать метод run() который будет через var_export выдавать свойства класса.
//Необходимо подключить в index.php используя namespace класс Router
namespace Core;

class Router
{
    public int $test=100;
    public function run ($test)
    {
        var_export($this->test = $test);
    }
}