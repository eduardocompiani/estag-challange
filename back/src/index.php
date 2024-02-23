
<?php
error_log('Sou um log');
echo "Olá mundo";


$host = "pgsql_desafio";
$db = "applicationphp";
$user = "root";
$pw = "root";

$myPDO = new PDO("pgsql:host=$host;dbname=$db", $user, $pw);

// exemplo de insert
$statement = $myPDO->prepare("INSERT INTO mytable (DESCRIPTION) VALUES ('TEST PHP')");
$statement->execute();

// exemplo de fetch
$statement1 = $myPDO->query("SELECT * FROM mytable");
$data = $statement1->fetch();

echo "<br>";
print_r($data);

// exemplo de fetch2
$statement2 = $myPDO->query("SELECT * FROM mytable");
$data2 = $statement2->fetchALL();

echo "<br>";
print_r($data2);