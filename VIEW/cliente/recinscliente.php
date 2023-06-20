<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\cliente.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllcliente.php';

   $cliente = new \MODEL\cliente(); 
   
   $cliente->setNome($_POST['txtNome']);
   $cliente->setCelular($_POST['txtCelular']);
   $cliente->setEmail($_POST['txtEmail']); 

   $bll = new \BLL\bllcliente(); 
   $bll->Insert($cliente); 
   
   header("location: lstcliente.php");
  
?>