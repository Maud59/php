<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 15:09
 */
ini_set('display_errors','On');

require 'classTV.php'; // ordre important car la télécommande a besoin de la télé
require 'classTelecom.php';

$tv = new Television();
$telecom = new Telecommande($tv);

$telecom->increaseVolume(); // augmente le volume avec la telecommande
$telecom->increaseVolume();
$telecom->increaseVolume();
$telecom->increaseVolume();
$telecom->increaseVolume();
$telecom->increaseVolume();
$telecom->increaseVolume();

echo $tv->getVolume();

