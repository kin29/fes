<?php

namespace Fes;

class WildBunchFes extends AbstractFes implements GoodFesInterface
{
    public $fes_name;
    public $music;
    public $drink;
    public $memory;

    public function __construct()
    {
        parent::__construct();
        $this->fes_name = '「ワイルドバンチ」';
        $this->music = 'ヤバT/サカナクション/スカパラ/10-FEET/フォーリミ/teto/ハルカミライ...etc';
        $this->drink = 'ビール、ビール';
        $this->memory = 'しかし、2日目は台風直撃で中止になりました。';
    }
}