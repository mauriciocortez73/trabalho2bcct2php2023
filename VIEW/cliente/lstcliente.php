<?php


use BLL\bllCliente;

include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllCliente.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

echo "Busca: " . $busca . "</br>";

$bll = new \bll\bllCliente();

if ($busca == null)
    $lstcliente = $bll->Select();
else $lstcliente = $bll->SelectNome($busca);
          
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



    <title>Listar Clientes</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container">
    <h1>Listar Clientes</h1>
    <div class="row">
            <div class="input-field">
                <form action="../cliente/lstcliente.php" method="GET" id="frmBuscaCliente" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Cliente para ser selicionado" class="form-control col s10" id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>

<table class="striped green lighten-2">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CELULAR</th>
        <th>E-MAIL</th>
        <th>FUNÇÃO
            <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insecliente.php'">
                <i class="material-icons">add</i>
            </a>
        </th>
    </tr>
    <?php
    if ($lstcliente != null)
        foreach ($lstcliente as $cliente) {
    ?>
        <tr>
            <td><?php echo $cliente->getId(); ?></td>
            <td><?php echo $cliente->getNome(); ?></td>
            <td><?php echo $cliente->getCelular(); ?></td>
            <td><?php echo $cliente->getEmail(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detcliente.php?id=' + 
                       <?php echo $cliente->getId(); ?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtcliente.php?id=' + 
                       <?php echo $cliente->getId(); ?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $cliente->getId(); ?>)">
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
        if (confirm('Excluir o Cliente ' + id + '?')) {
            location.href = 'remcliente.php?id=' + id;
        }
    }
</script>