<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllEmpfilme.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllEmpfilme(); 
   $bll->Delete($id); 
   
   header("location: lstempfilme.php");
  
?>