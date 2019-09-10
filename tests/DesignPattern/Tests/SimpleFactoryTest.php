<?php

namespace DesignPattern\Tests;

use DesignPattern\Create\SimpleFactory\Factory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
	public function testRun()
	{
		$factory = new Factory;
		$product = $factory->createProduct('A');
		$ret = $product->use();
		$this->assertEquals('product a', $ret);
		$this->assertAttributeEquals('A', 'name', $product);
	}

	public function testRunB()
	{
		$factory = new Factory;
		$product = $factory->createProduct('B');
		$ret = $product->use();
		$this->assertEquals('product b', $ret);
		$this->assertAttributeEquals('B', 'name', $product);
	}
}
