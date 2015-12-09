<?php

namespace vasac\travistest\tests;

use vasac\travistest\Sum;

class SumTest extends \PHPUnit_Framework_TestCase
{
    public function testPlus()
    {
        $this->assertSame(chr(195), Sum::plus('a', 'b'));
    }
}

