<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 17:09
 */


// si le cookie au nom rasmus n'existe pas : créer le cookie, sinon, afficher la value du cookie nom rasmus
if (!isset($_COOKIE['rasmus'])){
    setcookie('rasmus', 'Createur de php');
}  else {
    echo $_COOKIE['rasmus'];
}
