<?php

interface Builder
{
    function producePart1();
    function producePart2();
    function producePart3();
}
class ConcreteBuilder1 implements Builder
{

    public $product;
    public function __construct()
    {
        $this->product = new Product1();
    }
    public function producePart2()
    {
        $this->product->parts[] = "PartA2";
    }
    public function producePart3()
    {
        $this->product->parts[] = "PartA3";
    }
    public function producePart1()
    {
        $this->product->parts[] = "PartA1";
    }
    public function getProduct(): Product1
    {
        return $this->product;
    }
}
class Product1
{
    public $parts = [];
    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Director
{
    private $builder;
    function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }
    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePart1();
    }

    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePart1();
        $this->builder->producePart2();
        $this->builder->producePart3();
    }
}
function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);

    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();
    echo "<br>";

    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);
    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();
    echo "<br>";

    $builder = new ConcreteBuilder1();
    echo "Custom product:\n";
    $builder->producePart1();
    $builder->producePart3();
    $builder->getProduct()
    ->listParts();
    echo "<br>";
}

$director = new Director();
clientCode($director);
