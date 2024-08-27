<?php
interface DeviceFactory
{
    public function createTablet(): AbstractTablet;
    public function createMobile(): AbstractMobile;
}
interface AbstractTablet
{
    public function useTablet();
}
interface AbstractMobile
{
    public function usePhone();
}

class ConcreteIphoneFactory implements DeviceFactory
{

    public function createTablet(): AbstractTablet
    {
        return new IphoneTablet();
    }
    public function createMobile(): AbstractMobile
    {
        return new IphoneMobile();
    }
}
class concreteSamsungFactory implements DeviceFactory
{

    public function createTablet(): AbstractTablet
    {
        return new SamsungTablet();
    }
    public function createMobile(): AbstractMobile
    {
        return new SamsungMobile();
    }
}

class IphoneTablet implements AbstractTablet
{
    public function useTablet()
    {
        // do something
    }
}
class IphoneMobile implements AbstractMobile
{
    public function usePhone()
    {
        // do something
    }
}
class SamsungTablet implements AbstractTablet
{
    public function useTablet()
    {
        // do something
    }
}
class SamsungMobile implements AbstractMobile
{
    public function usePhone()
    {
        // do something
    }
}

//client

class Device
{
    public function __construct(protected DeviceFactory $factory) {
    }
    public function createIphoneTablet(): AbstractTablet
    {
        return $this->factory->createTablet();
    }
    public function createIphoneMobile(): AbstractMobile
    {
        return $this->factory->createMobile();
    }

    public function createSamsungTablet(): AbstractTablet
    {
        return $this->factory->createTablet();
    }

    public function createSamsungMobile(): AbstractMobile
    {
        return $this->factory->createMobile();
    }
}
$samsungDevice = new Device(new concreteSamsungFactory());
$iphoneDevice = new Device(new concreteIphoneFactory());

var_dump($device);
echo "<br>";
$tabletIphone = $iphoneDevice->createIphoneTablet();
var_dump($tabletIphone);
echo "<br>";
$tabletIphone = $iphoneDevice->createIphoneMobile();
var_dump($tabletIphone);
echo "<br>";
$tabletIphone = $samsungDevice->createSamsungTablet();
var_dump($tabletIphone);
echo "<br>";
$tabletIphone = $samsungDevice->createSamsungMobile();
var_dump($tabletIphone);
