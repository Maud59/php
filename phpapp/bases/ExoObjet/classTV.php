<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 15:08
 */

class Television{
    private $volume = 0;

    function upVolume(){
        $this->volume++;
    }

    function downVolume()
    {
        $this->volume--;
    }

    public function getVolume():int{
        return $this->volume;
    }
}