<?php

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'dr_spa';

try{
    $db = new PDO("mysql:host=$host; dbname=$db_name", $db_user, $db_pass);
    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_start();
    
    
}

catch(PDOException $e) {
    echo "Error 500: Internal Server Error";
    file_put_contents('PDOErrors.txt', "\n".$e->getMessage(), FILE_APPEND); # log errors to afile
}

?>