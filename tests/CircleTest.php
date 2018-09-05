<?php
namespace Test;

use Fes\Circle;

class CircleTest extends CommonTestCase
{
    /** @var Circle */
    private $circle;

    protected function setUp()
    {
        parent::setUp();
        $this->circle = new Circle();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function test_getFesName()
    {
        $this->assertEquals($this->circle->fes_name, $this->circle->getFesName());
    }

    public function test_isMusic()
    {
        $this->assertTrue($this->circle->isMusic());
    }

    public function test_isDrink()
    {
        $this->assertTrue($this->circle->isDrink());
    }

    public function test_isOutdoor()
    {
        $this->assertTrue($this->circle->isOutdoor());
    }

    public function test_isSunny()
    {
        $this->assertTrue($this->circle->isSunny());
    }

    public function test_getMemory()
    {
        $this->assertEquals($this->circle->memory, $this->circle->getMemory());
    }

}