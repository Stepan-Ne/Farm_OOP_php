<?php

require_once "AnimalCollection.php";

class Farm
{

    private static $result = [];

    public static function addAnimal($name, $min, $max, $count = 1)
    {
        AnimalCollection::add($name, $min, $max, $count);
    }

    public static function getProducts()
    {
        $arr = AnimalCollection::getAnimals();
// создадим массив: животное => продукт
        foreach ($arr as $key => $elem) {
            $sum = 0;
            foreach ($elem as $val) {
                $sum += $val->product;
            }
            Farm::$result[$key] = $sum;
        }
        return Farm::$result;
    }

    public static function showProduct()
    {
        $arr = Farm::getProducts();
        foreach ($arr as $key => $value) {
            echo $key . " - " . $value . "<br>";
        }
    }
}



