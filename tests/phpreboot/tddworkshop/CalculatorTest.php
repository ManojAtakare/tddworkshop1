<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 21/6/18
 * Time: 2:50 PM
 */

namespace Tests\Phpreboot;

use Phpreboot\tddworkshop\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
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

    public function testAddReturnsAnInteger()
    {
        $result = $this->calculator->add('6,4');

        $this->assertSame(10, $result, 'Add with two parameter do not returns correct sum');
    }

    public function testMultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('6,4');

        $this->assertSame(24, $result, 'Add with two parameter do not returns correct sum');
    }




    public function test2AddReturnsAnInteger()
    {
        $result = $this->calculator->add('4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2');

        $this->assertSame(133, $result, 'Add with two parameter do not returns correct sum');
    }

    public function test2MultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2');

        $this->assertSame(677503346688000000, $result, 'Add with two parameter do not returns correct sum');
    }




    public function test3AddReturnsAnInteger()
    {
        $result = $this->calculator->add('2\n3,4');

        $this->assertSame(9, $result, 'Add with two parameter do not returns correct sum');
    }

    public function test3MultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('2\n3,4');

        $this->assertSame(24, $result, 'Add with two parameter do not returns correct sum');
    }


    public function test4AddReturnsAnInteger()
    {
        $result = $this->calculator->add("\\@\\3@4@5");

        $this->assertSame(12, $result, 'Add with two parameter do not returns correct sum');
    }

    public function test4MultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('\\@\\3@4@5');

        $this->assertSame(60, $result, 'Add with two parameter do not returns correct sum');
    }


    public function test5AddReturnsAnInteger()
    {
        $result = $this->calculator->add("\\,\\2,7,3,5,2");
        $this->assertSame(19, $result, 'Add with two parameter do not returns correct sum');
    }


    public function test5MultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('\\,\\2,7,3,5,2');

        $this->assertSame(420, $result, 'Add with two parameter do not returns correct sum');
    }


    public function test6AddReturnsAnInteger()
    {
        $result = $this->calculator->add("\\,\\2,7,3,5,2");
        $this->assertSame(19, $result, 'Add with two parameter do not returns correct sum');
    }


    public function test6MultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('\\,\\2,7,3,5,2');

        $this->assertSame(420, $result, 'Add with two parameter do not returns correct sum');
    }



    public function test7AddReturnsAnInteger()
    {
        $result = $this->calculator->add("10,20,1010,20");

        $this->assertSame(50,$result, 'Add with two parameter do not returns correct sum');
    }

    public function test7MultiplyReturnsAnInteger()
    {
        $result = $this->calculator->mul('10,20,1010,20');

        $this->assertSame(4000, $result, 'Add with two parameter do not returns correct sum');
    }
}