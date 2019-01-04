<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 12:10
 *
 * Exercice du palindrome :
 *
 * Un mot peut être lu dans les 2 sens. Exemple : 'kayak' ou 'radar'
 * Un 'a' est un palindrome, un ' ' est un palindrome. Mais 'ad' n'est pas un palindrome.
 * la fonction doit renvoyer un boolean
 */


function palindrome($mot){
    $motlength = strlen($mot);

    if ($motlength===1 || $motlength===0 ){
        return true;
    }

    if(substr($mot,0,1)!=substr($mot,$motlength-1,1)){
        return false;
    }
    return palindrome(substr($mot,1,$motlength-2));
   }
var_dump(palindrome('coucou'));
//echo palindrome('kayak');
