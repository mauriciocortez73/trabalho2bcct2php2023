
<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: ../index.php");   
?> 


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="style.css">
	
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

    <title>Sistema de Controle Locadora</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper red darken-1">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="\trabalho2bcct2php2023\VIEW\cliente\lstcliente.php">Cliente</a></li>
                <li><a href="\trabalho2bcct2php2023\VIEW\ator\lstator.php">Atores</a></li>
                <li><a href="\trabalho2bcct2php2023\VIEW\filme\listfilme.php">Filmes</a></li>
                <li><a href="\trabalho2bcct2php2023\VIEW\empfilme\lstempfilme.php">Emprestar filme</a></li>
                <li><a href="\trabalho2bcct2php2023\VIEW\logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

</body>

</html>