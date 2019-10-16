<?php

namespace DesignPattern\Tests;

use DesignPattern\Create\Builder\ConcreteBuilder;
use DesignPattern\Create\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testRun()
    {
        $builder = new ConcreteBuilder();
        $director = new Director($builder);
        $product = $director->construct();

        $ret = $product->show();
        $this->assertEquals($ret, '建造A建造B建造C');
    }
}
