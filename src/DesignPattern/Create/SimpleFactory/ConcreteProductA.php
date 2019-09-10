<?php

namespace DesignPattern\Create\SimpleFactory;

class ConcreteProductA implements Product
{
	protected $name = 'A';
	
	public function use()
	{
		return 'product a';
	}
}
