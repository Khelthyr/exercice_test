<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Exercice3Test extends TestCase
{
    public function test1()
    {
        $this->assertEquals(true, Balanced::balance('(())'));
    }

    public function test2()
    {
        $this->assertEquals(true, Balanced::balance('(foo(bar))'));
    }

    public function test3()
    {
        $this->assertEquals(true, Balanced::balance('foo'));
    }

    public function test4()
    {
        $this->assertEquals(false, Balanced::balance('())'));
    }

    public function test5()
    {
        $this->assertEquals(false, Balanced::balance('((foo)'));
    }

    public function test6()
    {
        $this->assertEquals(false, Balanced::balance(')(()'));
    }

    
}