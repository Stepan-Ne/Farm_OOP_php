<?php

// FARM

require_once 'Farm.php';

// Добавляем животных
Farm::addAnimal('Cows', 8, 12, 10);
Farm::addAnimal('Hens', 0, 1, 20);


echo "FARM: <br>";
// Получаем результат
Farm::showProduct();