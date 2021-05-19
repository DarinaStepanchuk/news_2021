<?php

require_once "libraries/helpers.php";

$host = "localhost";
$port = "3306";
$dbname = "news";
$user = "root"; 
$password = "";
$connectionString = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
    
try {       
        $pdo = new PDO($connectionString, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
        echo "Virhe tietokantayhteydessä: " . $e->getMessage();
        die();
}