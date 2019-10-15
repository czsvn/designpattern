<?php

namespace DesignPattern\Create\Factory;

class ConcreteProductA implements Product
{
    public function use()
    {
        return 'product A';
    }
}
