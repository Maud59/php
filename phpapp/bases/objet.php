<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 14:55
 */

class Lion {
    private $name;
    public function setName(string $name){
        $this->name = $name;
        return $this;
    }
    public function getName():string{
        return $this->name;
    }
}

$lion = new Lion();
$lion->setName( "Simba");

echo $lion->getName();