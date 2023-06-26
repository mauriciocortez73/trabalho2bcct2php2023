<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\empfilme.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllEmpfilme.php';

   $empfilme = new \MODEL\Empfilme(); 
   
   $empfilme->setId($_POST['txtID']);
   $empfilme->setFilme($_POST['txtFilme']);
   $empfilme->setRetirada($_POST['txtRetirada']);
   $empfilme->setDevolucao($_POST['txtDevolucao']);
   $empfilme->setValor($_POST['txtValor']); 

   $bll = new \BLL\bllEmpfilme(); 
   $bll->Update($empfilme); 
   
   header("location: lstempfilme.php");
  
?>