<?php

namespace Bootstrap;
require dirname(__DIR__) . '/vendor/autoload.php';

use Fes\Circle;
use Fes\WildBunchFes;
use Fes\AoshimaBeachParkFes;
use Fes\MatsuriMIYAZAKI;


class Wahatashi
{
    public $circle;
    public $wbf;
    public $m_miyazaki;
    public $aoshima;

    protected $arrDoList = array(
        'getFesName',
        'isMusic',
        'isDrink',
        'isOutdoor',
        'isSunny',
        'getMemory'
    );

    public function __construct()
    {
        $this->circle = new Circle();
        $this->wbf = new WildBunchFes();
        $this->m_miyazaki = new MatsuriMIYAZAKI();
        $this->aoshima = new AoshimaBeachParkFes();
    }

    /**
     * @return void
     */
    public function done()
    {
        $arrRet = array();
        $arrRet[get_class($this->circle)] = $this->doneList($this->circle);
        $arrRet[get_class($this->wbf)] = $this->doneList($this->wbf);
        $arrRet[get_class($this->m_miyazaki)] = $this->doneList($this->m_miyazaki);
        $arrRet[get_class($this->aoshima)] = $this->doneList($this->aoshima);

        var_dump($arrRet);
    }

    /**
     * @param string $class
     * @return array $arrRet
     */
    public function doneList($class)
    {
        $arrRet = array();
        foreach ($this->arrDoList as $item){
            $arrRet[$item] = $class->{$item}();
        }
        return $arrRet;
    }
}

$i_am = new Wahatashi();
$i_am->done();