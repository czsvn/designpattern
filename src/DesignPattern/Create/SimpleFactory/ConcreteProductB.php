<?php

namespace DesignPattern\Create\SimpleFactory;

class ConcreteProductB implements Product
{
	protected $name = 'B';

	public function use()
	{
		return 'product b';
	}
}
