<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST");
include('../configs.php');

function postCategory($name, $tax)
{
    $addCategory = myPDO->prepare("INSERT INTO CATEGORIES(name, tax) VALUES ('{$name}', {$tax})");
    $addCategory->execute();
};
