<?php

namespace DesignPattern\Create\SimpleFactory;

class Factory
{
	public function createProduct($proname)
	{
		if ($proname === 'A') {
			return new ConcreteProductA;
		} else if ($proname === 'B') {
			return new ConcreteProductB;
		}

		return null;
	}
}
