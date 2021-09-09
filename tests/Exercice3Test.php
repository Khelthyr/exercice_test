<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Exercice3Test extends TestCase
{
    public function testOne()
    {
        $this->assertEquals(true, Balanced::balance("()"));
    }

    public function testTwo()
    {
        $this->assertEquals(true, Balanced::balance("(foo(bar))"));
    }

    public function testThree()
    {
        $this->assertEquals(false, Balanced::balance(")()()"));
    }

    public function testFour()
    {
        $this->assertEquals(false, Balanced::balance("()()("));
    }
}