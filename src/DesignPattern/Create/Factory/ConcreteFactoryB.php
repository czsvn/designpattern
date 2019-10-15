<?php

namespace DesignPattern\Create\Factory;

class ConcreteFactoryB extends Factory
{
    public function createProduct()
    {
        return new ConcreteProductB;
    }
}
