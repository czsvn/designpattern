<?php

namespace DesignPattern\Create\Builder;

class ConcreteBuilder extends Builder
{

    public function buildPartA()
    {
        $this->product->setPartA("建造A");
    }

    public function buildPartB()
    {
        $this->product->setPartB("建造B");
    }

    public function buildPartC()
    {
        $this->product->setPartC("建造C");
    }
}
