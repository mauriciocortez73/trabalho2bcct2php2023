<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\cliente.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllCliente.php';

   $cliente = new \MODEL\Cliente(); 
   
   $cliente->setId($_POST['txtID']);
   $cliente->setNome($_POST['txtNome']);
   $cliente->setCelular($_POST['txtCelular']);
   $cliente->setEmail($_POST['txtEmail']); 

   $bll = new \BLL\bllCliente(); 
   $bll->Update($cliente); 
   
   header("location: lstcliente.php");
  
?>