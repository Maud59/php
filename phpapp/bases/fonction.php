<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 11:36
 * @param string $name
 * @return string
 */

function sayHello(string $name){
    return "Hello $name";
}

echo sayHello('Jean-Paul');
echo'<br>';

$products = ['MacBookPro','GoogleBook','Asus 7.8','Lenovo 2.5'];

function findProduct($index){
    global $products;

    return $products[$index] ?? null;

}
function findProductByName($name){
    global $products;
    $key = array_search($name,$products);

    if ($key === false){ // Vérifie que la valeur n'est pas égal à false pour afficher l'index
        return null;
    }
    return $key;

}

echo findProduct(1);
echo '<br>';
echo findProductByName('MacBookPro');
echo '<br>';