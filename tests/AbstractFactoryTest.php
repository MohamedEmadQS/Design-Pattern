<?php


namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(1000, 500000);
        $benzCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $benzCar);
    }
    
    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(1000, 500000);
        $bmwCar = $carFactory->createBMWCar();
        
        $this->assertInstanceOf(BMWCar::class, $bmwCar);
    }
 

}
