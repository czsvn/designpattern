<?php

namespace DesignPattern\Create\Builder;

abstract class Builder
{
    protected $product;
    
    public function __construct()
    {
        $this->product = new Product();
    }

    abstract public function buildPartA();

    abstract public function buildPartB();

    abstract public function buildPartC();

    public function getResult()
    {
        return $this->product;
    }
}