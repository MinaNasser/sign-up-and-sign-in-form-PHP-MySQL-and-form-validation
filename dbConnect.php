<?php 
$host="http://localhost:8888/";
$dbname='auth';
$username='root';
$password='';

$pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
