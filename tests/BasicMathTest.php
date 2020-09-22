<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class BasicMathTest extends TestCase
{
    public function testAdditionWorks(): void
    {
        $this->assertSame(2, 1 + 1);
    }

    public function testSubtractionWorks(): void
    {
        $this->assertSame(1, 2 - 1);
    }
}
