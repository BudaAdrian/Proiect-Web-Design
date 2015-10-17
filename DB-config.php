<?php
error_reporting(E_ALL); 
// Informatii baza de date 

$AdresaBazaDate = "127.0.0.1";
$UtilizatorBazaDate = "admin"; 
$ParolaBazaDate = "admin";
$NumeBazaDate = "proiect";
/*
// 000webhost
$AdresaBazaDate = "mysql16.000webhost.com";
$UtilizatorBazaDate = "a8822804_USR"; 
$ParolaBazaDate = "123q456";
$NumeBazaDate = "a8822804_BD";

// hostinger
$AdresaBazaDate = "mysql.hostinger.ro";
$UtilizatorBazaDate = "u394788794_usr"; 
$ParolaBazaDate = "123q456";
$NumeBazaDate = "u394788794_bd";
*/
$conexiune = mysqli_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate,$NumeBazaDate) 
or die("Nu se poate stabili o conexiune către baza de date!");
?> 
 
