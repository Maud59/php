<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 14:25
 *
 * Exercice du maximum
 */

$numbers = [12,56,83,96,41,2,75];
function valMax(array $nums){
    $max = $nums[0];
    for($i = 1; $i < count($nums); $i++){
        if($max < $nums[$i]){
            $max = $nums[$i];
        }
    }
    return $max;
}

echo valMax($numbers);
echo'<br>';
echo max($numbers);