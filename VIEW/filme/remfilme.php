<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllator.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllAtor(); 
   $bll->Delete($id); 
   
   header("location: lstator.php");
  
?>