<?php

namespace Fes;

class AoshimaBeachParkFes extends AbstractFes implements GoodFesInterface
{
    public $fes_name;
    public $music;
    public $drink;
    public $memory;

    public function __construct()
    {
        parent::__construct();
        $this->fes_name = '「AOSHIMA BEACH PARK FES」';
        $this->music = 'sayonarablu/iri/SAIRU/DJ SARASA';
        $this->drink = '持参ウィスキーのハイボール！ハイボール！';
        $this->memory = '夕方からなので、涼しげ"';
    }
}
