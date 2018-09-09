<?php

namespace Fes;

class Circle extends AbstractFes implements GoodFesInterface
{
    public $fes_name;
    public $music;
    public $drink;
    public $memory;

    public function __construct()
    {
        parent::__construct();
        $this->fes_name = '「Circle Fukuoka」';
        $this->music = 'ネバヤン/Yogee/cero/CHAI';
        $this->drink = 'ビール';
        $this->memory = '夏前だったので、そこまで暑くはなかった。';
    }
}
