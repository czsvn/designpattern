<?php

namespace DesignPattern\Create\Builder;

class Product
{
    protected $partA;
    protected $partB;
    protected $partC;

    public function setPartA($name)
    {
        $this->partA = $name;
    }

    public function setPartB($name)
    {
        $this->partB = $name;
    }

    public function setPartC($name)
    {
        $this->partC = $name;
    }

    public function show()
    {
        return $this->partA . $this->partB . $this->partC;
    }
}
