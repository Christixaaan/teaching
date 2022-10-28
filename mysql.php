<?php
$host = "localhost";
$name = "miraculous";
$user = "christiaaaan";
$passwort = "Schnurli2121";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>
