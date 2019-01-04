<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 09:55
 */
echo "blablabla".'<br>';

$name = 'toto';
echo $name.'<br>';

$a=5;
$b=$a;
$b=&$a;
$b=10;

echo $a.'<br>';
echo $b.'<br>';

$toto ='Chuck Norris';
echo ${$name};

$arr=array('a','b','c');
$arr[] = 'd';
print_r($arr);


$fp = fopen('content.txt','r');
echo gettype($fp);
echo '<br>';

echo fread($fp, 512);