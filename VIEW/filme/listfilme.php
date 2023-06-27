<?php


use BLL\bllFilme;

include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllFilme.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

echo "Busca: " . $busca . "</br>";

$bll = new \bll\bllFilme();

if ($busca == null)
    $lstFilme = $bll->Select();
else $lstFilme = $bll->SelectNome($busca);
          
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

    <title>Listar Filmes</title>
</head>

<body class='fundo'>
    <?php include_once '../menu.php';?>
    <div class="container">
    <h1>Listar Filmes</h1>
    <div class="row">
            <div class="input-field">
                <form action="../filme/listfilme.php" method="GET" id="frmBuscaFilme" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Filme para ser selecionado" class="form-control col s10" id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>

<table class="striped green lighten-2">
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

    </div>
    
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