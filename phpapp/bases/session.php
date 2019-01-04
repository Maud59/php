<?php
session_start();

echo session_id();

$_SESSION['name']='Rudy';
$_SESSION['age']=89;
$_SESSION['qui']=55;

echo $_SESSION['name'];