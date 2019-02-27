<?php

require 'Calculator.php';

class CalculatorTests extends PHPUnit\Framework\TestCase
{

	private $calculator;

	public function setUp()
	{
		$this->calculator = new Calculator();
	}

	public function tearDown()
	{
		$this->calculator = null;
	}

	public function testApp()
	{
		$result = $this->calculator->add(1,3);
		$this->assertEquals(3, $result);
	}

	public function testAddWithZero()
	{
		$result = $this->calculator->add(0, 0);
		$this->assertEquals(0, $result);
	}

	public function testAddWithNegative()
	{
		$result = $this->calculator->add(-1, -1);
		$this->assertEquals(-2, $result);
	}

	public function addDataProvider()
	{
		return array(
			array(1,2,3),
			array(0,0,0),
			array(-1,-1,-2),
		);
	}

	/**
	* @dataProvider addDataProvider
	*/
	public function testAdd($a, $b, $expected)
	{
		$result = $this->calculator->add($a, $b);
		$this->assertEquals($expected, $result);
	}

	/** Double test incorporated */
	public function testWithStub()
	{
		// Created a stub for the Calculator class
		$Calculator = $this->getMockBuilder($calculator)->getMock();

		//Stub configured
		$Calculator->expects($this->any())->method('add')->will($this->returnValue(6));
		$this->assertEquals(6, $Calculator->add(100,100));
	}
}
?>
