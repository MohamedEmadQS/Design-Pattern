<?php

interface DeviceFactory
{
    public function createTablet();
    public function createMobile();
}

class IphoneFactory implements DeviceFactory
{
    public function createTablet()
    {
        return new IphoneTablet();
    }
    public function createMobile()
    {
        return new IphoneMobile();
    }
}

class AndroidFactory implements DeviceFactory
{
    public function createTablet()
    {
        return new AndroidTablet();
    }
    public function createMobile()
    {
        return new AndroidMobile();
    }
}

interface Tablet
{
    public function call();
    public function touch();
}

interface Mobile
{
    public function press();
    public function call();
}

class IphoneTablet implements Tablet
{
    public function call()
    {
        echo 'IphoneTablet call';
    }
  
    public function touch()
    {
        echo 'IphoneTablet touch';
    }
}

class IphoneMobile implements Mobile
{
    public function press()
    {
        echo 'IphoneMobile press';
    }

    public function call()
    {
        echo 'IphoneMobile call';
    }
}

class AndroidTablet implements Tablet
{
    public function call()
    {
        echo 'AndroidTablet call';
    }
    public function touch()
    {
        echo 'AndroidTablet touch';
    }
}

class AndroidMobile implements Mobile
{
    public function press()
    {
        echo 'AndroidMobile press';
    }
    public function call()
    {
        echo 'AndroidMobile call';
    }
}

function clientCode(DeviceFactory $factory)
{
    $mobile = $factory->createMobile();
    echo "Client: I'm using " . get_class($mobile) . "\n" . "<br>";
    var_dump($mobile);
    $tablet = $factory->createTablet();
    echo "Client: I'm using " . get_class($tablet) . "\n" . "<br>";
    var_dump($mobile);
}

clientCode(new IphoneFactory());
echo "<br>";
echo "<hr>";
clientCode(new AndroidFactory());
