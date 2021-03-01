<?php

require_once "Animal.php";


// из класса Animal создадим объекты и добавим их в массив с животными

class AnimalCollection extends Animal
{
    private static $animals = [];

    public static function add($name, $min, $max, $count)
    {
        if (array_key_exists($name, self::$animals)) {
            for ($i = 1; $i <= $count; $i++) {
                self::$animals[$name][] = new Animal($min, $max);
            }
        } else {
            self::$animals[$name][] = new Animal($min, $max);
            if ($count - 1) {
                AnimalCollection::add($name, $min, $max, $count - 1);
            }
        }

    }

    public static function getAnimals()
    {
        return self::$animals;
    }
}