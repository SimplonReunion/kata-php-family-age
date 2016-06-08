<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testFamilyOne()
    {
        $this->assertEquals([6, 82, 76], differenceInAges([82, 15, 6, 38, 35]));
    }

    public function testFamilyTwo()
    {
        $this->markTestSkipped();
        $this->assertEquals([14, 99, 85], differenceInAges([57, 99, 14, 32]));
    }
}
