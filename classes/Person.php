<?php
class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        echo $this->name . ' is breathing';
    }
}


$person = new Person();

$person->name = 'John';
$person->age = 21;


$person->breathe();
dd($person);
