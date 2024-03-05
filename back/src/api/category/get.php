<?php 
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");
   header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT");
   include('../configs.php');
   
   function getCategories(){
       $categories = myPDO->query('SELECT * FROM CATEGORIES');
       $categories = $categories->fetchALL();
       return json_encode($categories);
   };
?>