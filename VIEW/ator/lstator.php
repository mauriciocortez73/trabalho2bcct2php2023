<?php


use BLL\bllAtor;

include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllator.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

echo "Busca: " . $busca . "</br>";

$bll = new \bll\bllAtor();

if ($busca == null)
    $lstator = $bll->Select();
else $lstator = $bll->SelectNome($busca);
          
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



    <title>Listar Atores</title>
</head>

<body>
    <div class="container">
    <h1>Listar Atores</h1>
    <div class="row">
            <div class="input-field">
                <form action="../ator/lstator.php" method="GET" id="frmBuscaAtor" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Ator para ser selicionado" class="form-control col s10" id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>

<table class="striped green lighten-2">
    <tr>
        <th>ID</th>
        <th>NOME ARTISTICO</th>
        <th>NOME REAL</th>
        <th>NASCIMENTO</th>
        <th>FUNÇÃO
            <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insarea.php'">
                <i class="material-icons">add</i>
            </a>
        </th>
    </tr>
    <?php
    if ($lstator != null)
        foreach ($lstator as $ator) {
    ?>
        <tr>
            <td><?php echo $ator->getId(); ?></td>
            <td><?php echo $ator->getNomeArtistico(); ?></td>
            <td><?php echo $ator->getNomeReal(); ?></td>
            <td><?php echo $ator->getNascimento(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detator.php?id=' + 
                       <?php echo $ator->getId(); ?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtator.php?id=' + 
                       <?php echo $ator->getId(); ?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $ator->getId(); ?>)">
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

</body>

</html>


<script>
    function remover(id) {
        if (confirm('Excluir o Ator ' + id + '?')) {
            location.href = 'remator.php?id=' + id;
        }
    }
</script>