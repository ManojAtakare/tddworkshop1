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
}