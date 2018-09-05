<?php
namespace Test;

use Fes\MatsuriMIYAZAKI;

class MatsuriMIYAZAKITest extends CommonTestCase
{
    /** @var MatsuriMIYAZAKI */
    private $m_miyazaki;

    protected function setUp()
    {
        parent::setUp();
        $this->m_miyazaki = new MatsuriMIYAZAKI();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function test_getFesName()
    {
        $this->assertEquals($this->m_miyazaki->fes_name, $this->m_miyazaki->getFesName());
    }

    public function test_isMusic()
    {
        $this->assertTrue($this->m_miyazaki->isMusic());
    }

    public function test_isDrink()
    {
        $this->assertTrue($this->m_miyazaki->isDrink());
    }

    public function test_isOutdoor()
    {
        $this->assertTrue($this->m_miyazaki->isOutdoor());
    }

    public function test_isSunny()
    {
        $this->assertTrue($this->m_miyazaki->isSunny());
    }

    public function test_getMemory()
    {
        $this->assertEquals($this->m_miyazaki->memory, $this->m_miyazaki->getMemory());
    }

}