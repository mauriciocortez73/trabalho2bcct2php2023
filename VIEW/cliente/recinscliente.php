<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\Cliente.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllCliente.php';

   $cliente = new \MODEL\Cliente(); 
   
   $cliente->setNome($_POST['txtNome']);
   $cliente->setCelular($_POST['txtCelular']);
   $cliente->setEmail($_POST['txtEmail']); 

   $bll = new \BLL\bllCliente(); 
   $bll->Insert($cliente); 
   
   header("location: lstcliente.php");
  
?>