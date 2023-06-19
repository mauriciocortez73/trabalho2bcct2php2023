<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\ator.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllator.php';

   $ator = new \MODEL\Ator(); 
   
   $ator->setId($_POST['txtID']);
   $ator->setNome($_POST['txtNomeArtistico']);
   $ator->setAniversario($_POST['txtNomeReal']);
   $ator->setSalario($_POST['txtNascimento']); 

   $bll = new \BLL\bllAtor(); 
   $bll->Update($ator); 
   
   header("location: lstator.php");
  
?>