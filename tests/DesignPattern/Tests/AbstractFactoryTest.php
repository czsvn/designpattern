<?php

namespace DesignPattern\Tests;

use PHPUnit\Framework\TestCase;
use DesignPattern\Create\AbstractFactory\ConcreteFactory1;
use DesignPattern\Create\AbstractFactory\ConcreteFactory2;

class AbstractFactoryTest extends TestCase
{
    public function testRun()
    {
        $factory = new ConcreteFactory1;
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();
        $ret1 = $productA->use();
        $ret2 = $productB->eat();
        $this->assertEquals('product a1', $ret1);
        $this->assertEquals('product b1', $ret2);
    }

    public function testRunB()
    {
        $factory = new ConcreteFactory2;
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();
        $ret1 = $productA->use();
        $ret2 = $productB->eat();
        $this->assertEquals('product a2', $ret1);
        $this->assertEquals('product b2', $ret2);
    }
}