<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: DELETE");
include('../configs.php');

function deleteCategory()
{
    $deleteCategory = myPDO->prepare("DELETE from CATEGORIES WHERE code=1");
    $deleteCategory->execute();
};