<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 15:09
 */

class Telecommande{
    private $tv;

    public function __construct(Television $tv)
    {
        $this->tv=$tv;
    }
    public function increaseVolume(){
        $this->tv->upVolume(); //La télécommande passe par la télé, pour augmenter le volume
    }

    public function decreaseVolume(){
        $this->tv->downVolume(); //La télécommande passe par la télé, pour augmenter le volume
    }
}