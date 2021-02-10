<?php

$host="localhost";
$dbName="magmatech";
$userName="root";
$password="";
$options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];


$db=new PDO("mysql:host=$host;dbname=$dbName;charset=utf8",$userName,$password,$options);
?>