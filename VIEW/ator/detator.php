<?php
include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllator.php';
$id = $_GET['id'];

$bll = new  \BLL\bllAtor();
$ator = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de Operador</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Detalhes do Ator</h1>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <label for="id" class="black-text bold">
                    <h5>ID: <?php echo $ator->getId(); ?></h5>
                </label>
                <br>
                <input type="hidden" name="txtID" value=<?php echo $id; ?>>
            </div>
            <div class="input-field col s8">
                <label for="nomeartistico" class="black-text bold">
                    <h5>Nome Artistico: <?php echo $ator->getNomeArtistico(); ?></h5>
                </label>
                </br><br>
            </div>
	    <div class="input-field col s8">
                <label for="nomereal" class="black-text bold">
                    <h5>Nome Real: <?php echo $ator->getNomeReal(); ?></h5>
                </label>
                </br> </br><br>
            </div>
            <div class="input-field col s8">
                <label for="nascimento" class="black-text bold">
                    <h5>Nascimento: <?php echo $ator->getNascimento(); ?></h5>
                </label>
                </br><br>
            </div>
        </div>
        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='edtator.php?id=' +
                                     <?php echo $ator->getId(); ?>">
                Editar <i class="material-icons">edit</i>
            </button>
            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover(<?php echo $ator->getId(); ?>);">
                Remover <i class="material-icons">delete_forever</i>
            </button>
            <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstator.php'">
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
        if (confirm('Excluir o Ator ' + id + '?')) {
            location.href = 'remator.php?id=' + id;
        }
    }
</script>