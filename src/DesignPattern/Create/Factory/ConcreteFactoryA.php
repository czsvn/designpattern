<?php

namespace DesignPattern\Create\Factory;

use DesignPattern\Create\SimpleFactory\ConcreteProductA;

class ConcreteFactoryA extends Factory
{
    public function createProduct()
    {
        return new ConcreteProductA;
    }
}
