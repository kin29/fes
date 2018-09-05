<?php

namespace Fes;

class MatsuriMIYAZAKI extends AbstractFes implements GoodFesInterface
{
    public $fes_name;
    public $music;
    public $drink;
    public $memory;

    public function __construct()
    {
        parent::__construct();
        $this->fes_name = '「まつり宮崎」';
        $this->music = '松崎しげる/GADORO';
        $this->drink = '飲んでない。';
        $this->memory = 'しげるさん、期待を裏切らない日焼けでした。';
    }
}