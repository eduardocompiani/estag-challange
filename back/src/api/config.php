<?php 

class DB{
    public static function connect(){
        $host = "pgsql_desafio";
        $db = "applicationphp";
        $user = "root";
        $pw = "root";

        return new PDO("pgsql:host=$host;dbname=$db", $user, $pw);
    }
}





?>