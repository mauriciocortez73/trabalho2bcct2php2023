<?php


use BLL\bllFilme;

include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllFilme.php';





$bll = new \bll\bllFilme();


    $lstFilme = $bll->Select();

          
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
<style>
.ytext {
	color: #FFF000;
}
</style>
    <title>Listar Filmes</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container">
    <h1 class='ynext'>Listar Filmes</h1>
 

<table class="striped grey darken-2">
    <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>ANO</th>
        <th>VALOR R$</th>
        <th>CATEGORIA</th>
        <th>ATOR</th>
        <th>FUNÇÃO
            <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insefilme.php'">
                <i class="material-icons">add</i>
            </a>
        </th>
    </tr>
    <?php
    if ($lstFilme != null)
        foreach ($lstFilme as $filme) {
    ?>
        <tr>
            <td><?php echo $filme->getId(); ?></td>
            <td><?php echo $filme->getTitulo(); ?></td>
            <td><?php echo $filme->getAno(); ?></td>
            <td><?php echo $filme->getValor(); ?></td>
            <td><?php echo $filme->getCategoria(); ?></td>
            <td><?php echo $filme->getAtor(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detfilme.php?id=' + 
                       <?php echo $filme->getId(); ?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtfilme.php?id=' + 
                       <?php echo $filme->getId(); ?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $filme->getId(); ?>)">
                    <i class="material-icons">delete_forever</i>
                </a>
            </td>
            </td>
        </tr>
    <?php
        }
    ?>


</table>
<br>
<br>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include_once '../footer.php';?>
</body>

</html>


<script>
    function remover(id) {
        if (confirm('Excluir o Filme ' + id + '?')) {
            location.href = 'remfilme.php?id=' + id;
        }
    }
</script>