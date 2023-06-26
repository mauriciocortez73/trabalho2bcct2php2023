<?php


use BLL\bllEmpfilme;

include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllEmpfilme.php';

$bll = new \bll\bllEmpfilme();

$lstempfilme = $bll->Select();
          
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



    <title>Listar Locações</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container">
    <h1>Listar locações</h1>
<table class="striped green lighten-2">
    <tr>
        <th>ID</th>
        <th>FILME</th>
        <th>RETIRADA</th>
        <th>DEVOLUÇÃO</th>
        <th>VALOR R$</th>
        <th>FUNÇÃO
            <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insempfilme.php'">
                <i class="material-icons">add</i>
            </a>
        </th>
    </tr>
    <?php
    if ($lstempfilme != null)
        foreach ($lstempfilme as $empfilme) {
    ?>
        <tr>
            <td><?php echo $empfilme->getId(); ?></td>
            <td><?php echo $empfilme->getFilme(); ?></td>
            <td><?php echo $empfilme->getRetirada(); ?></td>
            <td><?php echo $empfilme->getDevolucao(); ?></td>
            <td><?php echo $empfilme->getValor(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detempfilme.php?id=' + 
                       <?php echo $empfilme->getId(); ?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtempfilme.php?id=' + 
                       <?php echo $empfilme->getId(); ?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $empfilme->getId(); ?>)">
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
        if (confirm('Excluir a Locacao ' + id + '?')) {
            location.href = 'remempfilme.php?id=' + id;
        }
    }
</script>