<?php

class Animal
{
    private $id;
    private $minimum;
    private $maximum;
    public $product;


    public function __construct($min, $max)
    {
        $this->minimum = $min;
        $this->maximum = $max;
        $this->id = $this->getId();
        $this->product = $this->getProduct();
    }

    private function getId()
    {
        $id = uniqid();
        return $id;
    }

    public function getProduct()
    {
        return mt_rand($this->minimum, $this->maximum);
    }
}