<?php
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\Filme.php';
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllFilme.php';

   $filme= new \MODEL\Filme(); 
   
   $filme->setId($_POST['txtID']);
   $filme->setTitulo($_POST['txtTitulo']);
   $filme->setAno($_POST['txtAno']);
   $filme->setValor($_POST['txtValor']); 
   $filme->setCategoria($_POST['txtCategoria']);
   $filme->setAtor($_POST['txtAtor']); 
   
   $bll = new \BLL\bllFilme(); 
   $bll->Update($filme); 
   
   header("location: listfilme.php");
  
?>