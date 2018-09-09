<?php

namespace Fes;

abstract class AbstractFes
{
    public $fes_name;
    public $music;
    public $drink;
    public $place;
    public $weather;
    public $memory;

    public function __construct()
    {
        $this->place = '野外';
        $this->weather = '快晴';
        $this->memory = 'フェス最高 ^ω^';
    }

    /**
     * @return string
     */
    public function getFesName()
    {
        return $this->fes_name;
    }

    /**
     * @return bool
     */
    public function isMusic()
    {
        return isset($this->music);
    }

    /**
     * @return bool
     */
    public function isDrink()
    {
        return isset($this->drink);
    }

    /**
     * @return bool
     */
    public function isOutdoor()
    {
        return ($this->place === '野外');
    }

    /**
     * @return bool
     */
    public function isSunny()
    {
        return ($this->weather === '快晴');
    }

    /**
     * @return string
     */
    public function getMemory()
    {
        return $this->memory;
    }
}
