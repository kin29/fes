<?php
namespace Test;

use Fes\AoshimaBeachParkFes;

class AoshimaBeachParkFesTesT extends CommonTestCase
{
    /** @var AoshimaBeachParkFes */
    private $aoshima;

    protected function setUp()
    {
        parent::setUp();
        $this->aoshima = new AoshimaBeachParkFes();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function test_getFesName()
    {
        $this->assertEquals($this->aoshima->fes_name, $this->aoshima->getFesName());
    }

    public function test_isMusic()
    {
        $this->assertTrue($this->aoshima->isMusic());
    }

    public function test_isDrink()
    {
        $this->assertTrue($this->aoshima->isDrink());
    }

    public function test_isOutdoor()
    {
        $this->assertTrue($this->aoshima->isOutdoor());
    }

    public function test_isSunny()
    {
        $this->assertTrue($this->aoshima->isSunny());
    }

    public function test_getMemory()
    {
        $this->assertEquals($this->aoshima->memory, $this->aoshima->getMemory());
    }

}