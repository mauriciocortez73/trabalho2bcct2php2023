<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllcliente.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllcliente(); 
   $bll->Delete($id); 
   
   header("location: lstcliente.php");
  
?>