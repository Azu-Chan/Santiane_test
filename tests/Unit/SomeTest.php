<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SomeTest extends TestCase
{
    /**
     * Some tests.
     *
     * @return void
     */
    public function testSomeTest()
    {
        $array = array(1, 2, 3, 4, 5, 6, 7);

        $this->assertSame(7, count($array));
        $this->assertSame(7, array_pop($array));
        $this->assertSame(6, count($array));
    }
}
