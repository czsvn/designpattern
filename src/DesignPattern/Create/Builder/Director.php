<?php

namespace DesignPattern\Create\Builder;

class Director
{
    protected $builder;

    public function __construct(ConcreteBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function construct()
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();

        return $this->builder->getResult();
    }
}
