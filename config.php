<?php 
session_start(); 
//set_time_limit(60); 
error_reporting(E_ALL); 
// Informatii baza de date 
$AdresaBazaDate = "127.0.0.1";
$UtilizatorBazaDate = "admin"; 
$ParolaBazaDate = "admin";
$NumeBazaDate = "proiect";
$conexiune = mysqli_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate,$NumeBazaDate) 
or die("Nu se poate stabili o conexiune către baza de date!");
?> 
 
