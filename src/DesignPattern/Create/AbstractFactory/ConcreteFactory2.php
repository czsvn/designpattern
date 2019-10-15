<?php

namespace DesignPattern\Create\AbstractFactory;

class ConcreteFactory2 extends Factory
{
    public function createProductA()
    {
        return new ConcreteProductA2;
    }

    public function createProductB()
    {
        return new ConcreteProductB2;
    }
}
