<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class CommonTestCase extends TestCase
{
    protected $expected;
    protected $actual;

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    protected function verify($msg = null)
    {
        $this->assertEquals($this->expected, $this->actual, $msg);
    }

    public function test_no_test()
    {
        $this->assertEquals(1,1);
    }
}