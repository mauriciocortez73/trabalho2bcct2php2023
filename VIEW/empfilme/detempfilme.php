<?php
include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllEmpfilme.php';
$id = $_GET['id'];

$bll = new  \BLL\bllEmpfilme();
$empfilme = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Locação do Filme</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container teal lighten-5 black-text col s12">
        <div class="center red darken-2">
            <h1>Detalhes da Locação do Filme</h1>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <label for="id" class="black-text bold">
                    <h5>ID: <?php echo $empfilme->getId(); ?></h5>
                </label>
                <br>
                <input type="hidden" name="txtID" value=<?php echo $id; ?>>
            </div>
            <div class="input-field col s8">
                <label for="filme" class="black-text bold">
                    <h5>Filme: <?php echo $empfilme->getFilme(); ?></h5>
                </label>
                </br><br>
            </div>
	        <div class="input-field col s8">
                <label for="retirada" class="black-text bold">
                    <h5>Retirada: <?php echo $empfilme->getRetirada(); ?></h5>
                </label>
                </br> </br><br>
            </div>
            <div class="input-field col s8">
                <label for="devolucao" class="black-text bold">
                    <h5>Devolução: <?php echo $empfilme->getDevolucao(); ?></h5>
                </label>
                </br><br>
            </div>
            <div class="input-field col s8">
                <label for="valor" class="black-text bold">
                    <h5>Valor R$: <?php echo $empfilme->getValor(); ?></h5>
                </label>
                </br><br>
            </div>
        </div>
        <div class="red darken-2 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='edtempfilme.php?id=' +
                                     <?php echo $empfilme->getId(); ?>">
                Editar <i class="material-icons">edit</i>
            </button>
            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover(<?php echo $empfilme->getId(); ?>);">
                Remover <i class="material-icons">delete_forever</i>
            </button>
            <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstempfilme.php'">
                Listar <i class="material-icons">list</i>
            </button>
            <br>
            <br>
        </div>
    </div>

</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir Locacao ' + id + '?')) {
            location.href = 'remempfilme.php?id=' + id;
        }
    }
</script>