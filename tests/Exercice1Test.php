<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Exercice1Test extends TestCase
{
    public function testIsBissexctile(): void
    {
        $this->assertEquals(True, Bissexctile::isBissexctile(2016));
        $this->assertEquals(True, Bissexctile::isBissexctile(2000));
    }

    public function testIsNotBissexctile(): void
    {
        $this->assertEquals(False, Bissexctile::isBissexctile(2015));
        $this->assertEquals(False, Bissexctile::isBissexctile(2023));

    }
}
