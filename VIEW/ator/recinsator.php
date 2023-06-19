<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\ator.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllator.php';

   $operador = new \MODEL\Ator(); 
   
   $operador->setNomeArtistico($_POST['txtNomeArtistico']);
   $operador->setNomeReal($_POST['txtNomeReal']);
   $operador->setNascimento($_POST['txtNascimento']); 

   $bll = new \BLL\bllAtor(); 
   $bll->Insert($ator); 
   
   header("location: lstator.php");
  
?>