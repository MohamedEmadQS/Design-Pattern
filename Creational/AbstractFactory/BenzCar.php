<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterface;

class BenzCar implements CarInterface
{
    private $price;
    private $taxes;

    public function __construct($price, $taxes)
    {
        $this->price = $price;
        $this->taxes = $taxes;
    }

    public function calculatePrice(){
        return $this->price + $this->taxes;
    }
}
