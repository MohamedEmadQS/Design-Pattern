<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\BenzCar;

class CarAbstractFactory
{
    private $taxes;
    private $price;

    public function __construct($taxes, $price)
    {
        $this->taxes = $taxes;
        $this->price = $price;
    }

    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }
    
    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->taxes);
    }
}
