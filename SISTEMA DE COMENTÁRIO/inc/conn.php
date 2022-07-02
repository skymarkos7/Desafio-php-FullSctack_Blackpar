<?php

$urlDB = "localhost";  //estava vazio
$userDB = "root"; //estava vazio
$passDB = ""; //estava vazio
$nameFB = "festa"; //estava vazio


$link =  new  mysqli($urlDB, $userDB, $passDB, $nameFB);	  
mysqli_set_charset($link,"utf8");



?>