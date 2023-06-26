<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\Ator.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllAtor.php';

   $ator = new \MODEL\Ator(); 
   
   $ator->setNomeArtistico($_POST['txtNomeArtistico']);
   $ator->setNomeReal($_POST['txtNomeReal']);
   $ator->setNascimento($_POST['txtNascimento']); 

   $bll = new \BLL\bllAtor(); 
   $bll->Insert($ator); 
   
   header("location: lstator.php");
  
?>