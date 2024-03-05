<?php 

    $host = "pgsql_desafio";
    $db = "applicationphp";
    $user = "root";
    $pw = "root";
    
    $myPDO = new PDO("pgsql:host=$host;dbname=$db", $user, $pw);

?>