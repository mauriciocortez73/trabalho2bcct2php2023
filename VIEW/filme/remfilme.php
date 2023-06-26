<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllFilme.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllFilme(); 
   $bll->Delete($id); 
   
   header("location: listfilme.php");
  
?>