<?php


use BLL\bllCliente;

include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllCliente.php';



$bll = new \bll\bllCliente();


    $lstcliente = $bll->Select();

          
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

    <title>Listar Clientes</title>
</head>

<body >
    <?php include_once '../menu.php';?>
    <div class="container">
    <h1>Listar Clientes</h1>
    

<table class="striped grey darken-2">
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
        if (confirm('Excluir o Cliente ' + id + '?')) {
            location.href = 'remcliente.php?id=' + id;
        }
    }
</script>