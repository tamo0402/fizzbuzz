<?php

namespace CodeIQ\tests;

require_once 'PHPUnit/Framework/TestCase.php';
require_once '../FizzBuzzSpecification.php';

use CodeIQ\FizzBuzzSpecification;

class FizzBuzzSpecificationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider 指定された数で割り切れるかどうかの判定データ
     */
    public function 指定された数で割り切れるかどうかの判定($divisor, $number, $expected)
    {
        $spec = new FizzBuzzSpecification($divisor);
        $this->assertEquals($expected, $spec->isSatisfiedBy($number));
    }

    public function 指定された数で割り切れるかどうかの判定データ()
    {
        return [
            [1, 1, true],
            [1, 2, true],
            [2, 1, false],
            [2, 2, true],
            [2, 3, false],
            [3, 1, false],
            [3, 2, false],
            [3, 3, true],
            [3, 4, false],
        ];
    }
}