<?php

namespace DesignPattern\Tests;

use DesignPattern\Create\Factory\ConcreteFactoryA;
use DesignPattern\Create\Factory\ConcreteFactoryB;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testRun()
    {
        $factory = new ConcreteFactoryA;
        $product = $factory->createProduct();
        $ret = $product->use();
        $this->assertEquals('product a', $ret);
    }

    public function testRunB()
    {
        $factory = new ConcreteFactoryB;
        $product = $factory->createProduct();
        $ret = $product->use();
        $this->assertEquals('product B', $ret);
    }
}
