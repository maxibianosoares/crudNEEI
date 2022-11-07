<?php
$host = "localhost";	//naran host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "crud_simples";	//naran database

//koko
$koneksaun = mysql_connect($host, $user, $pass) or die("Koneksaun ba bazedadus falla!");
mysql_select_db($name, $koneksaun) or die("La iha baze dadus neebe mk eskolla!");
?>
