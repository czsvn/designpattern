<?php

namespace DesignPattern\Create\AbstractFactory;

class ConcreteFactory1 extends Factory
{
    public function createProductA()
    {
        return new ConcreteProductA1;
    }

    public function createProductB()
    {
        return new ConcreteProductB1;
    }
}
