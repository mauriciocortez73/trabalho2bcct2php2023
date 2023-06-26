<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllCliente.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllCliente(); 
   $bll->Delete($id); 
   
   header("location: lstcliente.php");
  
?>