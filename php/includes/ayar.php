<?php
$host 		= "sql209.infinityfree.com";
$dbname 	= "if0_37901733_rumeli_haber";
$charset 	= "utf8";
$root 		= "if0_37901733";
$password 	= "cwokw5peIy1pJ";

try{
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
}catch(PDOExeption $error){
  echo $error->getMessage();
}