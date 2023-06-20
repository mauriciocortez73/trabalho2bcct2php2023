<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\filme.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllfilme.php';

   $filme = new \MODEL\filme(); 
   
   $filme->setTitulo($_POST['txtTitulo']);
   $filme->setAno($_POST['txtAno']);
   $filme->setValor($_POST['txtValor']); 
   $filme->setCategoria($_POST['txtCategoria']);

   $bll = new \BLL\bllfilme(); 
   $bll->Insert($filme); 
   
   header("location: lstfilme.php");
  
?>