<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllfilme.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllfilme(); 
   $bll->Delete($id); 
   
   header("location: lstfilme.php");
  
?>