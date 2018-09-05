<?php
namespace Test;

use Fes\WildBunchFes;

class WildBunchFesTest extends CommonTestCase
{
    /** @var WildBunchFes */
    private $wbf;

    protected function setUp()
    {
        parent::setUp();
        $this->wbf = new WildBunchFes();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function test_getFesName()
    {
        $this->assertEquals($this->wbf->fes_name, $this->wbf->getFesName());
    }

    public function test_isMusic()
    {
        $this->assertTrue($this->wbf->isMusic());
    }

    public function test_isDrink()
    {
        $this->assertTrue($this->wbf->isDrink());
    }

    public function test_isOutdoor()
    {
        $this->assertTrue($this->wbf->isOutdoor());
    }

    public function test_isSunny()
    {
        $this->assertTrue($this->wbf->isSunny());
    }

    public function test_getMemory()
    {
        $this->assertEquals($this->wbf->memory, $this->wbf->getMemory());
    }

}